<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Facades\TagRepository;
use App\Http\Controllers\Controller;
class TagController extends Controller
{
    public function index()
    {
        $data = TagRepository::paginate(config('repository.page-limit'));

        return view('admin.tag.list', compact('data'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        TagRepository::create($request->all());

        return responseSuccess('', route('tag.index'));
    }

    public function edit($id)
    {
        $tag = TagRepository::find($id);

        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        TagRepository::updateById($id, $request->all());

        return responseSuccess('', route('tag.index'));
    }

    public function getDelete($id)
    {
        TagRepository::destroy($id);

        return responseSuccess();
    }
}
