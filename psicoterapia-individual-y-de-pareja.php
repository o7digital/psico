


<?php

$ref = 'psicoterapia individual y de pareja';
$ref_mot_cle ='psicoterapia individual y de pareja';
$id_page = "3";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KRC4WQJ');</script>
<!-- End Google Tag Manager -->
	
		<meta http-equiv="Content-Language" content="es,es-mx,es-ar,es-cl,es-co,es-cu,es-pe,es-pr,es-es,es-ve" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<meta name="robots" content="all" />
<title><?php echo $ref ?></title>
        <meta name="keywords" content="<?php echo $ref_mot_cle ?>" />
        <meta name="description" content="<?php echo $ref ?>" />
        
		<meta name="robots" content="index,follow,noodp" />
        
        
    <meta name="viewport" content="width=device-width" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
                randomStart: true;
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){

            $("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
            
            $("ul.topnav li a").hover(function() { //When trigger is clicked...
                //Following events are applied to the subnav itself (moving subnav up and down)
                $(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

                $(this).parent().hover(function() {
                }, function(){  
                    $(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
                });

                //Following events are applied to the trigger (Hover events for the trigger)
                }).hover(function() { 
                    $(this).addClass("subhover"); //On hover over, add class "subhover"
                }, function(){  //On Hover Out
                    $(this).removeClass("subhover"); //On hover out, remove class "subhover"
            });

        });
        </script>
    
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '7862d13a3b460b0032cc279d00c1faf8b8993822';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
    
    
</head>
<body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRC4WQJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
    <?php include ('header.php') ?>
    
    <div class="cboth"></div> 
    <div class="contenido container">
        <h2>Terapias</h2><br />
        <h3>
            ¿A QUIENES ESTA ORIENTADO ESTE SERVICIO ?  O ¿QUE  PROBLEMAS AYUDA A RESOLVER?<br />
            SI SUFRES :<br /><br />
        </h3>       
        <div class="row">
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/ansiedad.jpg" alt="<?php $ref ?>"style="width: 200px; height: 200px;">
              <h2>Ataques de ansiedad ó pánico</h2>
              <p class="texto-justificado">Que es una respuesta fisiológica automática que se caracteriza por un incremento en la intensidad de las funciones del organismo y que se  manifiestan como: taquicardia, presión arterial alta, dificultad para respirar, náuseas, miedo irracional, insomnio, conductas obsesivas,  etc.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/estres.jpg" alt="<?php $ref ?>" style="width: 200px; height: 200px;">
              <h2>Estrés</h2><br /><br />
              <p class="texto-justificado">El estrés es una respuesta natural y necesaria  para la supervivencia, sin embargo las condiciones de la vida moderna provocan que el estrés sea excesivo, lo que puede desembocar en problemas graves de salud. La  psicoterapia te ayuda a controlar tus niveles de estrés para que éste trabaje en tu beneficio.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/depresion.jpg"  alt="<?php $ref ?>" style="width:200px; height: 200px;">
              <h2>Depresión</h2><br /><br />
              <p class="texto-justificado">Es un trastorno del estado de ánimo y su síntoma más común es un estado de abatimiento e infelicidad, pero también se puede presentar irritabilidad o disminución en el rendimiento laboral entre otros. En casos graves puede incluso alterar actividades como comer o dormir. Las causas pueden ser muy diversas pero en todos los casos requiere de  atención inmediata.</p>
            </div><!-- /.col-lg-4 -->
        </div><br /><br />
        <div class="row">
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/codependencia.jpg"  alt="<?php $ref ?>" style="width: 200px; height: 200px;">
              <h2>Codependencia</h2><br /><br />
              <p class="texto-justificado">La codependencia  es una condición en donde la persona focaliza su atención y energía personal   en las necesidades y comportamientos del otro. Renuncia a sus necesidades y  trata de ganar fuerza a través del control. La persona co dependiente busca sentirse necesitada en la fantasía de que así nunca será abandonada. Posee una autoestima muy baja y en la mayoría de los casos acepta relaciones de abuso.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/relacion_destructiva.jpg" alt="<?php $ref ?>" style="width:200px; height: 200px;">
              <h2>Relaciones <br />Destructivas</h2>
              <p class="texto-justificado">El maltrato físico o emocional es el componente principal de las relaciones destructivas, en donde la persona maltratada no se reconoce como tal, o minimiza la situación. La persona inmersa en una relación de este tipo, justifica constantemente la conducta de su pareja al grado de culparse a sí  misma por las reacciones del otro.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="img-circle" src="images/terapias/emfermedades_psicosomaticas.jpg"  alt="<?php $ref ?>" style="width: 200px; height: 200px;">
              <h2>Enfermedades Psicosomáticas</h2>
              <p class="texto-justificado">Son un grito de auxilio, ante la incapacidad del individuo para resolver dolores emocionales presentes en su vida. La forma en que se manifiesta suele ser muy variada, la  persona presenta  síntomas    aunque los estudios y doctores los señalen saludables. Las enfermedades son tan reales que a veces representan una incapacidad física grave sin explicación médica alguna. La falta de atención oportuna puede provocar una incapacidad importante.</p>
            </div><!-- /.col-lg-4 -->
      </div>
      <br /><br />
    </div>
    <div class="cboth"></div>
       
       <?php include ('footer.php'); ?>
        
</body>
</html>