  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Información General</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Empresa</a></li>
              <li class="breadcrumb-item active">Información</li>
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
                Actualizar información
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
        {!! Form::model($company,['route' => ['update_company', $company], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputName">Empresa</label>
            {!! Form::text('name', null, ['class' => 'form-control','required'=>'true', 'placeholder'=>'Ingrese el nombre de la empresa']) !!}             
          </div>
          <div class="form-group">
            <label for="exampleInputPhone1">Teléfono 1</label>
            {!! Form::number('phone_1', null, ['class' => 'form-control','required'=>'true', 'placeholder'=>'Ingrese un número de teléfono']) !!}
          </div>
          <div class="form-group">
            <label for="exampleInputPhone2">Teléfono 2</label>
            {!! Form::number('phone_2', null, ['class' => 'form-control','placeholder'=>'Ingrese un número de teléfono adicional']) !!}
          </div>  
          <div class="form-group">
            <label for="exampleInputEmail1">Email 1</label>
            {!! Form::email('email_1', null, ['class' => 'form-control','required'=>'true','placeholder'=>'Ingrese un correo electrónico']) !!}
          </div>  
          <div class="form-group">
            <label for="exampleInputEmail2">Email 2</label>
            {!! Form::email('email_2', null, ['class' => 'form-control','placeholder'=>'Ingrese un correo electrónico adicional']) !!}
          </div>
          <div class="form-group">
            <label for="exampleInputFacebook">Facebook</label>
            {!! Form::text('facebook', null, ['class' => 'form-control','placeholder'=>'Ingrese la información de su facebook']) !!}
          </div>
          <div class="form-group">
            <label for="exampleInputInstagram">Instagram</label>
            {!! Form::text('instagram', null, ['class' => 'form-control','placeholder'=>'Ingrese la información de su instagram']) !!}
          </div>   
          <div class="form-group">
            <label for="exampleInputFile">Logo</label>
            <div class="input-group">
              <div class="custom-file">
                {!! Form::file('logo', null, ['class' => 'form-control','placeholder'=>'Seleccione una imagen']) !!}
              </div>              
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputAddress">Dirección</label>
            {!! Form::textarea('address', null, ['class' => 'form-control','placeholder'=>'Ingrese una dirección']) !!}
          </div> 
          <div class="form-group">
            <label for="exampleInputReview">Reseña</label>
            {!! Form::textarea('review',null,['class'=>'form-control', 'rows' => 10, 'id'=>'editor1']) !!}
          </div>             
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
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
