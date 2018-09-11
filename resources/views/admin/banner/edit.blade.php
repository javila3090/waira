  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banners</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Banners</a></li>
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
                Editar banner
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
        {!! Form::model($banner,['route' => ['update_banner', $banner], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
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
                {!! Form::file('image', ['class' => 'form-control' , 'placeholder'=>'Escoja un achivo']) !!}                  
              </div>              
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputButton">Botón</label>
            {!! Form::text('button', null, ['class' => 'form-control' , 'placeholder'=>'Ingrese el nombre del botón']) !!}              
          </div>
          <div class="form-group">
            <label>Acción del botón</label>
            <select name="button_target" class="form-control">
              <option value="">Seleccione una opción</option>
              @foreach ($sections as $section)
              <option value="{{$section->id}}" {{ ($section->id == $banner->button_target) ? 'selected=selected' : '' }}>
                {{$section->name}}
              </option>
              @endforeach
            </select>            
          </div>           
          <div class="form-group">
            <label>Tipo de banner</label>
            {!! Form::select('banner_type_id', $banner_types, @$selected_banner_type, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Elija una opción']) !!}              
          </div>                
          <div class="form-group">
            <label for="exampleInputContenido">Contenido</label>
            {!! Form::textarea('caption',null,['class'=>'form-control', 'rows' => 10, 'id'=>'editor1']) !!}
          </div>            
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{url('admin/banner')}}" class="btn btn-danger">Volver</a>
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
