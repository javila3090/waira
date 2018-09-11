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
              <a href="{{url('/admin/user/add')}}" class="btn btn-primary btn-sm pull-right">Nuevo usuario &nbsp;&nbsp;<i class="fa fa-plus"></i></a>
              <br/>
              <br/>
              <br/>
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $u)
                    <tr>
                      <td>{{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      <td>
                        <a href="{{ route('edit_user', $u) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        @if(count($users)>1)
                        <button data-id-user="{{$u->id}}" class="btn btn-danger btn-sm delete-user" title="Delete "><i class="fa fa-trash"></i></button>
                        @endif
                        @if(\Auth::id()==$u->id)
                        <a href="#" data-id-user="{{$u->id}}" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-key"></i></a>
                        @else
                        <a href="#" data-id-user="{{$u->id}}" class="btn btn-info btn-sm reset-pass"><i class="fa fa-key"></i></a>
                        @endif
                      </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="POST" action="{{ route('change_pass_user') }}" aria-label="{{ __('Register') }}">
                            <div class="modal-body">

                              {{ csrf_field() }}
                              <div class="card-body">                        
                                <input type="hidden" name="id" value="{{$u->id}}">
                                <div class="form-group row">
                                  <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Nueva contraseña') }}</label>

                                  <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                  <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                                </div>           
                              </div>                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                          </form> 
                        </div>
                      </div>
                    </div>
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
  <!-- Modal -->
  @endsection