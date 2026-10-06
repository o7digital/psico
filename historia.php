<?php

$ref = 'historia : sicoterapia del Valle : psicoterapia individual y de pareja';
$ref_mot_cle ='historia : sicoterapia del Valle : psicoterapia individual y de pareja';
$id_page = "4";
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
        <div class="contenido-post">
            <h2>Historia</h2><br />
            <p class="texto-justificado">
                A lo largo de mi práctica profesional he tenido la fortuna de conocer gente extraordinaria que debido a problemas emocionales no habían podido desarrollar todo su potencial. Es maravilloso  ver cómo se van transformando y se van convirtiendo en personas más seguras, más libres y más felices.<br /><br />
                Considero un enorme privilegio que me otorguen su confianza y me permitan ayudarlos a cambiar sus vidas, porque yo sólo hago eso, ayudarlos a descubrir todo su potencial para que puedan brillar, o en muchos casos, para que se liberen del dolor.<br /><br />
                Para mí, es fascinante descubrir por ejemplo el componente emocional oculto que hace que una persona que desde muy joven y por más de 30 años, padezca una tartamudez que le impide comunicarse adecuadamente y apoyarlo para  que cambie los esquemas que lo pusieron en esa posición. O ayudar a una persona a entender por qué se encuentra inmersa en una relación violenta, y a través del proceso terapéutico logra salir de ella. O cómo a través de fortalecer su autoestima, la persona puede liberarse de una relación codependiente que le ha paralizado la vida. O de qué manera y en qué momento se formó un temor que crea en la persona estados de ansiedad o pánico. O también que hay detrás de una obsesión o una fobia que disminuye considerablemente su calidad de vida y proporcionarle en estos casos, los elementos necesarios para vencerlas.<br /><br />
                Todo esto resulta de un esfuerzo conjunto. Difícil y complicado pero cuando veo que logramos cambiar lágrimas, dolores y angustias por sonrisas, optimismo y deseos de vivir…….sé que estoy haciendo un buen trabajo y correspondiendo a la confianza que han depositado en mí.<br /><br />
            </p><br />
        </div>
    </div>
    <div class="cboth"></div>
    
    <?php include ('footer.php'); ?>
    
</body>
</html>