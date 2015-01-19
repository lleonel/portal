<div class="container">
		        <!--
		        Depending on purpose, there are two types of sliders included (Nivo Slider & Flexslider)
		        For each slider you have to use an appropiate markup in order to use it
		        -->
		        
		        <!-- Flexslider Basic Markup -->
                <span class="resp">
		        <div class="flex-container">
			        <div class="flexslider">
				        <ul class="slides">
					      
					      @foreach (Slider::all() as $slide) 
					   
								<li>
								    <img src="/uploads/slider/{{$slide->imagen}}" />
								    <div class="flex-caption">
								    	<div>
								        	<hgroup class="fancy-headers">
									        	
										        <h2>{{$slide->titulo}}</h2>
										    </hgroup>
										    <p>{{$slide->descripcion}}</p>
								    	</div>
								    </div>
								</li>
					      
					      @endforeach

					       





						  
						</ul>
					</div>
				</div></span>
		        <!-- End Flexslider Basic Markup -->
        	</div>