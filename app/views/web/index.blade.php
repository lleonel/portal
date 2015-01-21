@extends('web.templateWeb')

@section('content')

	    	<div class="row-fluid">

			    <section id="content" class="span8 front-page posts">

			    	@foreach ($novedades as $novedad)

			    	

		    		<article class="post">
			    		<div class="post-offset">
			    			<span class="resp">
			    				<figure class="post-icon">
			    					<a href="{{ route('web_get_noticias_show', [$novedad->slug, $novedad->id]) }}" title="">
			    						 <div class="image-cropper">
			    							<img src="uploads/novedades/{{ $novedad->imagen }}"  class="img-responsive bottom"/>	
			    						 </div>    						
			    					</a>
			    				</figure>
			    			</span>
			    			<h1>
			    				<span id="ctl00_Contenido_lbl_Titulo">{{ str_limit($novedad->titulo,70)}}</span>
			    			</h1>
			    			<p><span id="ctl00_Contenido_lbl_bajada">{{ str_limit($novedad->encabezado,100)}}</span></p>
			    			<div class="post-options">
			    				<a href="{{ route('web_get_noticias_show', [$novedad->slug, $novedad->id]) }}"  class="btn btn-medium more-link">
			    					<span class="icon icon-bubble-1"></span> 
			    					<span class="resp">Leer más</span>
			    				</a>
			    			</div>
			    		</div>
			    	</article><!-- /post -->
			    

			    	@endforeach
				   

				    <div class="clearfix"></div>
				    
				    	<span class="resp"><div id="banner"></div></span>
				    
				    
				    <div class="clearfix"></div>

				    <section id="pagination"> </section>
				    
			    </section><!-- /content -->
			    
			    <aside id="sidebar" class="span4">
			    <br>

			    	
				    
				    <div class="widget live-sets">
				    	<header>
					    	<hgroup class="fancy-headers">
					    		<h1>Ultimas Noticias</h1>
					    	</hgroup>
				    	</header>
				    	<div class="playlist">
		    		  <ul>
				    			<li><p><span class="set-name" data-href="#">Tres emprendimientos que crecen</span><span class="set-time"></span></p></li>
		    			    <li><p><span class="set-name" data-href="#">Cooperativa TEC: una historia</span><span class="set-time"></span></p></li>
		    			    
		    			    <li>
		    			      <p><span class="set-name" data-href="#">La Mississippi tocará en vivo</span><span class="set-time"></span></p></li>
			    			  <li><p><span class="set-name" data-href="#">Savia Serrana: el dulce resultado</span><span class="set-time"></span></p></li>
				    		</ul>
				    	</div>
				    </div><!-- /live-stes --><!-- /upcoming-events -->

				    @if ($banner->count() > 0)
				    <div class="cont-banner">
					    <ul >
					    	@foreach($banner as $banners)
								<a  href="{{$banners->link}}">
									<img  src="uploads/banner/{{$banners->imagen}}" >
								</a>
					    	@endforeach
					    	
                        </ul>
			    	</div>
			    	@endif
				    
			    </aside>
	    	</div>
@endsection