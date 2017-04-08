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
		  	 <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">RD$400.00</h4>
                        <h4><a href="#">Titulo del producto</a>
                        </h4>
                        <p>Esta es la descripción del producto que se trarea de la BD</p>
                    </div>
                    <div class="view-article">
                		<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>
                		<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar	</button>
                	</div>
                </div>
            </div>
            <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">RD$400.00</h4>
                        <h4><a href="#">Titulo del producto</a>
                        </h4>
                        <p>Esta es la descripción del producto que se trarea de la BD</p>
                    </div>
                    <div class="view-article">
                		<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>
                		<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar	</button>
                	</div>
                </div>
            </div>
            <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">RD$100.00</h4>
                        <h4><a href="#">Titulo del producto</a>
                        </h4>
                        <p>Esta es la descripción del producto que se trarea de la BD</p>
                    </div>
                    <div class="view-article">
                		<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>
                		<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar	</button>
                	</div>
                </div>
            </div>
             <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">RD$400.00</h4>
                        <h4><a href="#">Titulo del producto</a>
                        </h4>
                        <p>Esta es la descripción del producto que se trarea de la BD</p>
                    </div>
                    <div class="view-article">
                		<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>
                		<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar	</button>
                	</div>
                </div>
            </div>

             <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">RD$300.00</h4>
                        <h4><a href="#">Titulo del producto</a>
                        </h4>
                        <p>Esta es la descripción del producto que se trarea de la BD</p>
                    </div>
                    <div class="view-article">
                		<button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>
                		<button class="tada-hover pull-right btn btn-warning"><span class="glyphicon glyphicon-star"></span> Marcar	</button>
                	</div>
                </div>
            </div>
            <div class="slide pulse-hover col-sm-5 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img class="" src="http://placehold.it/200x270?text=Anuncio" alt="">
                </div>
            </div>
	</div>
</div>

<div class="row" style="margin: 20px 0">
	<h1>Aquí va un anuncio</h1>
</div>