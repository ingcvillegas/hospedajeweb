<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl . '/templates/'.$this->template.'/css/hw-default.css' ?>">
	<title><?php echo $this->title ?></title>
	<link rel="shortcut icon" href="<?php echo $this->baseurl . '/templates/'.$this->template.'/images/favicon.ico' ?>">
</head>
<body>
	<div id="header">
		<div class="container">
			<a href="<?php echo $this->baseurl . '/index.php' ?>" title="Hospedaje Web"><img src="<?php echo $this->baseurl . '/templates/'.$this->template.'/images/hw-logo.png' ?>" alt="Hospedaje Web"></a>
			<div id="header_links">
				<div id="contact">
					<ul>
						<li><a href="#"><span id="chat"></span>Chat en Vivo</a></li>
						<li><a href="#"><span id="login"></span>Entrar</a></li>
						<li><span id="phone"></span>Llama Gratis: +1-800-555-5555</li>
						<li><a href="#"><span id="mail"></span>contact@hospedajeweb.com</a></li>
					</ul>
				</div>
				<div id="nav">
					<?php $classMenu = 'class="menu_activo"'; ?>
					<ul>
						<li <?php if($this->title == 'Inicio') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/inicio' ?>">Inicio</a></li>
						<li <?php if($this->title == 'Planes') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/planes' ?>">Planes</a></li>
						<li <?php if($this->title == 'Acerca De') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/acerca-de' ?>">Acerca De</a></li>
						<li <?php if($this->title == 'Soporte') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/soporte' ?>">Soporte</a></li>
						<li <?php if($this->title == 'Servicios') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/servicios' ?>">Servicios</a></li>
						<li <?php if($this->title == 'Blog') echo $classMenu; ?>><a href="<?php echo $this->baseurl . '/index.php/blog' ?>">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="content" class="container">
		<?php
			require_once('main/controller/main.php');
			get_section($this->title);
		?>
	</div>
	<div id="footer">
		<div class="container">
			<div id="add-these-features">
				<h4>Agrega características</h4>
				<ul>
					<li><a href="#"><span id="no-setup-fees"></span>No hay costos adicionales</a></li>
					<li><a href="#"><span id="free-site-migration"></span>Migración gratis</a></li>
					<li><a href="#"><span id="free-ssl-certificate"></span>Certificado SSL gratuito</a></li>
					<li><a href="#"><span id="private-name-servers"></span>Private name servers</a></li>
					<li><a href="#"><span id="monthly-data-transfer"></span>Transferecia de datos mensual</span></a></li>
					<li><a href="#"><span id="support-team"></span>Equipo de soporte 24x7</a></li>
					<li><a href="#"><span id="pop-imap-support"></span>Soporte POP, Imap</a></li>
					<li><a href="#"><span id="virus-protection"></span>Protección Antivirus</a></li>
				</ul>
			</div>
			<div id="about-company">
				<h4>Acerca de la Empresa</h4>
				<ul class="list-footer">
					<li><a href="#">Ir a la página principal</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="#">Estatus del servicio</a></li>
				</ul>
			</div>
			<div id="clients-info">
				<h4>Información Clientes</h4>
				<ul class="list-footer">
					<li><a href="#">Base de Conocimientos</a></li>
					<li><a href="#">Area de Clientes</a></li>
					<li><a href="#">Soporte</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>
			<div id="social-media">
				<h4>Social Media</h4>
				<ul>
					<li><a href="#"><span id="blog-sm"></span>Suscribir al Blog</a></li>
					<li><a href="#"><span id="twitter-sm"></span>Seguir en Twitter</a></li>
					<li><a href="#"><span id="facebook-sm"></span>Vuelvete Fan en Facebook</a></li>
					<li><a href="#"><span id="rss-sm"></span>RSS Feed</a></li>
				</ul>
			</div>
			<div id="our-services">
				<h4>Nuestros Servicios</h4>
				<ul class="list-footer">
					<li><a href="#">Hospedaje Web</a></li>
					<li><a href="#">Hospedaje Tienda en Línea</a></li>
					<li><a href="#">Servidores VPS</a></li>
					<li><a href="#">Nombres de Dominio</a></li>
				</ul>
			</div>
			
			<div id="support-resources">
				<h4>Recursos de Apoyo</h4>
				<ul class="list-footer">
					<li><a href="#">Video Tutorial</a></li>
					<li><a href="#">Demo Panel de Control</a></li>
					<li><a href="#">Foros de Soporte</a></li>
					<li><a href="#">Tickets</a></li>
				</ul>
			</div>
			<div id="newsletter">
				<h4>Boletín</h4>
				<form>
					<input type="text" name="name" value="Nombre:" onfocus='javascript: this.value = ""' onblur='javascript: if(this.value =="") this.value = "Nombre:"' />
	        		<input type="text" name="emailaddress" value="Correo Electrónico:" onfocus='javascript: this.value = ""' onblur='javascript: if(this.value =="") this.value = "Correo Electrónico:"' />
	        		<input type="submit" name="submit" class="submitbtn" value="Suscribir" />
				</form>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	<div id="copyright">
		<div class="container">
			<p>Copyright © 2012, Hospedaje Web All Rights Reserved.</p>
			<p>Usage of this site constitutes acceptance of the Terms of Service, DMCA Policy and Privacy Policy.</p>
		</div>
	</div>
</div>
<?php //print_r($this) ?>
</body>
</html>