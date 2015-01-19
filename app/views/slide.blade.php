<!-- Sidebar -->
  <div class="sidebar">
      <div class="sidebar-dropdown"><a href="#">Navegacion</a></div>
    <!-- Search form -->
      <form class="navbar-form" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
          <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
      
    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
    <!-- Main menu with font awesome icon -->
    <li><a href="admin/" class="open"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    
     <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> <span>Novedades</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="admin/novedades/new">Cargar Novedades</a></li>
          <li><a href="admin/novedades">Listar Novedades</a></li>
        </ul>
      </li>     

      <li class="has_sub"><a href="#"><i class="fa fa-gear"></i> <span>Documentos</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="admin/documentos/new">Cargar Documentos</a></li>
          <li><a href="admin/documentos">Listar Documentos</a></li>
        </ul>
      </li>

      <li class="has_sub"><a href="#"><i class="fa fa-tasks"></i> <span>Menu</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="admin/menu/new">Cargar Menu</a></li>
          <li><a href="admin/menu">Listar Menu</a></li>
           <li><a href="admin/submenu/new">Cargar Sub-Menu</a></li>
          <li><a href="admin/submenu">Listar Sub-Menu</a></li>
        </ul>
      </li>

      

      <li class="has_sub"><a href="#"><i class="fa fa-edit"></i> <span>Banners</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="#">Cargar Banner</a></li>
          <li><a href="#">Editar Banner</a></li>
        </ul>
      </li>
      
      <li class="has_sub"><a href="#"><i class="fa fa-calendar"></i> <span>Calendario de Eventos</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="#">Agregar Evento</a></li>
          <li><a href="#">Editar Evento</a></li>
        </ul>
      </li>

      <li class="has_sub"><a href="#"><i class="fa fa-signal"></i> <span>Comentarios</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="#">Revisar Comentarios</a></li>
          <li><a href="#">Setear Comentarios</a></li>
        </ul>
      </li>
    
      <li class="has_sub"><a href="#"><i class="fa fa-bookmark"></i> <span>Avisos Clasificados</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="#">Editar Clasificados</a></li>
          <li><a href="#">Listar Clasificados</a></li>
        </ul>
      </li>

      <li class="has_sub"><a href="#"><i class="fa fa-sitemap"></i> <span>Más Populares</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
        <ul>
          <li><a href="#">Revisar Más Populares</a></li>
          <li><a href="#">Listar Más Populares</a></li>
        </ul>
      </li>

  </div>
    <!-- Sidebar ends -->