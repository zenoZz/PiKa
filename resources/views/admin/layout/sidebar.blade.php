<aside class="main-sidebar">
    <section class="sidebar">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        {!! $viewService->renderSidebar($menus, $route) !!}}
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>