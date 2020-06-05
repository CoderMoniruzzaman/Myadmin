<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/dash.css">
    <!-- Font-icon css-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <div class="" id="app">
      <header class="app-header"><router-link to="/home" class="app-header__logo">M-Admin</router-link>
          <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fas fa-bars"></i></a>
          <!-- Navbar Right Menu-->
          <ul class="app-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right">
                      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog"></i> Settings</a></li>
                      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user"></i> Profile</a></li>
                      <li>
                        <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="fa fas fa-sign-out-alt"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>

                  </ul>
              </li>
          </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
          <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
              <div>
                  <p class="app-sidebar__user-name">John Doe</p>
                  <p class="app-sidebar__user-designation">Frontend Developer</p>
              </div>
          </div>
          <ul class="app-menu">
              <li><router-link to="/home" class="app-menu__item active"> <i class="app-menu__icon fas fa-tachometer-alt"></i><span class="app-menu__label">Dashboard</span></router-link></li>

              <li><router-link to="/user" class="app-menu__item"> <i class="app-menu__icon fas fa-users"></i><span class="app-menu__label">User</span></router-link></li>

              <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a class="treeview-item" href="form-components.html"><i class="icon fas fa-circle-notch"></i> Form Components</a></li>
                      <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fas fa-circle-notch"></i> Custom Components</a></li>
                      <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fas fa-circle-notch"></i> Form Samples</a></li>
                      <li><a class="treeview-item" href="form-notifications.html"><i class="icon fas fa-circle-notch"></i> Form Notifications</a></li>
                  </ul>
              </li>
              <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fas fa-circle-notch"></i> Basic Tables</a></li>
                      <li><a class="treeview-item" href="table-data-table.html"><i class="icon fas fa-circle-notch"></i> Data Tables</a></li>
                  </ul>
              </li>
              <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-file-alt"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a class="treeview-item" href="blank-page.html"><i class="icon fas fa-circle-notch"></i> Blank Page</a></li>
                      <li><a class="treeview-item" href="page-login.html"><i class="icon fas fa-circle-notch"></i> Login Page</a></li>
                      <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fas fa-circle-notch"></i> Lockscreen Page</a></li>
                      <li><a class="treeview-item" href="page-user.html"><i class="icon fas fa-circle-notch"></i> User Page</a></li>
                      <li><a class="treeview-item" href="page-invoice.html"><i class="icon fas fa-circle-notch"></i> Invoice Page</a></li>
                      <li><a class="treeview-item" href="page-calendar.html"><i class="icon fas fa-circle-notch"></i> Calendar Page</a></li>
                      <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fas fa-circle-notch"></i> Mailbox</a></li>
                      <li><a class="treeview-item" href="page-error.html"><i class="icon fas fa-circle-notch"></i> Error Page</a></li>
                  </ul>
              </li>
          </ul>
      </aside>

      <main class="app-content">
          @yield('content')
      </main>
      
    </div>


    <!-- Essential javascripts for application to work-->
    <script src="/js/app.js"></script>
    <script src="js/dash.js">


    </script>
</body>

</html>
