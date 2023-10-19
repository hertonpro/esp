    @extends('layout')

    @section('content')
         <!-- team-details -->
    <section class="team-details">
        <div class="auto-container">
            <img src="{{asset('images/service/admi.jpg')}}" class="img-fluid rounded" alt="Elève en joie">
            <div class="row clearfix mt-5">
                <div class="col-lg-8 col-md-12 col-sm-12 left-column">
                    <div class="left-content">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">{{session('success')}}</div>
                        @endif
                        <div class="lower-box">
                            <h1 class="display-4 mt-3 text-success">Félicitation</h1>
                            <div class="text">
                                <p>Nous avons bien reçu votre formulaire de demande d'inscription pour l'école de santé publique de l'UEA. Nous vous remercions de votre intérêt pour nos programmes.</p>
                                <p>Votre dossier sera examiné par notre comité de sélection dans les meilleurs délais. Vous recevrez une réponse par e-mail dans un délai de quatre semaines.</p>
                                <p>Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter aux adresses suivantes : </p>
                                <p>Cordialement,<br>L'équipe de l'école de santé publique de l'UEA </p>
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
                                    <li><span>E-mail: </span><br><a href="mailto:{{ env('TEL1') }}">{{ env('TEL1') }} </a> <br /><a href="mailto:inscriptions@uea.ac.cd">ecoledesantepublique@uea.ac.cd</a></li>
                                    <li><span>Téléphone:</span><br> <a href="https://wa.me/243975211689">+243975211689</a><br /><a href="tel:+243994223128">+243994223128</a></li>
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
