
<?php 
	plantilla::inicio();
?>

<div class="row segment-margin">
	<div class="col-xs-12" style="border: 2px solid #E7E7E7;">
      <?php $attributes = array("name" => "contactform", "id" => "form");
            echo form_open("home/contacto", $attributes);?>
            <h1 class="text-center">Te escuchamos</h1>
            <fieldset>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name" placeholder="Nombre" />
              <span class="text-danger"><?php echo form_error('name'); ?></span>
            </div>
            <div class="form-group">
              <label for="email">Correo</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Correo" value="<?php echo set_value('email'); ?>" />
              <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>
            <div class="form-group">
              <label for="number">Teléfono</label>
              <input type="tel" name="phone" class="form-control" id="tel" placeholder="Teléfono" value="<?php echo set_value('phone'); ?>"/>
              <span class="text-danger"><?php echo form_error('phone'); ?></span>
            </div>
            <div class="form-group">
              <label for="name">Asunto</label>
              <input type="text" name="subject" class="form-control" id="name" placeholder="Asunto" value="<?php echo set_value('subject'); ?>" />
               <span class="text-danger"><?php echo form_error('subject'); ?></span>
            </div>
            <div class="form-group">
              <label for="message">Mensaje</label>
              <textarea class="form-control"
                        rows=4 id="message" name="message" placeholder="Mensaje" style="resize: vertical" ><?php echo set_value('message'); ?></textarea>
               <span class="text-danger"><?php echo form_error('message'); ?></span>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary" value="send"><i class="fa fa-paper-plane"></i> Enviar</button>
            </div>
            </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg-correo'); ?>
    </div>
</div>
<div class="row segment-margin">
	<div class="col-xs-6 col-sm-4">
		<h3 class="no-margin-bottom title-button text-center"><span class="glyphicon glyphicon-earphone"></span> Teléfono</h3>
    <h4 class="no-margin-top padding10 text-center gray-border">(809) 392-3924</h4>
	</div>
	<div class="col-xs-6 col-sm-4">
		<h3 class="no-margin-bottom  title-button text-center"><span class="glyphicon glyphicon-envelope"></span> Correo</h3>
	  <h4 class="no-margin-top padding10 text-center gray-border">itlabikeshop@gmail.com</h4>
  </div>
	<div class="col-xs-12 col-sm-4">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="no-margin-bottom title-button text-center"><i class="fa fa-comments"></i> Redes sociales</h3>
        <div class="row">
          <div class="col-xs-12 ">
            <div class="col-xs-4 gray-border padTop10"><p class="text-center">
                <a target="_blank" href="https://plus.google.com/113398186093625548979" class="rubber-hover google-button fa fa-google-plus media-circle"></a></p>
              </div>
              <div class="col-xs-4 gray-border padTop10"><p class="text-center">
                <a target="_blank" href="https://www.facebook.com/ITLABike-1667028566935787/" class="rubber-hover media-circle facebook-button fa fa-facebook"></a></p>
              </div>
              <div class="col-xs-4 gray-border padTop10"><p class="text-center">
                <a target="_blank" href="https://twitter.com/itlabikeshop" class="rubber-hover media-circle twitter-button fa fa-twitter"></a></p>
              </div>
          </div>
        </div>
			</div>
		</div>
		

	</div>
</div>