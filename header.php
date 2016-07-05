<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GIS</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage callback function." />
	<meta name="keywords"  content="fullpage,jquery,demo,callbac,function,event" />
	<meta name="Resource-type" content="Document" />

	<link type="text/css" href="<?php echo bloginfo('stylesheet_url');?>" rel="stylesheet">
<!-- 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css" />

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
 -->
 	<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>


	<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	
	<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1bbc9b', '#fff', '#fff', '#fff', '#fff', '#fff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5page', '6page'],
				menu: '#menu',
				afterLoad: function(anchorLink, index){

					//section 2
					if(index == 2){

					}

				}
			});

			$('#thumbs').delegate('img','click', function(){
				$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
				$('#description').html($(this).attr('alt'));
			});
			var map;
			$(document).on('shown.bs.tab', 'a#linkMapa', function (e) {
				 var myLatLng = {lat: 31.291860, lng: -110.922827};


			    map = new google.maps.Map(document.getElementById('map'), {
				    center: {lat: 31.291860, lng: -110.922827},
				    zoom: 19
			  	});

			  	 var marker = new google.maps.Marker({
				    position: myLatLng,
				    map: map,
				    title: 'GLOBAL INTEGRAL SERVICES'
				  });
			})
			
		});

	</script>

	<style>
		#section0{
			background-image: url("gis/wp-content/themes/WebGIS/1.jpg");
			background-size: cover;
		}
		#section5{
			background-image: url("gis/wp-content/themes/WebGIS/img/contacto/contactoBackground.jpg");
		}
	
		#menu{
			background: rgba(0, 0, 0, 0.6);
			height: 59px;
		}
		ul#menu li {
		    float: right;
		}
		#slogan{
			color: white;
		    font-size: 35px;
		    font-style: italic;
		}
		#contenedorSlogan{
			text-align: center;
		    margin-left: auto;
		    margin-right: auto;
		    background: rgba(0, 0, 0, 0.6);

		}
		#contenedorInformacion h3{
			margin-top: 130px;
		    font-size: 35px;
		    color: white;
		    background: rgba(0, 0, 0, 0.6);
		    width: 355px;
		    margin-left: auto;
		    margin-right: auto;
		    border: 4px solid #d47630;
		    text-align: center;
		}



		@CHARSET "UTF-8";


		
		#page { width: 585px; margin: 30px auto; }

		#thumbs { 
			width: 53%;
		    margin-left: auto;
		    margin-right: auto; 
		}
		#thumbs img, #largeImage { border: 1px solid gray; padding: 4px; background-color: white; cursor: pointer; }
		#thumbs img { float: left; margin-right: 6px; }
		#description { background: black; color: white; position: absolute; bottom: 0; padding: 10px 20px; width: 525px; margin: 5px; }
		#panel { position: relative; }

		.hexagon {
		  position: relative;
		  width: 300px; 
		  height: 173.21px;
		  margin: 51.6px 16px;
		  background-size: auto 346.4102px;
		  background-position: center;
			display: inline-block;
			cursor: pointer;

		}
		.disenioCAT{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/1-Dise-CAD-min.jpg);
		}
		.disenioMaquinados{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/2-Maquinados.min.jpg);
		}
		.disenioProgramacionCAT{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/3-ProgramacionCAM.min.jpg);
		}
		.disenioSoftware{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/4-Software-min.jpg);
		}
		.disenioReparacion{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/5-Reparacion.min.jpg);
		}
		.disenioDisElectrico{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/6-DisElectrico-min.jpg);
		}
		.disenioPrototipos{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/7-Prototipos-min.jpg);
		}
		.disenioIntegracion{
			background-image: url(gis/wp-content/themes/WebGIS/img/servicios/8-Integracion.min.jpg);
		}

		.hexTop,
		.hexBottom {
		  position: absolute;
		  z-index: 1;
		  width: 212.13px;
		  height: 212.13px;
		  overflow: hidden;
		  -webkit-transform: scaleY(0.5774) rotate(-45deg);
		  -ms-transform: scaleY(0.5774) rotate(-45deg);
		  transform: scaleY(0.5774) rotate(-45deg);
		  background: inherit;
		  left: 43.93px;
		}

		/*counter transform the bg image on the caps*/
		.hexTop:after,
		.hexBottom:after {
		  content: "";
		  position: absolute;
		  width: 300.0000px;
		  height: 173.20508075688775px;
		  -webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
		  -ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
		  transform:          rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
		  -webkit-transform-origin: 0 0;
		  -ms-transform-origin: 0 0;
		  transform-origin: 0 0;
		  background: inherit;
		}

		.hexTop {
		  top: -106.0660px;

		}

		.hexTop:after {
		  background-position: center top;
		}

		.hexBottom {
		  bottom: -106.0660px;

		}

		.hexBottom:after {
		  background-position: center bottom;
		}

		.hexagon:after {
		  content: "";
		  position: absolute;
		  top: 0.0000px;
		  left: 0;
		  width: 300.0000px;
		  height: 173.2051px;
		  z-index: 2;
		  background: inherit;
		}

		.hexagonoFila2{
			width: 36%!important;
		}

		#gallery{
			margin-top: 35px;
		}
		.etiquetaImagen{
			position: absolute;
		    z-index: 10000;
		    color: white;
		    font-weight: 700;
		    font-size: xx-large;
		    top:129px;
		    background: rgba(0, 0, 0, 0.7);
		    width: 300px;
		    text-align: center;
		}
		.etiquetaDisElectrico{
			font-size: x-large!important;
			    height: 37px;
		}
		.etiquetaProgramacionCAM{
			font-size: x-large!important;
			height: 37px;
		}
		#servicios{
			position: absolute;
		    right: 0px;
		    font-size: 65px;
		    color: white;
		    width: 400px;
		    text-align: center;
		    
		    top: 86px;
		}
		.modal-body{
			padding: 0px;
		}
		.tituloModalImagenServicios{
			font-size: x-large;
		    padding-top: 36px;
		    padding-left: 36px;
		    color: grey;
		}
		.divicionModalImagenServicios{
			margin-left: 36px;
		    margin-top: 4px;
		    margin-right: 36px;
		    margin-bottom: 16px;
		}
		.parrafoModalImagenServicios{
			font-size: 18px;
		    padding: 36px;
		    padding-top: 0;
		}
		.modal-dialog{
			width:850px;
		}
		.mpv{
			    font-size: -webkit-xxx-large;
		    text-align: center;
		    height: 104px;
		        background: rgb(0, 0, 148);
		}
		.parrafoMPV{
		
		}
		.estiloContacto{
			padding-top: 14px;
		    color: #555;
		    cursor: default;
		    background-color: #fff;
		    border: 1px solid #ddd;
		    border-bottom-color: transparent;
		}
		#map {
			height: 100%;
		}
		#mail{
			height: 100%;
		}
		#mapa{
			height: 100%;
		}
	</style>

</head>