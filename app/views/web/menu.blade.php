

	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner">
			<div class="container" style="width: auto;">
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="index.php" ><i class="icon-home"></i></a></li>

							@foreach (Menu::all() as $menus)

								<li><a href="{{ route($menus->link) }}" ><strong>{{$menus->menu}}</strong></a></li>
								
							@endforeach

							</ul>

							<ul class="nav pull-right">
								<li class="divider-vertical"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->username}} <b class="caret"></b></a>
							<ul class="dropdown-menu">

							@if(Auth::user()->profiles_id == 1)
								<li><a href="admin">Administración</a></li>
							@endif
								<li class="divider"></li>
								<li><a href="logout">Salir</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div>
		

	<nav id="primary-nav">
		<ul>


		

		</ul>

	</nav>


