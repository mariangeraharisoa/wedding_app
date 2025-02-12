@extends('frontoffice.layouts.front')

@section('content')
    <section class="section_coordination">
        <div class="coordination">
            <div class="side1">
                <div class="para_coordinate">
                    <p><span class="span_journee">Journée de coordination</span> de mariage nécéssite une organisation minutieuse pour assurer le bon déroulement de l'événement.
                    </p>
                </div>
                <h6>Découvrez en vidéo les séances de coordination</h6>

                <div class="slide_coordinate">
                    <div class="slider_slick5">
                        <div class="image-list">
                            <div class="img_slide">
                                <img src="{{ asset('images/Arches & Mariage.jpg') }}" alt="Image 1" class="thumbnail" onclick="displayImage('{{ asset('images/Arches & Mariage.jpg') }}')">
                            </div>
                            <div class="img_slide">
                                <img src="{{ asset('images/heart.jpg') }}" alt="Image 1" class="thumbnail" onclick="displayImage('{{ asset('images/heart.jpg') }}')">
                            </div>

                            <div class="img_slide">
                                <img src="{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}" alt="Image 1" class="thumbnail" onclick="displayImage('{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}')">
                            </div>

                            <div class="img_slide">
                                <img src="{{ asset('images/Arches & Mariage.jpg') }}" alt="Image 1" class="thumbnail" onclick="displayImage('{{ asset('images/Arches & Mariage.jpg') }}')">
                            </div>

                            <div class="img_slide">
                                <img src="{{ asset('images/mode13.jpg') }}" alt="Image 1" class="thumbnail" onclick="displayImage('{{ asset('images/mode13.jpg') }}')">
                            </div>
                        </div>
                        <div class="main_image">
                            <img id="displayed-image" src="{{ asset('images/Arches & Mariage.jpg') }}" class="a">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="big_step">
            <h5>Les étapes essentiels de ce service</h5>
            <div class="essential_step">
                <div class="step1">
                    <span class="span_nb">01</span>
                    <div class="infos_coo">
                        <h4>Chronologie détaillée</h4>
                        <p>Plan de la journée avec les horaires précis pour chaque moment clé</p>
                    </div>
                    <ul class="ul_step">
                        <li>Préparatifs</li>
                        <li>Cérémonie</li>
                        <li>Reception</li>
                    </ul>
                </div>
                <div class="step1">
                    <span class="span_nb">02</span>
                    <div class="infos_coo">
                        <h4>Coordination des préstataire</h4>
                        <p>Vérification des arrivés des installations</p>
                    </div>
                    <ul class="ul_step" style="padding-top: 2.5vw;">
                        <li>Traiteur</li>
                        <li>Photographe</li>
                        <li>Fleuriste</li>
                    </ul>
                </div>
                <div class="step1">
                    <span class="span_nb">03</span>
                    <div class="infos_coo">
                        <h4>Gestion des invités</h4>
                        <p>Accueil, placement et respect des protocoles</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">04</span>
                    <div class="infos_coo">
                        <h4>Résolution de problème</h4>
                        <p>Intervention rapide en cas de problème</p>
                    </div>
                </div>
                <div class="step1">
                    <span class="span_nb">05</span>
                    <div class="infos_coo">
                        <h4>Supervision générale</h4>
                        <p>Vérification que chaque détail suit le plan défini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
