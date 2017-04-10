<?php 
	plantilla::inicio();
?>

<!-- Slider del home con enlaces importantes-->
<div class="row carousel-holder">
	<div class="col-md-12">
		<div id="anuncios" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#anuncios" data-slide-to="0" class="active"></li>
				<li data-target="#anuncios" data-slide-to="1"></li>
				<li data-target="#anuncios" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				 <div class="pulse-hover item active">
				 	<a href="#">
                    <img class="slide-image" src="<?php  echo base_url('Content')?>/img/bikeCategory2.jpg" height="200" alt="">
                    </a>

                </div>
                <div class="pulse-hover item">
                    <a href="#">
                    <img class="slide-image" src="<?php  echo base_url('Content')?>/img/Partes2.jpg" alt="">
                	</a>
                </div>
                <div class="pulse-hover item">
                    <a href="#">
                    <img class="slide-image" src="<?php  echo base_url('Content')?>/img/Accesorios2.jpg" alt="">
                	</a>
                </div>
                <a class="left carousel-control" href="#anuncios" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#anuncios" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
			</div>
		</div>
	</div>
</div>
<div class="row" style="margin: 20px 0">
	<h1>Aquí va un anuncio</h1>
</div>
<!--Anuncios destacados-->
<div class="row">
	<div class="divider">
		<p><b>Nuestros Articulos destacados</b></p>
	</div>
	<div class="destacados">
		  	 

            <!--Prueba para traer la informacion desde la bf con PHP-->
            <?php
                 $titulo = '';
                 $precio = 0;
                 $descripcion = '';

                 $CI =& get_instance();

                $result = $this->db->query('SELECT * FROM anuncios ORDER BY fecha_publicacion DESC LIMIT 10');
               // $result = $this->db->get('anuncios');

               /* $row = $result->row();
                $precio = $row->precio;
                echo '<script>';
                echo 'alert("'. $precio .'")';
                echo '</script>';*/

                foreach ($result->result() as $row) {
                    $titulo = $row->titulo;
                    $precio = $row->precio;
                    $descripcion = $row->descripcion;

                    echo '<div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">';
                    echo '<div class="thumbnail">';
                    echo '<img class="" src="http://placehold.it/200x150" alt="">';
                    echo '<div class="caption">';
                    echo '<h4 class="pull-right">RD$'. $precio . '</h4>';
                    echo '<h4><a href="#">'. $titulo . '</a>';
                    echo '</h4>';
                    echo '<p>'. $descripcion . '</p>';
                    echo '</div>';
                    echo '<div class="view-article">';
                    echo '<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>';
                    echo '<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar   </button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';


                }

            ?>
	</div>
</div>

<div class="row" style="margin: 20px 0">
	<h1>Aquí va un anuncio</h1>
    <a class="btn btn-default" href="<?php echo site_url('articulo/crearBicicleta')?>">Crear</a>
    <a class="btn btn-default" href="<?php echo site_url('articulo/crearParte') ?>">Anunciar parte</a>
    <a class="btn btn-default" href="<?php echo site_url('articulo/crearAccesorio') ?>">Anunciar accesorio</a>

</div>