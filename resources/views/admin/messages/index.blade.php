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
              <li class="breadcrumb-item"><a href="#">Mensajes</a></li>
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
              <p>Mensajes sin leer: <b>{{$unread_messages}}</b></p>
              <p>Total: <b>{{count($messages)}} Mensajes</b></p>
              <br/>
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>Remitente</th>
                      <th>Email</th>
                      <th>Asunto</th>
                      <th>Fecha</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($messages as $v)
                    <tr>
                      <td>{{$v->name}}</td>
                      <td>{{$v->email}}</td>
                      <td>{!!$v->subject!!}</td>
                      <td>{{$v->created_at}}</td>
                      <td>
                        @if($v->open==0)
                        <a class="btn btn-success btn-sm" href="{{ route('show_message', $v) }}" title="Abrir mensaje"><i class="fa fa-envelope"></i></a>
                        @else
                        <a class="btn btn-primary btn-sm" href="{{ route('show_message', $v) }}" title="Ver detalles"><i class="fa fa-envelope-open"></i></a>
                        @endif
                        <button data-id="{{$v->id}}" class="btn btn-danger btn-sm delete-message" title="Eliminar "><i class="fa fa-trash"></i></button>
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