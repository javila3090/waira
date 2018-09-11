  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Páginas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Páginas</a></li>
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
                Editar páginas
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
        {!! Form::model($section,['route' => ['update_section', $section], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputTitulo">Título</label>
              {!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese un título']) !!}
            </div>
            <div class="form-group">
              <label for="exampleInputSubtitulo">Sub título</label>
              {!! Form::text('subtitle', null, ['class' => 'form-control' , 'placeholder'=>'Ingrese un subtítulo']) !!}              
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Imagen</label>
              <div class="input-group">
                <div class="custom-file">
                  {!! Form::file('image', ['class' => 'form-control' ,'placeholder'=>'Escoja un achivo']) !!}                  
                </div>              
              </div>
            </div>
            <div class="form-group">
              <label>Tipo de página</label>
              {!! Form::select('section_type_id', $section_types, @$selected_section_type, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Elija una opción']) !!}              
            </div>                
            <div class="form-group">
              <label for="exampleInputContenido">Contenido</label>
              {!! Form::textarea('content',null,['class'=>'form-control', 'rows' => 10,'id'=>'editor1']) !!}
            </div>            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{url('admin/section')}}" class="btn btn-danger">Volver</a>
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
