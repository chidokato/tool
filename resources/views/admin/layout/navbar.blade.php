<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin/dashboard"> >> {{asset('')}}</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
		<li><a href="admin/profile/list"><i class="fa fa-user fa-fw"></i> {{Auth::User()->name}} </a></li>
		<li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
    </ul>

    <div class="navbar-default sidebar" id="scroll" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a></li>
                <!-- <li><a href="admin/nghiphep/add"><i class="fa fa-dashboard fa-fw"></i> Phiếu nghỉ phép</a></li> -->
                <!-- <li><a href="admin/congtac/add"><i class="fa fa-dashboard fa-fw"></i> Phiếu công tác</a></li> -->
                <!-- <li><a href="admin/ditrevesom/add"><i class="fa fa-dashboard fa-fw"></i> Phiếu đi trễ về sớm</a></li> -->
                <!-- <li><a href="admin/xacnhancong/add"><i class="fa fa-dashboard fa-fw"></i> Phiếu xác nhận công</a></li> -->
                <li><a href="admin/duyetphieu/list"><i class="fa fa-dashboard fa-fw"></i> Duyệt phiếu</a></li>
                <li><a href="admin/phong/list"><i class="fa fa-dashboard fa-fw"></i> Quản lý phòng</a></li>
                <li><a href="admin/user/list"><i class="fa fa-table fa-fw"></i> Quản lý nhân viên</a></li>
                <li><a href="admin/locphieu/list"><i class="fa fa-table fa-fw"></i> Lọc Phiếu</a></li>
            </ul>
        </div>
    </div>
</nav>