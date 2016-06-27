<?php get_header()?>
<body>


<select id="demosMenu">
  <option selected>Choose Demo</option>
  <option id="backgrounds">Background images</option>
  <option id="backgroundVideo">Background video</option>
  <option id="gradientBackgrounds">Gradient backgrounds</option>
  <option id="backgroundsFixed">Fixed fullscreen backgrounds</option>
  <option id="looping">Looping</option>
  <option id="noAnchor">No anchor links</option>
  <option id="scrollingSpeed">Scrolling speed</option>
  <option id="easing">Easing</option>
  <option id="callbacks">Callbacks</option>
  <option id="css3">CSS3</option>
  <option id="continuous">Continuous scrolling</option>
  <option id="normalScroll">Normal scrolling</option>
  <option id="scrollBar">Scroll bar enabled</option>
  <option id="scrolling">Scroll inside sections and slides</option>
  <option id="navigationV">Vertical navigation dots</option>
  <option id="navigationH">Horizontal navigation dots</option>
  <option id="fixedHeaders">Fixed headers</option>
  <option id="apple">Apple iPhone demo (animations)</option>
  <option id="oneSection">One single section</option>
  <option id="responsiveHeight">Responsive Height</option>
  <option id="responsiveWidth">Responsive Width</option>
  <option id="methods">Methods</option>
</select>


<ul id="menu">
	<li data-menuanchor="firstPage"><a href="#firstPage">ING/ESP</a></li>
	<li data-menuanchor="5page"><a href="#5page">CONTACTO</a></li>
	<li data-menuanchor="4thpage"><a href="#4thpage">CLIENTES</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">PROYECTOS</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">SERVICIOS</a></li>
	<li data-menuanchor="firstPage"><a href="#firstPage">INICIO</a></li>
</ul>

