<?php 
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>
    <main>
        <section class="mapa_ubicacion">
            <div class="cell-sm-10 cell-md-12">
                <!--<div class="titulo_contacto">
                    <h2>Contáctanos</h2>
                </div>-->
            </div>
            <div id="map"></div>
        </section>
        <section class="seccion_datoscontacto">
            <div class="shell">
                <div class="range">
                        <div class="col-md-8">
                            <h3 class="contacto_titulo" data-translate="titulo1_contacto">¿Quieres tener contacto directo con un agente de ventas?</h3>
                            <hr>
                            <p data-translate="parrafo1_contacto">Puedes contactarnos de la manera que tu creas conveniente para tí. Vía E-mail o vía telefónica; si deseas una atención personal deja tus datos en el formulario de abajo y un agente te contactará para agendar una cita e incluso puedes acudir tu mismo a nuestras oficinas.</p>
                            <p data-translate="parrafo2_contacto"><br>Nosotros estaremos felices y con gusto de atenderte y resolver todas tus dudas.</p>
                            <div class="offset_formulario">
                              <!-- RD Mailform-->                              
                              <form data-form-output="form-output-global" data-form-type="contact" method="post" action="#" class="rd-mailform rd-mailform-mod-1" novalidate="novalidate">
                                <div class="range">
                                  <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-error">
                                      <label for="contact-name" class="form-label-outside" data-translate="Nombre">Nombre</label>
                                      <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span data-translate="requerido" class="form-validation">Es necesario ingresar éste dato.</span>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-error">
                                      <label for="contact-company" class="form-label-outside" data-translate="Company">Compañía</label>
                                      <input id="contact-company" type="text" name="company" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span data-translate="requerido" class="form-validation">Es necesario ingresar éste dato.</span>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6 offset-top-18">
                                    <div class="form-group">
                                      <label for="contact-email" class="form-label-outside">E-mail</label>
                                      <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6 offset-top-18">
                                    <div class="form-group">
                                      <label for="contact-phone" class="form-label-outside" data-translate="Telefono_input">Télefono</label>
                                      <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-12 offset-top-18">
                                    <div class="form-group has-error">
                                      <label for="contact-message" class="form-label-outside" data-translate="datos_adicionales">Datos adicionales</label>
                                      <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"></textarea><span data-translate="requerido" class="form-validation">Es necesario ingresar éste dato.</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm- offset-top-30">
                                    <button type="submit" class="btn btn-primary" data-translate="ENVIAR">Enviar</button>
                                  </div>
                                </div>
                             </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="range inset-lg-left-30">
                          <div class="col-sm-6 col-md-12">
                            <h5 class="medios_contacto" data-translate="SIGUENOS">Siguenos en...</h5>
                            <hr>
                            <!-- List social-->
                            <ul class="list-inline list-inline-xxs">
                              <li><a href="https://www.facebook.com/globalintegralservices/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"><img src="<?php bloginfo(stylesheet_directory); ?>/img/contacto/facebook.png"></i></a></li>
                              <li><a href="#" target="_blank" class="btn-social btn-google-plus"><i class="fa fa-google-plus"><img src="<?php bloginfo(stylesheet_directory); ?>/img/contacto/googleplus.png"></i></a></li>
                              <li><a href="#" target="_blank" class="btn-social btn-skype"><i class="fa fa-skype"><img src="<?php bloginfo(stylesheet_directory); ?>/img/contacto/skype.png"></i></a></li>
                              <li><a href="#" target="_blank" class="btn-social btn-yahoo"><i class="fa fa-yahoo"><img src="<?php bloginfo(stylesheet_directory); ?>/img/contacto/yahoo.png"></i></a></li>
                              <li><a href="#" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"><img src="<?php bloginfo(stylesheet_directory); ?>/img/contacto/youtube.png"></i></a></li>
                            </ul>
                            <div class="offset-top-30">
                              <h5 class="medios_contacto" data-translate="TELEFONO">Télefono</h5>
                              <hr>
                              <address class="contact-info">
                                <div class="unit">
                                  <div class="unit-left icon-adjust-vertical"><span class="glyphicon glyphicon-earphone iconos_contacto"></span></div>
                                  <div class="unit-body">
                                    <ul class="list-links">
                                      <li><a href="callto:#" class="link-gray">(631)-352-0149</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </address>
                            </div>
                            <div class="offset-top-30">
                              <h5 class="medios_contacto" data-translate="DIRECCION">Dirección</h5>
                              <hr>
                              <address class="contact-info">
                                <div class="unit unit-horizontal unit-spacing-xs">
                                  <div class="unit-left icon-adjust-vertical"><span class="glyphicon glyphicon-map-marker iconos_contacto"></span></div>
                                  <div class="unit-body"><a href="#" class="link-gray nowrap">De los Arcos 34, Los Virreyes,<br> 84090 Nogales, Son.</a></div>
                                </div>
                              </address>
                            </div>
                            <div>
                              <h5 class="medios_contacto">E-mail</h5>
                              <hr>
                              <div class="unit unit-horizontal unit-spacing-xs offset-top-22">
                                <div class="unit-left icon-adjust-vertical"><span class="glyphicon glyphicon-envelope iconos_contacto"></span></div>
                                <div class="unit-body"><a href="mailto:#" class="link-primary">info@globalintegralservices.com</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

  <?php get_footer();?>