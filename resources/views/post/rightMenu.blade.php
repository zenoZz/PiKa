<aside class="col-md-4 sidebar">

    <div class="widget">
        <h4 class="title">社区</h4>
        <div class="content community">
            <p><a href="javascript:void (0)">QQ群：527278156</a></p>
            <p><a href="javascript:void (0)" style="color: #f4645f"><span class="glyphicon glyphicon-globe"></span> 交流社区</a></p>
        </div>
    </div>

    <!-- start tag cloud widget -->
    <div class="widget">
        <h4 class="title">公告</h4>
        <div class="content community">
            <p>网站制作、微信开发</p>
            <p><a href="javascript:void (0)" style="color: #f4645f"><span class="glyphicon glyphicon-envelope"></span></a>：77849093@qq.com</p>
            <p><a href="javascript:void (0)" style="color: #f4645f"><span class="glyphicon glyphicon-earphone"></span></a>：15827535604</p>
        </div>
    </div>
    <!-- end tag cloud widget -->

    <!-- start widget -->
    <div class="widget">
        <h4 class="title">搬砖地址</h4>
        <div class="content download">
            <a class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#phpLink" aria-expanded="false" aria-controls="phpLink">
                LINK
            </a>
            <div class="collapse" id="phpLink">
                <div class="well">
                    <p><a href="http://blog.snsgou.com/post-42.html" class="btn btn-default btn-block" target="_blank">PHP反射入门教程</a></p>
                    <p><a href="http://www.cnblogs.com/taletao/p/4212916.html" class="btn btn-default btn-block" target="_blank">PHP 资源大全</a></p>
                    <p><a href="http://laravelbase.com/" target="_blank" class="btn btn-default btn-block">laravelbase</a></p>
                    <p><a href="http://laravel.so/" target="_blank" class="btn btn-default btn-block">laravel.so</a></p>
                    <p><a href="http://laravelacademy.org/" target="_blank" class="btn btn-default btn-block">laravel学院</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- end widget -->
    {{--<div class="widget">--}}
        {{--<h4 class="title">微信扫描</h4>--}}
        {{--<div class="content download">--}}
            {{--<img src="{{ asset("/lib/img/weixinGZH.jpg") }}" style="width:100%;height:100%">--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- start tag cloud widget -->
    <div class="widget">
        <h4 class="title">标签云</h4>
        <div class="content tag-cloud">
            @foreach($_tags as $mark=> $title)
                <a href="/post/by-tag/{{ $mark }}">{{ $title }}</a>
            @endforeach

            {{--<a href="javascript:void (0)">Laravel入门教程</a>--}}
            {{--<a href="javascript:void (0)">艾欧尼亚</a>--}}
            {{--<a href="javascript:void (0)">laravle5</a>--}}
            {{--<a href="javascript:void (0)">Laravel 5.1</a>--}}
            {{--<a href="javascript:void (0)">ORM</a>--}}
            {{--<a href="javascript:void (0)">诺克萨斯</a>--}}
            {{--<a href="javascript:void (0)">LTS</a>--}}
            {{--<a href="javascript:void (0)">PHP</a>--}}
            {{--<a href="javascript:void (0)">Composer</a>--}}
            {{--<a href="javascript:void (0)">微框架</a>--}}
            {{--<a href="javascript:void (0)">Lumen</a>--}}
            {{--<a href="javascript:void (0)">命名空间</a>--}}
            {{--<a href="javascript:void (0)">Laravel4</a>--}}


            <a href="javascript:void (0)">...</a>
        </div>
    </div>
</aside><!--end main right-->
