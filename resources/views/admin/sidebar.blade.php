  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{//{ asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">PI2B ITI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{//{ asset('storage/'.$tenant['image']) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{//{ ucfirst($tenant['full_name'])}}</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{//{URL::to('tenant/dashboard/'.$user_id)}}" class="nav-link {//{$title=='Dashboard'?'active':''}}">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview {//{in_array($title,['Slider','About','Benefit','Partner','Testimoni','Contact'])?'menu-open':''}}">
            <a href="#" class="nav-link {//{in_array($title,['Slider','About','Benefit','Partner','Testimoni','Contact'])?'active':''}}">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Inkubator 
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link {//{$title=='Slider'?'active':''}}">
                  <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-chart-bar nav-icon"></i> 
                    Daftar Inkubator
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/superadmin/addincubator')}}" class="nav-link {//{$title=='About'?'active':''}}">
                  
                 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <i class="fa fa-user-plus nav-icon"></i> 
                   Tambah Inkubator
                 </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {//{$title=='Benefit'?'active':''}}">
                  <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-pen nav-icon"></i> 
                    Edit Inkubator
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {//{$title=='Partner'?'active':''}}">
                  <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-eraser nav-icon"></i> 
                    Hapus Inkubator
                  </p>
                </a>
              </li>
            </ul>
          </li>     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inkubator<!-- {//{$title}} --></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>