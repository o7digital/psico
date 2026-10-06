

<?php

$ref = 'contacto psicoterapia del Valle : psicoterapia individual y de pareja';
$ref_mot_cle ='contacto psicoterapia del Valle : psicoterapia individual y de pareja';

$id_page = "6";
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
</head>
<body>    
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRC4WQJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	<?php include ('header.php') ?>

    <div class="cboth"></div> 
    <div class="contenido">
            <h3><i class="fa fa-phone">&nbsp;</i>Datos de contacto</h3><br />
            <h4>
                <i class="fa fa-info-circle fa-2x"></i><br />Susana Hernández Acevedo<br />
                Psicóloga Clínica
            </h4>
            <p><i class="fa fa-phone fa-2x">&nbsp;&nbsp;</i>Telefono Consultorio 01 (55) 5575 3714 de 11:00 hrs a 14:00 hrs y de 16:00 hrs pm a 20:00hrs<br />
            <i class="fa fa-mobile fa-2x">&nbsp;&nbsp;&nbsp;</i>Telefono celular 044 (55) 5455 8210 de 10:00 hrs a 19:00 hrs<br />
            <i class="fa fa-envelope fa-2x">&nbsp;&nbsp;</i>Correo electrónico <a class="orange" href="mailto:dra.susanaha@gmail.com?Subject=Hello%20again" target="_top">dra.susanaha@gmail.com</a>
            </p><br />
            <div id="formulario-contacto">
               <!-- www.123formbuilder.com script begins here --><script type="text/javascript" defer src="//www.123formbuilder.com/embed/4860410.js" data-role="form" data-default-width="650px"></script><!-- www.123formbuilder.com script ends here -->
            </div>
            <br />
             <h2><i class="fa fa-map-marker">&nbsp;</i>Ubicación</h2><br />
            <p>Enrique Rébsamen 1142-2 Col. Del valle Delegación Benito Juárez México D.F C.P.03100</p><br />
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3763.7107724196158!2d-99.16028200290215!3d19.381672263701088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffa726fb74b9%3A0x21a9768796d01add!2sEnrique+Rebsamen+1142%2C+Del+Valle+Centro%2C+03100+Benito+Ju%C3%A1rez%2C+D.F.!5e0!3m2!1ses-419!2smx!4v1408589029629"frameborder="0" style="border:0"></iframe>
    </div>
    <div class="cboth"></div>
    
        <?php include ('footer.php'); ?>  
</body>
</html>