<div id="fullpage">
	<div class="section " id="section0">
		<div id="contenedorSlogan">
			<h1>GLOBAL INTEGRAL SERVICES</h1>
			<p id="slogan">"Haciendo que el mundo siga evolucionando"</p>
		</div>
		<div id="contenedorInformacion">
			<h3>MAS INFORMACION</h3>
		</div>
	</div>
	<div class="section" id="section1">
		<h1 id="servicios">SERVICIOS</h1>


	
		<div class="intro">
			<div id="gallery">
				<!-- <div id="panel">
					<img id="largeImage" src="images/image_01_large.jpg" />
					<div id="description">1st image description</div>
				</div> -->

				<div id="thumbs">
					<div class="hexagon disenioCAT" data-toggle="modal" data-target="#modalDisenioCAD">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen">DISEÑO CAD</div>
					</div>
					<div class="hexagon disenioMaquinados" data-toggle="modal" data-target="#modalMaquinados">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen">MAQUINADOS</div>
					</div>
					<div class="hexagon disenioProgramacionCAT" data-toggle="modal" data-target="#modalPogramacionCAM">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen etiquetaProgramacionCAM">PROGRAMACION CAM</div>
					</div>
				
			        
			        <!-- <img src="images/image_02_thumb.jpg" alt="2nd image description" />
			        <img src="images/image_03_thumb.jpg" alt="3rd image description" />
			        <img src="images/image_04_thumb.jpg" alt="4th image description" />
			        <img src="images/image_05_thumb.jpg" alt="5th image description" /> -->
				</div>
				<div id="thumbs" class="hexagonoFila2">
					<div class="hexagon disenioSoftware" data-toggle="modal" data-target="#modalSoftware">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					   <div class="etiquetaImagen">SOFTWARE</div>
					</div>
					<div class="hexagon disenioReparacion" data-toggle="modal" data-target="#modalReparacion">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					   <div class="etiquetaImagen">REPARACION</div>
					</div>
				
				
			        
			        <!-- <img src="images/image_02_thumb.jpg" alt="2nd image description" />
			        <img src="images/image_03_thumb.jpg" alt="3rd image description" />
			        <img src="images/image_04_thumb.jpg" alt="4th image description" />
			        <img src="images/image_05_thumb.jpg" alt="5th image description" /> -->
				</div>
				<div id="thumbs">
					<div class="hexagon disenioDisElectrico" data-toggle="modal" data-target="#modalDisenioElectrico">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen etiquetaDisElectrico">DISEÑO ELECTRICO</div>
					</div>
					<div class="hexagon disenioPrototipos" data-toggle="modal" data-target="#modalPrototipos">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen">PROTOTIPOS</div>
					</div>
					<div class="hexagon disenioIntegracion" data-toggle="modal" data-target="#modalIntegracion">
					  <div class="hexTop"></div>
					  <div class="hexBottom"></div>
					  <div class="etiquetaImagen">INTEGRACION</div>
					</div>
				
			        
			        <!-- <img src="images/image_02_thumb.jpg" alt="2nd image description" />
			        <img src="images/image_03_thumb.jpg" alt="3rd image description" />
			        <img src="images/image_04_thumb.jpg" alt="4th image description" />
			        <img src="images/image_05_thumb.jpg" alt="5th image description" /> -->
				</div>

			</div>
		</div>
	</div>
	<div class="section" id="section2">
		<h1 id="servicios" style="background: rgb(0, 0, 202);margin-top: -27px;z-index: 100;">ACERCA DE</h1>
		<div class="intros">
			<div class="row">
				<div class="col-lg-12" style="text-align: center;">	
					<img src="<?php echo bloginfo('template_url'); ?>/img/acerca_de.jpg" style="width: 64%;">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo_web14.png" style="margin-top: 359px; width: 252px; margin-left: 18px;">
				</div>
				<div class="col-lg-2">
					<h1 class="mpv" style=" color: white;">MISIÓN</h1>
					<p class="parrafoMPV" style="font-size: 24px;">
						Proveer nuestros productos y servicios con la más alta calidad, basados en los requerimientos del cliente, mejora continua de nuestros métodos y procesos para llevar a nuestros clientes a cumplir con sus metas
					</p>
				</div>
				<div class="col-lg-3" >
					<h1 class="mpv"  style="color: white;">POLITICA DE CALIDAD</h1>
					<p style="font-size: 24px;">
						En Global Integral Services buscamos constantemente la mejora continua y satisfacción total de nuestros clientes, utilizando el personal capacitado, la materia prima de más alta calidad, los métodos correctos y el arte de la tecnología en un marco productivo donde se respete el medio ambiente, seguridad y salud de nuestros empleados, siguiendo las normas en el sistema de calidad ISO 9001-2008
					</p style="font-size: 24px;">
				</div>
				<div class="col-lg-3">
					<h1 class="mpv"  style="color: white;">VISIÓN</h1>
					<p class="parrafoMPV">
						Posicionar y mantener nuestra empresa como líderes en el diseño e innovación, fabricacíon y ensamble de productos, participando en el mercado internacional siempre apregado estrictamente a las normas de calidad, ambientales y de seguridad.
					</p>
				</div>

			</div>
		</div>
	</div>
	<div class="section" id="section3">
		<h1 id="servicios" style="background: rgb(0, 0, 202);margin-top: -27px;z-index: 100;">PROYECTOS</h1>
		<div class="intros">
			<div class="row" style="text-align: center;">
				<img src="<?php echo bloginfo('template_url'); ?>/img/LOGO.png" style="width: 30%;" >
				<div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
					<div data-toggle="modal" data-target="#proyecto1" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
						<img style="position: relative;left: -284px;width: 936px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/DSC_00003.jpg">
					</div>
				  	<div data-toggle="modal" data-target="#proyecto2" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
				  		<img style="position: relative;top: -590px;left: -136px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/DSC_00007.jpg">
				  	</div>
				  	<div data-toggle="modal" data-target="#proyecto3" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
				  		<img style="position: relative;top: -150px;left: 0px;width: 1100px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/Untitled_20.jpg">
				  	</div>
				  	<div data-toggle="modal" data-target="#proyecto4" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
				  		<img style="position: relative;top: -709px;left: -39px;width: 1000px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/20160525_151131 2.jpg">
				  	</div>
				  	<div data-toggle="modal" data-target="#proyecto5" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
				  		<img style="position: relative;top: 0;left: 0;width: 701px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/2.jpg">
				  	</div>
				  	<div data-toggle="modal" data-target="#proyecto6" style="width: 610px;height: 400px;overflow: hidden;margin: 13px;border: 3px solid black;">
				  		<img style="position: relative;width: 702px;" src="<?php echo bloginfo('template_url'); ?>/img/proyectos/4.JPG">
				  	</div>
				</div>
				
			</div>
