<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('images/sidebar-1.jpg') }}">
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        {{ config('app.name', 'Xscript Indonesia') }}
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item  ">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="material-icons">person</i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('admin.articles.index') }}">
            <i class="material-icons">library_books</i>
            <p>Articles</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
      </ul>
    </div>
  </div>