@extends('admin.main')
@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="box">
            <!--内容主体-->
            <div class="box-body" style="overflow-x: auto;">
                <table class="table table-hover text-center">
                    <thead>
                        <tr class="row">
                            <th class="col-lg-1">ID</th>
                            <th class="col-lg-2">标题</th>
                            <th class="col-lg-4">标签</th>
                            <th class="col-lg-1">是否MD编写</th>
                            <th class="col-lg-1">作者</th>
                            <th class="col-lg-2">最后更新时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    @foreach($articles as $article)
                        <tr class="row">
                            <td class="col-lg-1">
                                {{ $article->getKey() }}
                            </td>
                            <td class="col-lg-2">
                                <a href="{{ route('post.show', ['id' => $article->getKey()]) }}" target="_blank">{{ $article->title }}</a>
                            </td>
                            <td class="col-lg-4">
                                @foreach($article->tags as $tag) {{ $tag->title }}&nbsp;@endforeach
                            </td>
                            <td class="col-lg-1">
                                {{ App\Models\Article::$ARTICLE_IS_MARKDOWN[$article->is_markdown] }}
                            </td>
                            <td class="col-lg-1">
                                {{ $article->author }}
                            </td>
                            <td class="col-lg-2">
                                {{ $article->updated_at }}
                            </td>
                            <td>
                                <a href="{{ route('article.edit', ['id' => $article->getKey()]) }}" class="btn btn-primary btn-flat">修改</a> |
                                <button class="btn btn-danger btn-flat"
                                        data-url="{{route('article.destroy', ['id' => $article->getKey()])}}"
                                        data-toggle="modal"
                                        data-target="#delete-modal"
                                        >
                                    删除
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="pull-right" style="margin: 0;">
                    {!! $articles->render() !!}
                </div>
            </div><!-- /.box-body -->
        </div>

    </section><!-- /.content -->
@endsection
@section("after.js")
    @include('admin.layout.delete',['title'=>'操作提示','content'=>'你确定要删除这篇文章吗?'])
@endsection