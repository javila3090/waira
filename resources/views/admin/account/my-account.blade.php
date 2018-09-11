  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mi cuenta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mi cuenta</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!--Incluir mensaje de error-->
      @if (count($errors) > 0)
      @include('admin.partials.errors')
      @endif

      <!--Incluir mensaje de éxito-->
      @include('admin.partials.messages')

      <div class="row">
        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Información de usuario
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                data-widget="collapse"
                data-toggle="tooltip"
                title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool btn-sm"
              data-widget="remove"
              data-toggle="tooltip"
              title="Remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        {!! Form::model($user,['route' => ['update_my_account', $user], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputName">Nombre</label>
              {!! Form::text('name', null, ['class' => 'form-control','required'=>'true', 'placeholder'=>'Ingrese su nombre completo']) !!}             
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail">Correo electrónico</label>
              {!! Form::email('email', null, ['class' => 'form-control','required'=>'true','placeholder'=>'Ingrese un correo electrónico']) !!}
            </div>             
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
</div>


@endsection
