<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Julio Avila | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datepicker/datepicker3.css')}}">
  <!-- Datatables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables/dataTables.bootstrap4.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker-bs3.css')}}">

  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" media="screen">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body >
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.partials.navbar')

    <!-- Menu -->
    @include('admin.partials.sidebar')

    <!-- Page Content -->

    @section('content')
    @show


    <!-- Footer -->
    @include('admin.partials.footer')

  </div>

  <!-- Bootstrap core JavaScript -->
  <!-- js -->
  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{asset('adminlte/plugins/morris/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('adminlte/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('adminlte/plugins/knob/jquery.knob.js')}}"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

  <script src="{{asset('adminlte/plugins/ckeditor/ckeditor.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
  
  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
  
  <script src="{{asset('adminlte/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('adminlte/plugins/fastclick/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('adminlte/js/pages/dashboard.js')}}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/js/demo.js')}}"></script>
  <script src="{{asset('js/sweetalert.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
    .create(document.querySelector('#editor1'))
    .then(function (editor) {
        // The editor instance
      })
    .catch(function (error) {
      console.error(error)
    })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })

    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

  })

    $('.delete-banner').on('click', function(){
      var id = $(this).attr('data-id');
      var theElement = $(this);
      swal({   
        title: "¿Estás Seguro?",
        text: "No podrás deshacer esta acción",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro", 
        closeOnConfirm: true 
      },function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: 'GET',
            url: '/admin/banner/destroy/'+id,
            success: function(data) {
              if(data.message=='Ok'){
                swal(
                  '¡Hecho!',
                  'Registro eliminado con éxito',
                  'success'
                  )                
              }
            }
          });
          $(theElement).closest('tr').remove();
        }
      });
    })

    $('.delete-section').on('click', function(){
      var id = $(this).attr('data-id');
      var theElement = $(this);
      swal({   
        title: "¿Estás Seguro?",
        text: "No podrás deshacer esta acción",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro", 
        closeOnConfirm: true 
      },function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: 'GET',
            url: '/admin/section/destroy/'+id,
            success: function(data) {
              if(data.message=='Ok'){
                swal(
                  '¡Hecho!',
                  'Registro eliminado con éxito',
                  'success'
                  )
              }
            }
          });
          $(theElement).closest('tr').remove();
        }
      });
    })

    $('.reset-pass').on('click', function(){
      var id = $(this).attr('data-id-user');
      swal({   
        title: "¿Estás Seguro?",
        text: "La contraseña del usuario seleccionado sera reestablecida",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro", 
        closeOnConfirm: true 
      },function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: 'GET',
            url: '/admin/user/reset/'+id,
            success: function(data) {
              if(data.message=='Ok'){
                swal(
                  '¡Hecho!',
                  'Contraseña reestablecida con éxito',
                  'success'
                  )
              }
            }
          });
        }
      });
    })  


    $('.delete-message').on('click', function(){
      var id = $(this).attr('data-id');
      var theElement = $(this);
      swal({   
        title: "¿Estás Seguro?",
        text: "El mensaje seleccionado será eliminado",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro", 
        closeOnConfirm: true 
      },function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: 'GET',
            url: '/admin/messages/destroy/'+id,
            success: function(data) {
              if(data.message=='Ok'){
                swal(
                  '¡Hecho!',
                  'Registro eliminado con éxito',
                  'success'
                  )
              }else{
                  swal(
                  '¡Error!',
                  'Ocurrión un error, por favor vuelva a intentarlo',
                  'warning'
                  )
              }
            }
          });
          $(theElement).closest('tr').remove();
        }
      });
    })

    $('.delete-user').on('click', function(){
      var id = $(this).attr('data-id-user');
      var theElement = $(this);
      swal({   
        title: "¿Estás Seguro?",
        text: "El usuario seleccionado será eliminado",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, estoy seguro", 
        closeOnConfirm: true 
      },function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: 'GET',
            url: '/admin/user/destroy/'+id,
            success: function(data) {
              if(data.message=='Ok'){
                swal(
                  '¡Hecho!',
                  'Usuario eliminado con éxito',
                  'success'
                  )
              }else{
                  swal(
                  '¡Error!',
                  'Ocurrión un error, por favor vuelva a intentarlo',
                  'warning'
                  )
              }
            }
          });
          $(theElement).closest('tr').remove();
        }
      });
    })    

  </script>
</body>
</html>
