   <section class="footer">
        <div class="container footer-contenedor">
            <ul>
                <li><a href="https://www.facebook.com/globalintegralservices/" class="redes-sociales-footer">Facebook</a></li>
                <li><a href="#" class="redes-sociales-footer">Twitter</a></li>
                <li><a href="#" class="redes-sociales-footer">Skype</a></li>
            </ul>
            
            <p class="rights">
                Diseñado y construido por GIS - Global Integral Services S.A. de C.V. © <span id="copyright-year">2016</span>
            </p>
        </div>
    </section>
    <!--<script type="text/javascript" src="js/sec.js"></script>-->

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jqueryTranslator.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAnLgZhwhQuavu99ojWnzuJ5EksgKE67OY"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/controller_maps.js"></script>
    <script type="text/javascript">
    $(function(){
        var templateUrl = '<?php bloginfo(stylesheet_directory); ?>';
        $("[data-translate]").jqTranslate(templateUrl+'/json/index', {defaultLang:'en', forceLang:"es"});
        var idiomas=false;
        $("#idiomas").on("click", function(){
            idiomas = !idiomas;
            if(idiomas===true){
                (function(){
                    debugger;
                    $("[data-translate]").jqTranslate(templateUrl+'/json/index', {defaultLang:'es', forceLang:"en"});
                })();
            }
            else{
                (function(){
                    debugger;
                    $("[data-translate]").jqTranslate(templateUrl+'/json/index', {defaultLang:'en', forceLang:"es"});
                })();
            }  
        })
        



    });        
    </script>
      
</body>
</html>