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
              <li class="breadcrumb-item active">Lista</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <!--Incluir mensaje de error-->
      @if (count($errors) > 0)
      @include('admin.partials.errors')
      @endif

      <!--Incluir mensaje de éxito-->
      @include('admin.partials.messages')

      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a href="{{url('/admin/banner/add')}}" class="btn btn-primary btn-sm pull-right">Nuevo banner &nbsp;&nbsp;<i class="fa fa-plus"></i></a>
              <br/>
              <br/>
              <br/>
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Subtítulo</th>
                      <th>Información</th>
                      <th>Imagen</th>
                      <th>Tipo</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($banners as $v)
                    <tr>
                      <td>{{$v->title}}</td>
                      <td>{{$v->subtitle}}</td>
                      <td>{!!$v->caption!!}</td>
                      <td>{{$v->image}}</td>
                      <td>{{$v->type->name}}</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('edit_banner', $v) }}" title="Editar"><i class="fa fa-edit"></i></a>
                        <button data-id="{{$v->id}}" class="btn btn-danger btn-sm delete-banner" title="Eliminar "><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>               
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

</div>
<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>
@endsection