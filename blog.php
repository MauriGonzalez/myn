 <div class="clearfix"></div>
 <div id="slider" class="slider-small">
        <h1>C R U D</h1>
    </div>
    <div class="center">
           <section id="content">
               <h2>Ultimos articulos</h2>
                  <script>
                 var template = document.getElementById("article-template");
                 var clonar = template.cloneNode(true);
                 var article  = document.getElementById("articles");
                 for(var i = 0 ; i <= 5; i++) {
                  
                 }
               </script>
               <!--listado de articulos-->
               <article class="article" id="article-template">
                <div class="image-wrap" >
                  <img src="descarga.jpg" alt="">
                </div> 
                <h2>articulo de prueba</h2> 
                <span>
                  hace 5 minutos
                </span>
                <a href="">Leer Mas</a> 
               </article>
               </section> 
                <!--barra lateral-->
               <aside id="sidebar" >
                 <div id="nav-blog" class="sidebar-item">
                   <h3>Puedes hacer esto</h3>
                       <a href="#" class="btn">Crear</a>
                   </div> 
                 <div id="search" class="sidebar-item">
                   <h3>buscador</h3>
                      <p>encuentra el articulo que buscas</p>
                       <form >
                           <input type="text">
                           <input type="submit" value="Buscar" class="btn">
                       </form>
                   </div>                              
               </aside>
            </div>

