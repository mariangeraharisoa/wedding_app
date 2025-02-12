<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @if(Auth::check())
    <link rel="stylesheet" href="{{ asset('css/inscrit.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AOS/aos.css') }}">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="head_box">
            <div data-aos="fade-right">
                <div class="logo">
                    <h2><i class="fa fa-infinity">wedding</i></h2>
                </div>
            </div>
            <div class="nav_bar">
                <div data-aos="fade-down">
                    <nav>
                        <ul>
                            <a href="">
                                <li class="link_home">Accueil</li>
                            </a>
                            <a href="">
                                <li class="lia">A propos</li>
                            </a>
                            <a href="">
                                <li class="lia">Services</li>
                            </a>
                            <a href="">
                                <li class="lia">Blog</li>
                            </a>
                            <a href="">
                                <li class="lia">Contact</li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>

            @if (Auth::check())
            <div class="home_connected">
                <div class="bell">
                    <div class="bell1">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="litle_point"></div>
                </div>
                <div class="pdf">
                    <img src="{{ asset('images/fille.JPG') }}" alt="">
                    <div class="litle_point_pdf"></div>
                </div>
                <div class="tasks" style="cursor: pointer">
                    <i class="fa fa-tasks"></i>
                </div>
            </div>
            @else
            <div data-aos="fade-left">
                    <button class="connecter" style="cursor: pointer">Se connecter</button>
                    <button class="inscrire" style="cursor: pointer">S'inscrire</button>
                </form>
            </div>
            @endif
        </div>
        @if (Auth::check())
        <!-- menu -->
        <div class="user_menu">
            <div class="pdf_user">
                <div class="user_profil">
                    <img src="{{ asset('images/pdf') }}" alt="">
                    <div class="dot"></div>
                </div>
                <h6>RAHANTA Lucie</h6>
            </div>
            <div class="element">
                <div class="element1">
                    <i class="fa fa-edit"></i>
                    <span class="span_edit_pdf">Edit profile</span>
                </div>
                <div class="element1">
                    <i class="fa fa-cog"></i>
                    <span class="span_edit_pdf">Paramétre général</span>
                </div>
                <div class="element1">
                    <i class="fa fa-history"></i>
                    <span class="span_edit_pdf">Historique</span>
                </div>
            </div>
            <hr>
            <div class="element">
                <div class="element1">
                    <i class="fa fa-poll-h"></i>
                    <span class="span_edit_pdf">Paramétre du compte</span>
                </div>
                <div class="element1">
                    <i class="fa fa-trash-alt"></i>
                    <span class="span_edit_pdf">Supprimer compte</span>
                </div>
            </div>
            <hr>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
            </form>
            <div class="element">
                <div class="element1 logout" style="cursor:pointer">
                    <i class="fa fa-sign-out-alt"></i>
                        <span class="span_edit_pdf">Se déconnecter</span>
                </div>
            </div>
        </div>

        <div class="section_notif">
            <div class="rows">
                <div class="row1">
                    <h5>Notification</h5>
                    <span>Marquer comme tous lus</span>
                </div>
                <div class="row1">
                    <nav class="nav_row">
                        <ul>
                            <li>Recents</li>
                            <li>Tous</li>
                            <li>Archive</li>
                        </ul>
                    </nav>
                    <div class="filter">
                        <i class="fa fa-filter"></i>
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <!-- <hr> -->
                <div class="notif_message">
                    <div class="rows1">
                        <div class="row2">
                            <div class="img_row">
                                <img src={{ asset('images/pdf.jpeg') }} alt="">
                            </div>
                            <div class="notif1">
                                <h3>Randria Fetra <span class="span_notif"> vous a envoyé un message:</span></h3>
                                <div class="cols">
                                    <span> <b>"Bonjour,puis avoir..."</b></span>
                                    <span>9h34</span>
                                </div>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class="rows1">
                            <div class="row2">
                                <div class="img_row">
                                    <img src={{ asset('images/pdf.jpeg') }} alt="">
                                </div>
                                <div class="notif1">
                                    <h3>Randria Fetra <span class="span_notif"> vous a envoyé un message:</span></h3>
                                    <div class="cols">
                                        <span> <b>"Vous pouvez l'envoyer"</b></span>
                                        <span>8h16</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <hr> -->
                            <div class="rows1">
                                <div class="row2">
                                    <div class="img_row">
                                        <img src={{ asset('images/pdf.jpeg') }} alt="">
                                        <div class="img_2nd">
                                            <img src={{ asset('images/img1.jpg') }} alt="">
                                        </div>
                                    </div>
                                    <div class="notif1">
                                        <h3>Mitia Rakotoarisoa et fifaliana<span class="span_notif"> vous a envoyé une
                                                invitation</span></h3>
                                        <div class="div_span">
                                            <span class="span_hours">17h34</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="rows1">
                                    <div class="row2">
                                        <div class="img_row">
                                            <img src="{{ asset('images/pdf.jpeg') }}" alt="">
                                        </div>
                                        <div class="notif1">
                                            <span>Vous avez réçu le badge du meilleur influenceur</span><br>
                                            <div class="div_span">
                                                <span class="span_hours">il y a 2 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="rows1">
                                    <div class="ellipsis">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="angle_up">
                    <div class="angle_i1">
                        <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="angle_i2">
                        <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="angle_i3">
                        <i class="fa fa-angle-up"></i>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </header>
    </div>

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
                            <button class="voir_plus">voir plus</button>
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
                            <button class="voir_plus">voir plus</button>
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
                        <button class="voir_plus">Voir plus</button>
                    </div>
                </div>
                <div class="number1">
                    <span class="span">02</span>
                    <h4>Organisation partielle</h4>
                    <div class="btn_voir_plus1">
                        <button class="voir_plus">Voir plus</button>
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
                        <button class="voir_plus">Voir plus</button>
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
                        <button class="see_more">Voir plus</button>
                        <h6>Njaka & Rina</h6>
                    </div>
                    <div class="picture6">
                        <img src="{{ asset('images/heart.jpg') }}">
                        <button class="see_more">Voir plus</button>
                        <h6>Salohy & Tina</h6>
                    </div>
                    <div class="picture6">
                        <img src="{{ asset('images/9c1e5a18-e484-427a-aac7-f61bbbf156f2.jpg') }}">
                        <button class="see_more">Voir plus</button>
                        <h6>Tsiky & Rado</h6>
                    </div>
                    <div class="picture6">
                        <img src="{{ asset('images/b32d133a-bd51-4c1b-bac0-51412a5e6b45.jpg') }}">
                        <button class="see_more">Voir plus</button>
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

    <div data-aos="fade-up">
        <footer>
            <div class="footer">
                <div class="box1_footer">
                    <div class="logo">
                        <h2><i class="fa fa-infinity"></i>wedding</h2><br><br>
                    </div>
                    <p>Envoyer nous votre adresse email pour qu'on puisse vous publier les <span
                            class="offre">offres</span> & <span class="service">services</span> à ne pas rater!</p><br>
                    <form class="box_email">
                        <input type="email" placeholder="votre adresse email">
                        <button class="btn_send"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
                <div class="box2_footer">
                    <div class="link">
                        A propos <br><br>
                        <ul class="liens">
                            <li>Histoires</li>
                            <li>Clients</li>
                            <li>Témoignages</li>
                        </ul>
                    </div>
                    <div class="link">
                        Entreprise<br><br>
                        <ul class="liens">
                            <li>Nos services</li>
                            <li>Nos équipes</li>
                            <li>Notre culture</li>

                        </ul>
                    </div>
                    <div class="link">
                        Contact<br><br>
                        <ul class="liens">
                            <li>+126 34 56 768 90</li>
                            <li>weddingmada@gmail.com</li>
                            <li>Manjakaray route vers Mascar</li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr>
            <div class="reseaux_sociaux">
                <div class="youtube">
                    <i class="fab fa-youtube"></i>
                </div>
                <div class="instagram">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="tiktok">
                    <i class="fab fa-tiktok"></i>
                </div>
                <div class="facebook">
                    <i class="fab fa-facebook"></i>
                </div>
            </div>
        </footer>
    </div>
    @if (Auth::check())
    <script src="{{ asset('js/inscrit.js') }}"></script>
    @else
    <script src="{{ asset('js/script.js') }}"></script>
    @endif
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('AOS/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