<!-- 			<div class="row" style="text-align: center;">
				<div class="center">
				  <div><h3>1</h3></div>
				  <div><h3>2</h3></div>
				  <div><h3>3</h3></div>
				  <div><h3>4</h3></div>
				  <div><h3>5</h3></div>
				  <div><h3>6</h3></div>
				</div>
			</div> -->
		</div>
	</div>
	<div class="section" id="section4">
		<h1 id="servicios" style="background: rgb(0, 0, 202);margin-top: -27px;z-index: 100;">CLIENTES</h1>
		<div class="intros">
			<img src="<?php echo bloginfo('template_url'); ?>/img/clientes/clientes-business.png" style="width: 100%;">

			<img src="<?php echo bloginfo('template_url'); ?>/img/clientes/clientes.png">
		
			
		</div>
	</div>
	<div class="section " id="section5">
			<div >

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist" style="width: 80%; margin-left: auto; margin-right: auto; position: relative; ">
				<li style="margin-bottom: 20px; margin-left: 40px; " role="presentation" class="active">
					<a class="estiloContacto" style="border-radius: 60px; " href="#mail" aria-controls="mail" role="tab" data-toggle="tab">
						<span style="font-size: 70px; " class="glyphicon glyphicon-envelope"></span>
					</a>
					<a href="#mail" style="width: 50px; height: 34px; position: absolute; top: 90px; left: 25px; border: 0px; "></a> 
				</li>

				<li style="margin-bottom: 20px; margin-left: 40px; " role="presentation" class="">
					<a class="estiloContacto" style="border-radius: 60px; " href="#telefono" aria-controls="telefono" role="tab" data-toggle="tab">
						<span style="font-size: 70px; " class="glyphicon glyphicon-earphone"></span>
					</a>
					<a href="#telefono" style="width: 50px; height: 34px; position: absolute; top: 90px; left: 25px; border: 0px; "></a> 
				</li>
				<li style="margin-bottom: 20px; margin-left: 40px;" role="presentation" class="">
					<a id="linkMapa" class="estiloContacto" style="border-radius: 60px;text-align: center;height: 103px;padding-top: 14px;" href="#mapa" aria-controls="mapa" role="tab" data-toggle="tab">
						<span style="font-size: 60px;width: 70px;padding: 5px;" class="fa fa-map" aria-hidden="true"></span>
					</a>
					<a href="#mapa" style="width: 50px; height: 34px; position: absolute; top: 90px; left: 25px; border: 0px; "></a> 
				</li>
				<li style="margin-bottom: 20px; margin-left: 40px;" role="presentation" class="">
					<a class="estiloContacto" style="border-radius: 60px; text-align: center; " href="#redesSociales" aria-controls="redesSociales" role="tab" data-toggle="tab">
						<span style="font-size: 81px; width: 70px; " class="fa fa-facebook" aria-hidden="true"></span>
					</a>
					<a href="#redesSociales" style="width: 50px; height: 34px; position: absolute; top: 90px; left: 25px; border: 0px; "></a> 
				</li>
				<li style="margin-bottom: 20px; margin-left: 40px;" role="presentation" class="">
					<a class="estiloContacto" style="border-radius: 60px; " href="#formulario" aria-controls="formulario" role="tab" data-toggle="tab">
						<span style="font-size: 70px; " class="glyphicon glyphicon-map-marker"></span>
					</a>
					<a href="#formulario" style="width: 50px; height: 34px; position: absolute; top: 90px; left: 25px; border: 0px; "></a> 
				</li>
			
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content" style="width: 80%;margin-left: auto;margin-right: auto;background: white;padding: 30px; height: 650px;">
			    <div role="tabpanel" class="tab-pane active" id="mail">
			    	
			    	<h1 class="titulosContact">MAIL</h1>
			    	<hr>
			    	<p>ventas@globalintegralservices.com</p>
			    	<hr>
					<p>servicioalcliente@globalintegralservices.com</p>
					<hr>
					<p>compras@globalintegralservices.com</p>
				</div>
			    <div role="tabpanel" class="tab-pane" id="telefono">
			    	<h1 class="titulosContact">TELÉFONO</h1>
			    	<hr>
			    	<p>Teléfono de Oficina:  01 631 35 201 49</p>
			    	<hr>
					<p>Fax: 01 631 35 201 49</p>
			
			    </div>
			    <div role="tabpanel" class="tab-pane" id="mapa">
			    	<div id="map"></div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="redesSociales">...</div>
			    <div role="tabpanel" class="tab-pane" id="formulario">
			    	<form>
			    		<h1 class="titulosContact">MAIL</h1>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nombre:</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Compañía:</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Teléfono:</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Extensión:</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Ubicación de la Cita:</label>
					    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Compañía:</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Compañía:</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					  <p>La cita será revisada y se confirmará</p>
					</form>
			    </div>
			  </div>

			</div>
		</div>
	</div>

	<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalDisenioCAD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/1-Dise-CAD.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">DISEÑO CAD</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Servicio de diseño de soluciones en
