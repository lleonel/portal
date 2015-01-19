@extends('web.templateWeb')
@section('content')

			    <section id="content" class="span8 blog posts">

				    <article class="post single">
			    	  <div class="post-offset">
				    	<figure class="post-icon"><a href="#" title=""><img src="uploads/novedades/{{$novedades->imagen}}" width="454" height="330"/></a></figure>
				    	<h1><span id="ctl00_Contenido_lbl_Titulo">{{$novedades->titulo}}</span><a href="#" title=""></a></h1>
				    	<time datetime="2013-01-09T15:19:59+00:00" class="entry-date"><span id="ctl00_Contenido_lbl_fecha">{{$novedades->fecha_alta}}</span></time>
				    	
				    	{{$novedades->cuerpo}}

			    	  </div>
				    </article><!-- /post -->
				    
			    </section><!-- /content -->
@endsection	