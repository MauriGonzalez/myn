<?php
 
include('./includes/nav.php');


if (!empty($_GET['pagina']))
{
include($_GET['pagina'].'.php');
}else{ 
?>

<div id="slider" class="slider-big">
	<h1>Bienvenidos a MyN indumentaria</h1>
	<a href="?pagina=blog" style="text-decoration: none; color: white">IR AL BLOG</a>
</div> 

   

<?php
}#cierre ELSE
include('./includes/footer.php');?>		
