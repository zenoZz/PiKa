@extends('admin.main')
@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <!--内容主体-->
            <div class="box-body" style="overflow-x: auto;">
                <table class="table table-striped">
                    <tr class="row">
                        <th class="col-lg-1">ID</th>
                        <th class="col-lg-2">评论文章</th>
                        <th class="col-lg-4">评论内容</th>
                        <th class="col-lg-1">评论人</th>
                        <th class="col-lg-2">评论时间</th>
                        <th class="col-lg-1">编辑</th>
                        <th class="col-lg-1">删除</th>
                    </tr>
                    @foreach($comments as $comment)
                        <tr class="row">
                            <td class="col-lg-1">
                                {{ $comment->getKey() }}
                            </td>
                            <td class="col-lg-2">
                                <a href="/post/article/{{ $comment->article_id }}" target="_blank">{{ $comment->article->title }}</a>
                            </td>
                            <td class="col-lg-4">
                                <span data-toggle="tooltip" data-original-title="{{ $comment->content }}">{{ str_limit($comment->content,50) }}</span>
                            </td>
                            <td class="col-lg-1">
                                {{ $comment->nickname }}
                            </td>
                            <td class="col-lg-2">
                                {{ $comment->created_at }}
                            </td>
                            <td class="col-lg-1">
                                <a href="/comment/edit/{{ $comment->getKey() }}"><i class="fa fa-fw fa-pencil" data-toggle="tooltip" data-original-title="修改"></i></a>
                            </td>

                            <td class="col-lg-1">
                                <a href="/comment/delete/{{ $comment->getKey() }}" id="del" onclick="return confirm('确定删除吗？')" rel="{{ $comment->comment_id }}"><i class="fa fa-fw fa-remove" data-toggle="tooltip" data-original-title="删除"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="pull-right" style="margin: 0;">
                    {!! $comments->render() !!}
                </div>
            </div><!-- /.box-body -->
            <!--内容尾部-->
            {{--<div class="box-footer clearfix">--}}
                {{--<div class="pull-right" style="margin: 0;">--}}
                    {{--{!! $comments->render() !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </section><!-- /.content -->
    <script>
        function resetinput()
        {
            $("#commentSearchForm input").val('');
            $("#commentSearchForm select").val('');
        }
    </script>
@endsection