sistema CAD, así mismo, simulación de mecanismos, estudio de propiedades de materiales,
funcionalidad de componentes, estudios CAE, Ingeniería Inversa, etc.”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>

			<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalMaquinados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/2 - Maquinados.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">MAQUINADOS</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Fabricación de partes en Fresadora

CNC, Torno CNC, Fresadora Convencional, Torno Convencional, Rectificadora, Dobladora Hidráulica,

etc.”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>

			<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalPogramacionCAM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/3-ProgramacionCAM.min.jpg" alt="2nd image description" width="100%" style="height: 730px;"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">PROGRAMACION CAM</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Creación de todo tipo

de programación bajo la plataforma de MasterCAM”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>


				<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalSoftware" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/4 - Software.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">SOFTWARE</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Servicio de diseño y desarrollo de

software para automatizar estaciones de prueba funcional, prueba eléctrica, manejo y proceso de

tableros electrónicos, utilizando plataforma en base PC o PLC. Contamos con amplia experiencia en

automatización de sistemas de inspección.”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>



					<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalReparacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/5 - Reparacion.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">REPARACIÓN</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Servicio de reparación y/o

reconstrucción de estaciones de prueba o estaciones de procesos automatizados”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>




					<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalDisenioElectrico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/6 - Diseño Electrico.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">DISEÑO ELECTRICO</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Servicio de

diseño y fabricación de prototipos como sistemas embebidos, tarjetas de interfaz de

comunicación”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>



					<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalPrototipos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/7 - Prototipos.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">PROTOTIPOS</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Desarrollo y creación de prototipos

en fase de diseño y producto finalizado.”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>


					<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="modalIntegracion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/servicios/8 - Integracion.jpg" alt="2nd image description" width="100%"/>
		       	<div>
		       		<h1 class="tituloModalImagenServicios">INTEGRACIÓN</h1>
		       		<hr class="divicionModalImagenServicios">
		       		<p class="parrafoModalImagenServicios">“Integración e instalación de todo

tipo de equipos bajo los más altos estándares de calidad.”</p>

		       	</div>
		       	
		      </div>
		    </div>
		  </div>
		</div>

<!-- //================================================================================================================================================
//=====================================================================================================================================================
//=====================================================================================================================================================
//===================================================================================================================================================== -->

							<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 70%;">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/DSC_00003.jpg" alt="2nd image description" width="100%"/>
		     
		       	
		      </div>
		    </div>
		  </div>
		</div>




							<!-- Modal -->
						<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 33%;">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/DSC_00007.jpg" alt="2nd image description" width="100%"/>
		     
		       	
		      </div>
		    </div>
		  </div>
		</div>



						<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 85%;">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/Untitled.JPG" alt="2nd image description" width="100%"/>
		     
		       	
		      </div>
		    </div>
		  </div>
		</div>

								<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 29%;">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/20160525_151131 2.jpg" alt="2nd image description" width="100%"/>
		     
		       	
		      </div>
		    </div>
		  </div>
		</div>
								<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 85%;">
		    <div class="modal-content">
		   
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/1.JPG" alt="2nd image description" width="100%"/>
		     
		       	
		      </div>
		    </div>
		  </div>
		</div>
								<!-- Modal -->
		<div class="modal fade bs-example-modal-lg" id="proyecto6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog  modal-lg" role="document" style="width: 85%;">
		    <div class="modal-content">
		      <div class="modal-body">
		       	<img src="<?php echo bloginfo('template_url'); ?>/img/proyectos/3.JPG" alt="2nd image description" width="100%"/>
		      </div>
		    </div>
		  </div>
		</div>
		<?php get_footer()?>