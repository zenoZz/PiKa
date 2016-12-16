<?php namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Facades\ArticleRepository;
use App\Facades\CommentRepository;
use EndaEditor;
use App\Http\Requests\Comment\CreateRequest;
use Mail;
class PostController extends Controller {


    public function index(Request $request)
    {
        $title = '';
        $mod = new Article();
        if ($request->has('title'))
        {
            $title = $request->get('title');
            $mod = $mod->where('title', 'LIKE', "%$title%");
        }
        $articles = $mod->where('on_line', Article::ARTICLE_IS_ONLINE_YES)->orderBy('updated_at', 'desc')->paginate(5);
        return view('post.index', compact('articles', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function show($id)
    {
        $article = ArticleRepository::find($id);
        $page_title = $article->title;
        return view('post.article', compact('article', 'page_title'));
    }

    public function getByTag($tag)
    {
        $articles= ArticleRepository::getArticlesByTag($tag);
        $title = '';
        return view('post.index', compact('articles', 'title'));
    }

    public function getByType($type)
    {
        if (!in_array($type, array_keys(Article::$ARTICLE_TYPE)))
            abort(404);
        $articles = Article::where('type', $type)->where('on_line', Article::ARTICLE_IS_ONLINE_YES)->orderBy('updated_at', 'desc')->paginate(5);
        $title = '';
        return view('post.index', compact('articles', 'title'));
    }

    public function postComment(CreateRequest $request)
    {
        $input = $request->all();
        $article = Article::findOrFail($input['article_id']);
        CommentRepository::create($input);

        $data = ['email'=>'77849093@qq.com', 'name'=>'zz', 'url' => route('post.show', ['id' => $article->getKey()]), 'nickname' => $input['nickname']];
        Mail::send('email.activemail', $data, function($message) use($data, $article)
        {
            $title = $data['nickname'].'对文章 '.$article->title.'有新的评论';
            $message->to($data['email'])->subject($title);
        });
        return responseS('res.comment.create_comment_success');
    }

    public function getRegister()
    {
        return view('post.register');
    }

    public function postRegister(Request $request)
    {
        //验证
        $this->validate($request, [
            'username' => 'required|max:255|unique:visitors',
            'password' => 'required|min:6',
            'email'    => 'required|email|max:255|unique:visitors',
        ]);

        $visitor = new Visitor();
        $visitor->username = $request->input('username');
        $visitor->password = bcrypt($request->input('password'));
        $visitor->email = $request->input('email');
        $visitor->phone = $request->input('phone');
        $visitor->save();

        return redirect('auth/login');
        //return redirect($this->redirectPath('auth/login'))->with($this->statusVar, Lang::get('auth.addUserSuccess'));
    }

    /**
     * 动作：登录
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')]))
        {
            return redirect()->back();
        }
        return redirect()->intended('auth/login');
    }



}