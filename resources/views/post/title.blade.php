<header class="container-fluid" style="margin-bottom: 0;padding-top: 10px;padding-bottom: 50px;">
    <div class="row">
        <!--标头-->
        <div class="col-sm-5 col-sm-offset-3 text-center" style="margin-top: 30px;">
            {{--<input type="" class="form-control" placeholder="">--}}
            {{--<h1 style="color: #ffffff"><span class="hide">Laravel - </span>Laravel Blog <a href="###"><small style="font-size:0.5em;color: #ffffff">--zeno</small></a></h1>--}}
            {{--<form action="{{ route('post.index') }}" method="get">--}}
                {{--<div class="input-group text-center">--}}
                    {{--<input type="text" class="form-control">--}}
                    {{--<span class="input-group-addon">搜索</span>--}}
                {{--</div>--}}
            {{--</form>--}}
            <form class="navbar-form" role="search" action="{{ route('post.index') }}" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="" name="title" value="{{ $title }}">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
        </div>
        <div class="col-sm-12" style="text-align: center">
        </div>
    </div>
</header>