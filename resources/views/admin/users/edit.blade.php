  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item active">Editar</li>
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
                Editar usuario
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                data-widget="collapse"
                data-toggle="tooltip"
                title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        {!! Form::model($user,['route' => ['update_user', $user], 'method' => 'PUT']) !!}          
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">

              {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder'=>'Ingrese su nombre completo','required'=>'true']) !!}  

              @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

            <div class="col-md-6">
              {!! Form::email('email', null, ['class' => 'form-control' , 'placeholder'=>'Ingrese un email válido','required'=>'true']) !!}  

              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>         
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{url('admin/user')}}" class="btn btn-danger">Volver</a>
        </div>
        {!! Form::close() !!}
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
