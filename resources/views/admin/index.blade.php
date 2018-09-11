  @extends('admin.layouts.app')

  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">              
                <p><b>Visitas (Últimos 7 días)</b></p>
                <h1>{{$visitors_last_week}}</h1>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>              
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">              
                <p><b>Visitas (Último mes)</b></p>
                <h1>{{$visitors_last_month}}</h1>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>            
            </div>
          </div>
          <!-- ./col -->          
        </div>
        <!-- /.row -->         
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection



