<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="{{url('/admin')}}" class="nav-link"><i class="nav-icon fa fa-home"></i>  Inicio</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="{{url('/admin/messages')}}" class="nav-link"><i class="nav-icon fa fa-envelope"></i>  Mensajes @if(Session::has('unread_messages')) <b>({{ Session::get('unread_messages')}})</b> @endif</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="{{url('/')}}" class="nav-link"><i class="nav-icon fa fa-external-link-square"></i>  Ir al sitio web</a>
		</li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				<p style="color: #555">Salir &nbsp;&nbsp;<i class="nav-icon fa fa-sign-out"></i></p>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>   
	</ul>
</nav>