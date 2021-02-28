<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('admin_asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="{{route('dashboard')}}" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-th-list"></i>
          <p>
            Manage Product
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add_product')}}" class="nav-link">
              <i class="fa fa-plus-circle"></i>
              <p>Add Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('view_product')}}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>Products</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-th-list"></i>
          <p>
            Manage Category
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add_category')}}" class="nav-link">
              <i class="fa fa-plus-circle"></i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('show_category')}}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>Category</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-th-list"></i>
          <p>
            Manage brand
            <!-- <i class="fa fa-th-list"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add_brand')}}" class="nav-link">
              <i class="fa fa-plus-circle"></i>
              <p>Add brand</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('show_brand')}}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>brand</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-th-list"></i>
          <p>
            Manage Division
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add_division')}}" class="nav-link">
              <i class="fa fa-plus-circle"></i>
              <p>Add Division</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('show_division')}}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>Division</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-th-list"></i>
          <p>
            Manage District
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add_district')}}" class="nav-link">
              <i class="fa fa-plus-circle"></i>
              <p>Add District</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('show_district')}}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>District</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>