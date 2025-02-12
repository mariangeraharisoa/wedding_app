    @extends('frontoffice.layouts.front')

    @section('content')
        <!-- section1 -->
        <section class="section1">
            <div data-aos="fade-right">
                <div class="paragraph1">
                    <p><span class="wedding_span">Wedding</span> vous organise le meilleur mariage de vos rêves.<br> Créons
                        le décor qui célébrera votre amour.</p>
                    <div class="picture1">
                        <img src="{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="paragraph2">
                <div class="para">
                    <div data-aos="fade-right">
                        <p>Séléctionner directement vos préférences en remplissant le champ
                            <span class="cliquez_ici"><i class="fa fa-angle-down"></i></span> ci-dessous.
                        </p>
                    </div>
                    <div class="picture2">
                        <img src="{{ asset('images/heart.jpg') }}" alt="">
                    </div>
                </div>
                <div class="champs_remplir">
                    <div data-aos="zoom-in" class="rien">
                        <div class="input_container">
                            <span class="location_icon">
                                <span class="location_text">
                                    Localisation <br>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" placeholder="votre adresse" value="Analakely"
                                        class="input_localisation">
                                </span>
                            </span>
                            <span class="span1_tiret"> | </span>
                            <span>
                                Date <br>
                                <i class="far fa-calendar-alt"></i>
                                <input type="date" class="date_input" value="2024-10-05">
                            </span>
                            <span class="time_range">
                                <span class="span1_tiret"> | </span>
                                <span class="star_time">
                                    Début heure <br>
                                    <i class="far fa-clock"></i>
                                    <input type="time" value="11:00">
                                </span>
                                <span class="span1_tiret"> | </span>
                                <span class="end_time">
                                    Fin heure <br>
                                    <i class="far fa-clock"></i>
                                    <input type="time" value="21:00">
                                </span>
                            </span>
                            <button class="search_button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="picture3">
                        <img src="{{ asset('images/Arches & Mariage.jpg') }}" alt="">
                    </div>
                </div>
                <div class="paragraph3">
                    <h6>Suivez nous sur nos plateformes</h6>
                    <div class="medias">
                        <div data-aos="fade-down">
                            <div class="youtube">
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <div class="instagram">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div data-aos="fade-down">
                            <div class="tiktok">
                                <i class="fab fa-tiktok"></i>
                            </div>
                        </div>
                        <div data-aos="fade-left">
                            <div class="facebook">
                                <i class="fab fa-facebook"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nos organisateurs -->
        <section class="section2">
            <div data-aos="fade-up">
                <h2>Nos organisateurs</h2><br><br>
            </div>
            <div class="organisateurs">
                <div class="slide_mpikarakara">
                    <div class="mpikarakara">
                        <div class="box1_slide">
                            <h3>retrouver <span>Alicia</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquid, dolorem laborum
                                repellat pariatur voluptatem aperiam cum vel non inventore fugit amet molestias. Qui, rem.
                                Architecto sunt necessitatibus eos dolore.</p>
                            <div class="btn_plus">
                                <button class="voir_plus @if(!Auth::check()) please-log @endif">voir plus</button>
                            </div>
                        </div>
                        <div class="box2_mpikarakara">
                            <div class="picture4">
                                <img src="{{ asset('images/15.jpg') }}" alt="">
                            </div>
                            <div class="prestations">
                                <h5>ANDRIANOMENA Fy</h5><br>
                                <div class="reservation_number">
                                    <div class="prestation">
                                        <span class="span1">80</span>
                                        <h3 class="h3_tittle">prestation</h3>
                                    </div>
                                    <div class="reservation">
                                        <span class="span1">102</span>
                                        <h3 class="h3_tittle">reservations</h3>
                                    </div>
                                    <div class="follower">
                                        <span class="span1">10</span>
                                        <h3 class="h3_tittle">followers</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="slide_mpikarakara">
                    <div class="mpikarakara">
                        <div class="box1_slide">
                            <h3>retrouver <span>Alicia</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquid, dolorem laborum
                                repellat pariatur voluptatem aperiam cum vel non inventore fugit amet molestias. Qui, rem.
                                Architecto sunt necessitatibus eos dolore.</p>
                            <div class="btn_plus">
                                <button class="voir_plus @if(!Auth::check()) please-log @endif">voir plus</button>
                            </div>
                        </div>
                        <div class="box2_mpikarakara">
                            <div class="picture4">
                                <img src="{{ asset('images/../images/young-smart.jpg') }}" alt="">
                            </div>
                            <div class="prestations">
                                <h5>HERINIAINA Stephano</h5><br>
                                <div class="reservation_number">
                                    <div class="prestation">
                                        <span class="span1">90</span>
                                        <h3 class="h3_tittle">prestation</h3>
                                    </div>
                                    <div class="reservation">
                                        <span class="span1">100</span>
                                        <h3 class="h3_tittle">reservations</h3>
                                    </div>
                                    <div class="follower">
                                        <span class="span1">50</span>
                                        <h3 class="h3_tittle">followers</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>

        <!-- Nos forfaits -->
        <section class="section3">
            <div class="title">

                <div data-aos="fade-up">
                    <h2>Nos forfaits</h2><br>
                </div>

                <p>Découvrez nos forfaits pour réaliser votre mariage.</p><br>
            </div>
            <div class="forfaits">
                <div class="forfait1">
                    <div class="number">
                        <span class="span">01</span>
                        <h4>Journée de coordination</h4>
                        <div class="btn_voir_plus1">
                            <a @if(Auth::check()) href="{{ route('fo.coordination') }}" @endif>
                                <button class="voir_plus @if(!Auth::check()) please-log @endif">Voir plus</button>
                            </a>
                        </div>
                    </div>
                    <div class="number1">
                        <span class="span">02</span>
                        <h4>Organisation partielle</h4>
                        <div class="btn_voir_plus1">
                            <a @if(Auth::check()) href="{{ route('fo.partial_organization') }}" @endif>
                                <button class="voir_plus @if(!Auth::check()) please-log @endif">Voir plus</button>
                            </a>
                        </div>
                    </div>
                    <div class="number2">
                        <span class="span">03</span>
                        <h4>Organisation complete</h4>
                        <div class="orga_complete">
                            <i class="fa fa-check"> Lorem ipsum dolor sit amet consectetu</i><br><br>
                            <i class="fa fa-check"> Lorem ipsum dolor sit amet consectetu</i><br><br>
                            <i class="fa fa-check"> Lorem ipsum dolor sit amet consectetu</i><br><br>
                            <i class="fa fa-check"> Lorem ipsum dolor sit amet </i>
                        </div>
                        <div class="btn_voir_plus1">
                            <a @if(Auth::check()) href="{{ route('fo.complete_organization') }}" @endif>
                                <button class="voir_plus @if(!Auth::check()) please-log @endif">Voir plus</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- vos temoignages -->
        <section class="section4">
            <div data-aos="fade-up">
                <h2>Vos témoignages</h2><br><br>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, earum!</p><br>
            <div class="section4_testimonials">
                <div class="testimonials">
                    <div class="slide">
                        <!-- <div class="chevron">
                            <i class="fa fa-chevron-left"></i>
                        </div> -->
                        <div class="box2_slide">
                            <div class="picture5">
                                <img src="{{ asset('images/img1.JPG') }}">
                            </div>
                        </div>
                        <div class="box1_slider">
                            <span class="quatation_marks1">
                                <i class="fa fa-quote-left"></i>
                            </span>
                            <h3>Hery & Sitraka</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquid, dolorem laborum
                                repellat pariatur voluptatem aperiam cum vel non inventore fugit amet molestias. Qui, rem.
                                Architecto sunt necessitatibus eos dolore.</p>
                            <span class="quatation_marks2">
                                <i class="fa fa-quote-right"></i>
                            </span>

                        </div>
                        <!-- <div class="chevron">
                            <i class="fa fa-chevron-right"></i>
                        </div> -->
                    </div>
                </div>
                <div class="testimonials">
                    <div class="slide">

                        <div class="box2_slide">
                            <div class="picture5">
                                <img src="{{ asset('images/heart.jpg') }}">
                            </div>
                        </div>
                        <div class="box1_slider">
                            <span class="quatation_marks1">
                                <i class="fa fa-quote-left"></i>
                            </span>
                            <h3>Hery & Sitraka</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquid, dolorem laborum
                                repellat pariatur voluptatem aperiam cum vel non inventore fugit amet molestias. Qui, rem.
                                Architecto sunt necessitatibus eos dolore.</p>
                            <span class="quatation_marks2">
                                <i class="fa fa-quote-right"></i>
                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Histoires de mariage -->
        <section class="section5">

            <div data-aos="fade-up">
                <h2>Histoires de mariage</h2>
            </div>

            <br><br>
            <div class="slide1">
                <!-- <div class="chevron">
                    <i class="fa fa-chevron-left"></i>
                </div> -->

                <div class="slider_slick">
                    <div class="box2_slider">
                        <div class="picture6">
                            <img src="{{ asset('images/Arches & Mariage.jpg') }}">
                            <button class="see_more @if(!Auth::check()) please-log @endif">Voir plus</button>
                            <h6>Njaka & Rina</h6>
                        </div>
                        <div class="picture6">
                            <img src="{{ asset('images/heart.jpg') }}">
                            <button class="see_more @if(!Auth::check()) please-log @endif">Voir plus</button>
                            <h6>Salohy & Tina</h6>
                        </div>
                        <div class="picture6">
                            <img src="{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}">
                            <button class="see_more @if(!Auth::check()) please-log @endif">Voir plus</button>
                            <h6>Tsiky & Rado</h6>
                        </div>
                        <div class="picture6">
                            <img src="{{ asset('images/b32d133a-bd51-4c1b-bac0-51412a5e6b45.jpg') }}">
                            <button class="see_more @if(!Auth::check()) please-log @endif">Voir plus</button>
                            <h6>Fetra & Sarobidy</h6>
                        </div>
                    </div>
                </div>

                <!-- <div class="chevron">
                    <i class="fa fa-chevron-right"></i>
                </div> -->
            </div>
        </section>

        @if(!Auth::check())
        <!-- SE CONNECTER -->
        @include('frontoffice.components.login')
        <!-- FIN SE CONNECTER -->

        <!-- S'INSCRIRE -->
        <section class="section_sign">
            <div class="box1_sign">
                <div class="sign_times">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div class="sign">
                    <div class="in_head">
                        <h2>S'inscrire</h2>
                        <span>Créer votre compte</span>
                    </div>
                    <form class="form_login">
                        <div class="form_login_input1">
                            <div class="lab1">
                                <label>Pseudo</label><br>
                                <input type="text" class="input_login"><br><br>
                            </div>
                            <div class="lab1">
                                <label>Email</label><br>
                                <input type="email" class="input_login"><br><br>
                            </div>
                        </div>
                        <div class="form_login_input1">
                            <div class="lab1">
                                <label>Mot de passe</label><br>
                                <input type="password" class="input_login"><br><br>
                            </div>
                            <div class="lab1">
                                <label> Ressaisir votre mot de passe</label><br>
                                <input type="password" class="input_login"><br><br>
                            </div>
                        </div>
                    </form>
                    <div class="box_confirmation">
                        <div class="confirmation">
                            <span>Code de confirmation</span>
                            <form class="form_confirmation">
                                <div class="input_confirm">
                                    <input type="text">
                                    <input type="text">
                                    <input type="text">
                                    <input type="text">
                                </div><br>
                            </form>
                            <span class="receive_code">Vous n'avez pas réçu le code?</span><br><br>
                            <button class="btn_generer_code"> Générer un code</button>
                        </div>
                        <div class="font_camera">
                            Ajouter image<br><br>
                            <div class="i_camera">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                    </div>
                    <div class="non_inscrit">
                        <button class="btn_inscrire-login">S'inscrire</button>
                    </div>
                    <div class="other_way">
                        <h5>Essayer d'une autre façon</h5><br>
                        <button class="with_google">Continuer avec Google</button><br><br>
                        <span class="miss_count">Pas encore de compte?
                            <span class="s_inscrire">S'inscrire </span>ici
                        </span>
                    </div>
                </div>
            </div>
            <div class="rond3"></div>
            <div class="rond4"></div>
            <div class="rond5"></div>
        </section>
        <!-- FIN S'INSCRIRE -->
        @endif
    @endsection
