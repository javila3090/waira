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
              <li class="breadcrumb-item"><a href="#">Mensajes</a></li>
              <li class="breadcrumb-item active">Ver</li>
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
                Mensaje #{{$message->id}}
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
        {!! Form::model($message,['route' => ['update_section', $message], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
            <div class="col-md-6">
              {!! Form::text('name', null, ['class' => 'form-control' , 'readonly'=>'true']) !!}  
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            <div class="col-md-6">
              {!! Form::email('email', null, ['class' => 'form-control' , 'readonly'=>'true']) !!}  
            </div>
          </div>

          <div class="form-group row">
            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>
            <div class="col-md-6">
              {!! Form::text('subject', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}  
            </div>
          </div>

          <div class="form-group row">
            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Mensaje') }}</label>
            <div class="col-md-6">
              {!! Form::textarea('message', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}  
            </div>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{url('admin/messages')}}" class="btn btn-danger">Volver</a>
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
