<?php
/**
 * Permite la administrar el entorno de la aplicacion.
 *
 * Clase de tipo abstracta, que posee la administracion del entorno de la aplicacion en variables estaticas.
 *
 * @author RR Soluciones IT SAS
 * @version  1.0.0
 * @copyright 2024
 */

Class ENTORNO{
  public static function inclusiones(){
  ?>
  		<meta charset="utf-8">
  		<title>Seguridad Integral de la Informaci&oacute;n | RR Soluciones IT</title>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="description" content="Cyberr Shield - RR Soluciones IT">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  		<meta name="author" content="RR Soluciones IT">
  		<meta name="generator" content="Seguridad Integral de la Información - RR Soluciones IT">
		<!-- Favicon -->
  		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  		<!-- PLUGINS CSS STYLE -->
  		<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  		<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  		<link rel="stylesheet" href="plugins/slick/slick.css">
  		<link rel="stylesheet" href="plugins/slick/slick-theme.css">
  		<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  		<link rel="stylesheet" href="plugins/aos/aos.css">
  		<!-- CUSTOM CSS -->
  		<link href="css/style.css" rel="stylesheet">
		<style>
			.btn-whatsapp {
				display:block;
        		width:70px;
        		height:70px;
        		color:#fff;
        		position:fixed;
        		right:20px;
        		bottom:20px;
        		border-radius:50%;
        		line-height:80px;
        		text-align:center;
        		z-index:999;
      		}
    	</style>
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11137879320">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11137879320');
</script>
    <?php
  }
  /**
   * Este metodo carga el pie de pagina de la apliacion.
   *
   * @access public
   * @name piePagina
   * @return Void
   * @description Este metodo carga el pie de pagina de la apliacion.
   */
  public static function piePagina(){
  ?>
    <footer>
        <div class="footer-main">
            <!-- Social Site Icons -->
            <center>
                <ul class="social-icon list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/rrsolucionesitsas/" target="_blank"><i class="ti-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/rrsolucionesit" target="_blank"><i class="ti-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/rrsolucionesit" target="_blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/rr-soluciones-it/" target="_blank"><i class="ti-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UCUBXgDyxENMREwPPimXbU5Q" target="_blank"><i class="ti-youtube"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/RRSolucionesIT" target="_blank"><i class="ti-github"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://discord.gg/6mfZvmrgpQ" target="_blank"><i class="ti-linux"></i></a>
                    </li>
                </ul>
            </center>
        </div>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright &copy; 2016-<?php echo date("Y");?> | Desarrollado por <a href="https://rrsolucionesit.com/">RR Soluciones IT</a> | <a href="https://webmail.supremecluster.com/" target="_blank">Correo Corporativo</a> | <a href="https://rrsolucionesit.com/soporte/" target="_blank">Mesa de Ayuda</a> | <a href="https://rrsolucionesit.com/crm/" target="_blank">CRM</a> | <a href="./documentos/politica-privacidad.pdf" target="_blank">Pol&iacute;tica de Privacidad</a> | <a href="./documentos/terminos-condiciones.pdf" target="_blank">T&eacute;rminos y Condiciones</a></small class="text-secondary">
        </div>
        <center>
            <a href="https://www.apachefriends.org" target="_blank"><img src="./img/stamp-173x38-f087cb4d.gif"></a> | 
            <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=rrsolucionesit.com','SiteLock','width=600,height=600,left=160,top=170');" ><img class="img-responsive" alt="SiteLock" title="SiteLock" src="https://shield.sitelock.com/shield/rrsolucionesit.com" /></a>
        </center>
    </footer>
    <?php
  }
}
?>