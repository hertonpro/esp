    @extends('layout')

    @section('content')
         <!-- team-details -->
    <section class="team-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 left-column">
                    <div class="left-content">
                        <div class="lower-box">
                            <h3>Pour quoi choisir UEA ?</h3>
                            <div class="text">
                                <p>Environnement propice à la formation, la recherche et l'innovation. Elle est dotée de laboratoires, d'un hôpital pour les pratiques médicales et de centres de recherche. L'UEA s'efforce de fournir un environnement d'apprentissage et de recherche de qualité pour ses étudiants et chercheurs.</p>
                                <p>l’UEA est considérée comme l’une des meilleures universités en Afrique. Elle attire des étudiants talentueux et offre un environnement propice à l’apprentissage et à la croissance intellectuelle.</p>
                                <p>Il est bon de savoir que l’UEA accorde une grande importance au bien-être de ses étudiants. L’université a investi dans des installations de loisirs pour offrir un environnement propice à la détente et à la récréation. 
                                    Ces installations sont conçues pour offrir une expérience agréable aux étudiants.</p>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3>Inscription en ligne</h3>
                            <div class="text">
                                <p>Pour les étudiants désirant s’inscrire depuis l’étranger, il est possible d’utiliser notre plateforme d’inscription en ligne pour faire votre demande d’inscription.<br> Pour cela, vous devez :</p>
                                <ul class="list-item clearfix pl-5">
                                    <li>1. Cliquer sur le bouton “Formulaire d’inscription” une fois que vous avez fini de remplir ce formulaire d’inscription.</li>
                                    <li>2. Cliquer sur le lien de paiement en ligne via PayPal.</li>
                                    <li>3. Valider votre formulaire d’inscription en renseignant l’ID de votre paiement PayPal.</li>
                                    <li>4. Soumettre le formulaire.</li>
                                </ul>
                                <p>vous recevrez un mail de confirmation que votre demande d’inscription a été soumise avec succès. <br>
                                    Vous devriez recevoir une réponse à votre demande d’inscription dans un délai d’une semaine. </p>
                                    <div class="form-group message-btn">
                                        <a href="form" class="theme-btn style-one">Formulaire d’inscription</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                    <div class="right-content">
                        <div id="content_block_04">
                        <div class="upper-box">
                            <div class="title">
                                <h3>Contactez-nous</h3>
                                <p>pour vos insription:</p>
                            </div>
                            <ul class="list-item clearfix">
                                <li><span>E-mail: </span><br><a href="mailto:{{ env('MAIL1') }}">{{ env('MAIL1') }} </a> <br /><a href="mailto:{{ env('MAIL2') }}">{{ env('MAIL2') }}</a></li>
                                <li><span>Téléphone:</span><br> <a href="https://wa.me/{{ env('TEL1') }}">{{ env('TEL1') }}</a><br /><a href="tel:{{ env('TEL2') }}">{{ env('TEL2') }}</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details end -->
    @endsection
