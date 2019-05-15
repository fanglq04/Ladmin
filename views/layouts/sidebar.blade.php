<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/packages/admin/avatar.png" width="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::guard('admin')->user()->username }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线 </a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">菜单</li>
            {!! request()->get("permissions") !!}
        </ul>
    </section>
</aside>


