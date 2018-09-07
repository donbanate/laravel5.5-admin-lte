<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('storage/images/logo.png')}}" class="img-thumbnail" alt="User Image">
        </div>
        <div class="pull-left info" style="padding-top:1rem;">
          {{-- <p class="blockquote" style="font-size:2rem; padding-top:1rem;">PPSI</p> --}}
            <p><strong>PPSI</strong></p>
            <p style="font-size:1.1rem;"><small>Pierre & Paul Solutions Inc.</small></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li id="sidebar-my-files"><a href="view_files"><i id="sidebar-my-files-color" class="fa fa-folder"></i> <span id="sidebar-my-files-color-text">My Files</span></a></li>
        <li id="sidebar-archives"><a href="archives"><i id="sidebar-archives-color" class="fa fa-archive"></i> <span id="sidebar-archives-color-text">Archives</span></a></li>
        <li id="sidebar-manage-users"><a href="create"><i id="sidebar-manage-users-color" class="fa fa-users"></i> <span id="sidebar-manage-users-color-text">Manage Users</span></a></li>
        <li id="sidebar-user-settings" class="treeview menu-close">
          <a href="#">
            <i id="sidebar-user-settings-color" class="fa fa-gears"></i><span id="sidebar-user-settings-color-text">Account Settings</span>
            <span class="pull-right-container">
              <i class="glyphicon glyphicon-menu-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="passwords"><i class="fa fa-lock"></i>Manage Password</a></li>
            <li><a href="profile"><i class="fa fa-user-circle"></i>Profile Settings</a></li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidglyphicon glyphicon-->
  </aside>
  <script src="{{url('/storage/scripts/submenu/sidebarMenu.js')}}"></script>
