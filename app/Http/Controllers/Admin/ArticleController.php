<?php namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Facades\ArticleRepository;
use App\Facades\TagRepository;
use Auth;
use EndaEditor;
class ArticleController extends BaseController{

    /**
     * @param Request $request
     * @return \Illuminate\view\view
     */
    public function index(Request $request)
    {
        $articles = ArticleRepository::paginate(config('repository.page-limit'));
        return view('admin.article.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //获取所有tags
        $tags = TagRepository::lists('title', 'id');
        return view('admin.article.create', compact('tags'));
    }


    public function getMarkdown()
    {
        //获取所有tags
        $tags = TagRepository::lists('title', 'id');
        return view('admin.article.createByMarkdown', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['author'] = $this->_user->name;
        $data['user_id'] = $this->_user->id;

        $article = ArticleRepository::create($data);
        //添加标签
        $article->tags()->sync($request->get('tags'));

        return responseSuccess('res.article.create_article_success', route('article.index'));
    }

    /**
     * 动作新增文章（byMarkdown）
     *
     * @param CreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postMarkdown(Request $request)
    {
        $data = $request->all();
        $data['author']                 = $this->_user->name;
        $data['user_id']                = $this->_user->id;
        $data['content']                = EndaEditor::MarkDecode($request->get('content'));
        $data['markdown_source']        = $request->get('content');
        $data['is_markdown']            = Article::ARTICLE_IS_MARKDOWN_YES;

        $article = ArticleRepository::create($data);
        //添加标签
        $article->tags()->sync($request->get('tags'));

        return responseSuccess('res.article.create_article_success', route('article.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article = ArticleRepository::find($id);
        //获取所有tags
        $tags = TagRepository::lists('title', 'id');
        //
        $own_tags = [];
        foreach($article->tags as $tag)
        {
            $own_tags[] = $tag->id;
        }

        if ($article->is_markdown == Article::ARTICLE_IS_MARKDOWN_YES) {
            return view('admin.article.updateMarkdown', compact('article', 'tags', 'own_tags'));
        }

        return view('admin.article.update', compact('article', 'tags', 'own_tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $article = ArticleRepository::find($id);

        ArticleRepository::updateById($id, $request->all());
        //清除原有关联关系
        $article->tags()->sync([]);

        $article->tags()->attach($request->get('tags'));

        return responseSuccess('res.update_success', route('article.index'));
    }

    public function updateMarkdown(Request $request,$id)
    {
        $article = ArticleRepository::find($id);

        $data = $request->all();
        $data['content']                = EndaEditor::MarkDecode($request->get('content'));
        $data['markdown_source']        = $request->get('content');

        ArticleRepository::updateById($id, $data);
        //清除原有关联关系
        $article->tags()->sync([]);

        $article->tags()->attach($request->get('tags'));

        return responseSuccess('res.update_success', route('article.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        ArticleRepository::destroy($id);

        return responseSuccess();
    }

}