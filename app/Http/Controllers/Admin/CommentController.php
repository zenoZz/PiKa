<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\Comment\CreateRequest;
use App\Http\Requests\Comment\UpdateRequest;
use Illuminate\Http\Request;
use App\Facades\CommentRepository;
class CommentController extends Controller {


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $data = CommentRepository::paginate(config('repository.page-limit'));
        return view('admin.comment.list', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //return view('admin.comments.index')->withComments(Comment::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRequest $request)
	{
        CommentRepository::create($request->all());

        return responseSuccess('res.comment.create_comment_success');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $comment_id
	 * @return View
	 */
	public function edit($comment_id)
	{
        $comment = CommentRepository::find($comment_id);

        return view('admin.comment.update', compact('comment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit(UpdateRequest $request, $id)
	{
        CommentRepository::updateById($id, $request->all());

        return responseSuccess('res.update_success', route('comment.index'));
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        CommentRepository::destroy($id);

        return responseSuccess();
    }

}
