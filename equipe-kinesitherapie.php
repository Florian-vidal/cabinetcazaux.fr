<body>

    <?php include ('_header.html') ?>

    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section_title mb-55 text-center">
                        <h3>L’équipe kinésithérapie</h3>
                        <p>Notre équipe est composée de 3 masseurs-kinésithérapeutes formés pour prendre en charge tout type de rééducation et réadaptation fonctionnelle. Voici un listing des différents actes que nous pouvons effectuer :
                        </p>
                        <div class="img-article mt-4" style="width: 400px;">
                            <img src="img/kinesitherapie-prestations.jpg" alt="prestations">
                        </div>
                        <br>
                        <p>
                            <br>
                            Chaque kiné possède des compétences et expériences variées, toutes complémentaires au sein de l’équipe. La motivation de nous former aux nouvelles techniques ainsi que la volonté de faire évoluer notre cabinet en permanence nous permettent de répondre au mieux à vos attentes.
                            <br>
                            Tous les kinés pratiquent le tiers payant au sein du cabinet. Munis de votre carte vitale ainsi que de votre attestation de mutuelle, aucun frais ne vous sera demandé lors de la facturation des séances*.
                            <br>
                            N’hésitez pas à nous contacter via la page <a href="contact.php">Contact</a> pour toute demande d’information.
                            <br><br>
                            <span style="font-size: smaller; font-weight: 900;">
                                *attention : dans quelques rares cas, nous ne pouvons pas appliquer le tiers payant pour la part mutuelle :  les mutuelles de banque par exemple, ne pratique pas le tiers payant avec les kinésithérapeutes.  Le TP dépend aussi votre niveau de garanti de votre contrat mutuel, mais la kinésithérapie est quasiment systématiquement prise en charge.
                                Le Tiers payant ne s’applique pas pour les actes hors nomenclatures : ostéopathie, bien être, esthétique et kiné-cosmétologie.
                                Pour ces cas, nous vous demanderons un règlement par chèque ou espèces : le cabinet ne prend pas la carte bleue. Merci.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                        <a href="yohann.php"><img src="img/yohann1.jpg" alt="yohan-boulvais"></a>
                        </div>
                        <div class="experts_name text-center">
                            <h3>BOULVAIS Yohann</h3>
                            <span>Masseur - Kinésithérapeute (diplômé de Berck sur Mer, 2016)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <a href="mathieu.php"><img src="img/mathieu.jpg" alt="mathieu-pichoff" style="height: 593.5px; width: auto;"></a>
                        </div>
                        <div class="experts_name text-center">
                            <h3>PICHOFF Mathieu</h3>
                            <span>Masseur - Kinésithérapeute (diplômé de Toulouse, 2006)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <a href="assistant.php"><img src="img/assistant.jpg" alt="assistant" style="height: 593.5px; width: auto;"></a>
                        </div>
                        <div class="experts_name text-center">
                            <h3>Assistant</h3>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->

    <?php include ('_footer.html') ?>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>