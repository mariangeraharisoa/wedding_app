<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menuDash.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <style>
        .a-no-decoration {
            text-decoration: none;
            color: black;
            /* color: deeppink; */
        }
    </style>
    <section>
        <header>
            <div class="head_box">
                <div class="box_infinite">
                    <div class="logo">
                        <h2><i class="fa fa-infinity">wedding</i></h2>
                    </div>
                    <div class="form_app">
                        <form>
                            <input type="text">
                            <i class="fa fa-search"></i>
                        </form>
                        <div class="filter_ap">
                            <i class="fa fa-filter"></i>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="home_connected">
                    <div class="fa_comment">
                        <i class="fa fa-comment-alt"></i>
                        <div class="litle_point"></div>
                    </div>
                    <div class="bell">
                        <div class="bell1">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="litle_point"></div>
                    </div>
                    <div class="pdf_common">
                        @if(auth()->check())
                        <div class="pdf_active">
                            <img src="../images/pdf.jpeg">
                            <div class="litle_point_pdf"></div>
                        </div>
                        <div class="pdf_name">
                            <h5>{{ auth()->user()->name }} {{ auth()->user()->lastname }}</h5>
                        </div>
                        @else
                        <a href="{{ route('login') }}" style="text-decoration: none;">
                            <div id="box_connect">
                                <h3 class="toConnect" style="color:deeppink" font-size :1vw;>
                                    Se Connecter
                                </h3>
                            </div>
                        </a>
                        @endif
                    </div>
                    @if(auth()->check())
                    <div class="tsipika_telo">
                        <i class="fa fa-bars"></i>
                    </div>
                    @endif
                </div>
            </div>
            <!-- section notification -->
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
                                    <img src="../images/pdf.jpeg" alt="">
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
                                        <img src="../images/pdf.jpeg" alt="">
                                    </div>
                                    <div class="notif1">
                                        <h3>Randria Fetra <span class="span_notif"> vous a envoyé un message:</span>
                                        </h3>
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
                                            <img src="../images/pdf.jpeg" alt="">
                                            <div class="img_2nd">
                                                <img src="../images/img1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="notif1">
                                            <h3>Mitia Rakotoarisoa et fifaliana<span class="span_notif"> vous a envoyé
                                                    une invitation</span></h3>
                                            <div class="div_span">
                                                <span class="span_hours">17h34</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <hr> -->
                                    <div class="rows1">
                                        <div class="row2">
                                            <div class="img_row">
                                                <img src="../images/pdf.jpeg" alt="">
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
        </header>
        <div class="section_dash">
            <!-- 1 -->
            <!-- menu close  -->
            <div class="menu_close">
                <div class="angle_right">
                    <i class="fa fa-angle-right"></i>
                </div>
                <div class="menu_close1" style="font-family: poppins; font-size:1vw;">
                    Menu
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Tableau de board
                    </span>
                    <i class="fa fa-th-large"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Gestion des utilisateurs
                    </span>
                    <i class="fa fa-user-tie "></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Planification des événements
                    </span>
                    <i class="fa fa-stream"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Catalogue des services
                    </span>
                    <i class="fab fa-leanpub"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Gestion des reservations
                    </span>
                    <i class="fa fa-paste "></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Pages et contenu
                    </span>
                    <i class="fa fa-file-signature"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        facturation et paiments
                    </span>
                    <i class="fa fa-file-invoice"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        thèmes et personnalisation
                    </span>
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        SEO & Marketing
                    </span>
                    <i class="fa fa-address-card"></i>
                </div>
                <div class="menu_close1">
                    <span class="span_table">
                        Rapport d'analyse
                    </span>
                    <i class="fa fa-sync-alt"></i>
                </div>
                <div class="menu_close1" style="padding-top: 2.5vw; padding-bottom: 2vw;">
                    <span class="span_table">
                        Création post gratuitement
                    </span>
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <!-- fin menu close -->

            <div class="menu_dash">
                <div class="menu_slide">
                    <h4>Menu</h4>
                    <div class="angle_left">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </div>
                <div class="line_dash">
                    <div class="line1">
                        <i class="fa fa-th-large"></i>
                        <span class="span_menu_dash">Tableau de board</span>
                    </div>
                    <a href="{{ route('users.index') }}" class="a-no-decoration">
                        <div class="line1">
                            <i class="fa fa-user-tie "></i>
                            <span class="span_menu_dash">Gestion des utilisateurs</span>
                        </div>
                    </a>

                    <div class="line1">
                        <i class="fa fa-stream"></i>
                        <span class="span_menu_dash">Planification des événement</span>
                    </div>
                    <div class="line1">
                        <i class="fab fa-leanpub"></i>
                        <span class="span_menu_dash">Catalogue de services</span>
                    </div>
                    
                    <a href="{{ route('gestion') }}" class="a-no-decoration">
                    <div class="line1">
                        <i class="fa fa-paste"></i>
                        <span class="span_menu_dash">Gestion des résérvations</span>
                    </div>
                    </a>
                    <div class="line1">
                        <i class="fa fa-file-signature"></i>
                        <span class="span_menu_dash">Pages et contenu</span>
                    </div>
                    <div class="line1">
                        <i class="fa fa-file-invoice"></i>
                        <span class="span_menu_dash">Facturations et paiements</span>
                    </div>
                    <div class="line1">
                        <i class="fa fa-cubes"></i>
                        <span class="span_menu_dash">Thèmes et personnalisation</span>
                    </div>
                    <div class="line1">
                        <i class="fa fa-address-card"></i>
                        <span class="span_menu_dash">SEO et Marketing</span>
                    </div>
                    <div class="line1">
                        <i class="fa fa-sync-alt"></i>
                        <span class="span_menu_dash">Rapport d'analyse</span>
                    </div>
                </div><br><br>
                <div class="service_gratuite">
                    <span>Créer une service</span>
                    <h6>Gratuitement</h6>
                    <button class="btn_service_gratuite">Creer</button>
                </div>
            </div>
            <!-- 2 -->

            <div class="common_dash_board p-3">
                @yield('content')
            </div>
        </div>

    </section>

    <!-- creation de post -->

    <section class="section_post">
        <div class="sect_post">
            <div class="post_header">
                <h4>Espace pour créer un post</h4>
                <p>Pour créer un post, vous devez charger <span style="color: deeppink;">une image</span> représentative
                    de votre post(image, vidéo). </p>
            </div>
            <div class="post_flex">

                <!-- first bloc -->
                <div class="formulaire_post">
                    <form>
                        <div class="form_post1">
                            <label for="">Titre du post</label><br>
                            <input type="text" placeholder="Espace Edena - Akany Fitiavana" class="input_fotsiny">
                        </div>

                        <br>

                        <div class="form_post1">
                            <label for="">Nom & prénom préstataire</label><br>
                            <input type="text" placeholder="RAZAFIMAHATRTRA Christian" class="input_fotsiny">
                        </div>

                        <br>

                        <div class="form_post1">
                            <label for="">Téléphone</label><br>
                            <select>
                                <option value="">+261</option>
                                <option value="">+177</option>
                                <option value="">+320</option>
                            </select>
                            <input type="text" class="input_call_phone">
                        </div>

                        <br>

                        <div class="form_post1">
                            <label for="">E-mail</label><br>
                            <input type="email" class="input_fotsiny">
                        </div>

                        <br>

                        <div class="form_post1">
                            <label for="">Catégorie</label><br>
                            <select class="input_fotsiny">
                                <option value="">Espace & centre de loisir</option>
                                <option value="">Espace & centre de loisir</option>
                                <option value="">Espace & centre de loisir</option>
                            </select>
                        </div>

                        <br>

                        <div class="form_post2">
                            <div class="form_capacity">
                                <label for="">Capacité</label><br>
                                <input type="number" class="input_capacity">
                            </div>
                            <div class="div_select">
                                <label for="">Prix</label><br>
                                <input type="text" placeholder="1 000 000" class="input_price">
                                <select class="select_unity">
                                    <option value="">AR</option>
                                    <option value="">FMG</option>
                                    <option value="">D0LLARS</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- center -->
                <div class="formulaire_post">
                    <p>Image/ vidéo</p>
                    <div class="div_post_image">
                        <i class="fa fa-camera"></i>
                        <h5>Televerse votre image</h5>
                        <p><span class="span_input_choosing">image max</span> 75Mo <span class="span_input_choosing"> &
                                video max</span> 120Mo</p>
                        <button class="upload_post_btn">Upload</button>
                    </div>
                </div>

                <!-- last bloc -->
                <div class="formulaire_post">
                    <form>
                        <div class="form_post1">
                            <label for="">Adresse</label><br>
                            <input type="text" placeholder="IVK Analamahitsy-route Ilafy" class="input_fotsiny">
                        </div>

                        <br>
                        <div class="form_post1">
                            <label for="">Localisation</label><br>
                            <select class="input_fotsiny">
                                <option value="">Analamahitsy-Antananarivo-Madagascar</option>
                                <option value="">By-Pass-Antananarivo-Madagascar</option>
                                <option value="">Ivandry-Antananarivo-Madagascar</option>
                            </select>
                        </div>

                        <br>
                        <div class="input_choosing">
                            <label>Service disponible <span class="span_input_choosing">(multiple choix)</span></label>
                            <div class="service_existe">
                                <div class="input_radio1">
                                    <label for="">Traiteur</label>
                                    <input type="radio" name="" id="">
                                </div>
                                <div class="input_radio1">
                                    <label for="">Grande salle</label>
                                    <input type="radio" name="" id="">
                                </div>
                                <div class="input_radio1">
                                    <label for="">table & chaise</label>
                                    <input type="radio" name="" id="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="post_textarea">
                            <label>Description <span class="span_input_choosing">(multiple choix)</span></label><br>
                            <textarea cols="6" rows="6"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bloc_btn_post">
                <button class="btn_post">Poster</button>
                <button class="btn_annuler">Annuler</button>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!--DISCUSSION INSTANTANEE -->
    <section class="section_message">
        <div class="discussion">
            <h2>Discussion instantanneé</h2>
            <div class="box_message">
                <div class="user1">
                    <div class="img_message">
                        <img src="../images/pdf.jpeg">
                        <div class="actif"></div>
                    </div>
                    <div class="user1_name">
                        <h3 class="utilisateur">Randria Fetra</h3>
                        <p>Bonjour!Puis-je avoir...</p>
                    </div>
                </div>
                <div class="message_number">
                    <div class="count_mp">
                        <h5>1</h5>
                    </div>
                    <div class="horor">
                        <span>9h 34</span>
                    </div>
                </div>
            </div>
            <div class="box_message">
                <div class="user1">
                    <div class="img_message">
                        <img src="../images/pdf.jpeg">
                        <div class="actif"></div>
                    </div>
                    <div class="user1_name">
                        <h3>Félicia Andrianome</h3>
                        <p>Bonjour, devis pour une...</p>
                    </div>
                </div>
                <div class="message_number">
                    <div class="count_mp">
                        <h5>1</h5>
                    </div>
                    <div class="horor">
                        <span>9h 36</span>
                    </div>
                </div>
            </div>
            <div class="box_message">
                <div class="user1">
                    <div class="img_message">
                        <img src="../images/pdf.jpeg">
                        <div class="actif"></div>
                    </div>
                    <div class="user1_name">
                        <h3>Randria Fetra</h3>
                        <p>Très intéressant votre serv...</p>
                    </div>
                </div>
                <div class="message_number">
                    <div class="count_mp">
                        <h5>1</h5>
                    </div>
                    <div class="horor">
                        <span>9h 34</span>
                    </div>
                </div>
            </div>
            <div class="box_message">
                <div class="user1">
                    <div class="img_message">
                        <img src="../images/pdf.jpeg">
                    </div>
                    <div class="user1_name">
                        <h3>Hery RAKOTO</h3>
                        <p>A très bientôt!</p>
                    </div>
                </div>
                <div class="message_number">
                    <div class="count_mp">
                        <h5>4</h5>
                    </div>
                    <div class="horor">
                        <span>9h 09</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Administrateur MESSAGE -->
    <section class="admin_pm">
        <div class="pm_header">
            <div class="user_pm">
                <div class="img_user_pm">
                    <img src="../images/pdf.jpeg">
                    <div class="active"></div>
                </div>
                <div class="username_pm">
                    <h3 class="tuteurh3">Félicia Andrianome</h3>
                    <p>Membre</p>
                </div>
            </div>
            <div class="pm_delete">
                <div class="to_delete">
                    <i class="fa fa-trash-alt"></i>
                </div>
                <div class="to_delete1">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>
        <hr class="hr_pm">
        <!-- begining_message -->
        <div class="discussion_part">
            <div class="message_date">
                <span class="last_discuss">il y a 3 semaines</span>
            </div>
            <div class="part_message">
                <div class="admin_picture">
                    <img src="../images/pdf.jpeg">
                </div>
                <div class="admin_discuss_part">
                    <p>Si vous avez des questions n'hésitez surtout pas. Nous sommes là pour vous aider</p>
                </div>
            </div>
        </div>
        <div class="discussion_reply">
            <div class="message_date">
                <span class="last_discuss">Hier</span>
            </div>
            <div class="flex_part">
                <div class="part_message">
                    <div class="part_user_message">
                        <p>Bonjour à vous, vous pouvez me dire un peu plus sur le service journée de coordination?</p>
                    </div>
                    <div class="admin_picture">
                        <img src="../images/pdf.jpeg">
                    </div>
                </div>
            </div>
        </div>
        <div class="writting">
            <div class="flex1">
                <i class="fa fa-plus-square"></i>
            </div>
            <form>
                <div class="input_message">
                    <input type="text" placeholder="Ecrire votre message">
                    <div class="send_message">
                        <i class="fab fa-telegram"></i>
                    </div>
                </div>
            </form>
            <div class="flex2">
                <div class="emoji">
                    <i class="fa fa-grin"></i>
                </div>
                <div class="file">
                    <i class="fa fa-file"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- NOTIFICATIONS -->

    <section>
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
                <hr>
                <div class="notif_message">
                    <div class="rows1">
                        <div class="row2">
                            <div class="img_row">
                                <img src="../images/pdf.jpeg" alt="">
                            </div>
                            <div class="notif1">
                                <h3>Randria Fetra <span class="span_notif"> vous a envoyé un message:</span></h3>
                                <div class="cols">
                                    <span> <b>"Bonjour,puis avoir..."</b></span>
                                    <span>9h34</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="rows1">
                            <div class="row2">
                                <div class="img_row">
                                    <img src="../images/pdf.jpeg" alt="">
                                </div>
                                <div class="notif1">
                                    <h3>Randria Fetra <span class="span_notif"> vous a envoyé un message:</span></h3>
                                    <div class="cols">
                                        <span> <b>"Vous pouvez l'envoyer"</b></span>
                                        <span>8h16</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="rows1">
                                <div class="row2">
                                    <div class="img_row">
                                        <img src="../images/pdf.jpeg" alt="">
                                        <div class="img_2nd">
                                            <img src="../images/img1.jpg" alt="">
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
                                <hr>
                                <div class="rows1">
                                    <div class="row2">
                                        <div class="img_row">
                                            <img src="../images/pdf.jpeg" alt="">
                                        </div>
                                        <div class="notif1">
                                            <span>Vous avez réçu le badge du meilleur influenceur</span><br>
                                            <div class="div_span">
                                                <span class="span_hours">il y a 2 jours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="rows1">
                                    <div class="ellipsis">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

    <!-- SECTION EDIT PROFIL -->

    <section class="section_edit_profil">
        <div class="edit_profil">
            <div class="pdc">
                <img src="../images/heart.jpg">
                <div class="camera">
                    <i class="fa fa-camera"></i><br>
                    <span class="ajout_image">Ajouter image</span>
                </div>
                <div class="times_edit">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="pdf">
                <div class="photo">
                    <img src="../images/fille.JPG" alt="">
                    <div class="camera1">
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
                <div class="nom_prenom">
                    <h5>RAHARISOA Lalaina</h5><br>
                    <p>Vous pouver vous accèder à cette section à tous temps pour modifier votre profil utilisateur </p>
                </div>

            </div>
        </div>
        <div class="upload_count">
            <div class="box_upload">
                Mettez à jour votre compte
                <div class="edit_trash">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-alt"></i>
                </div>
            </div><br><br>

            <form class="formulaire_count">
                <div class="input_name_count">
                    <div class="input1_count">
                        <label for="">Nom & prénom</label><br>
                        <input type="text"><br>
                    </div>
                    <div class="input1_count">
                        <label for="">Pseudo</label><br>
                        <input type="text">
                        <br><br>
                    </div>
                </div>
                <div class="input_name_count">
                    <div class="input1_count">
                        <label for="">Titre</label><br>
                        <select>
                            <option value="">Organisateur</option>
                            <option value="">Clients</option>
                        </select>
                    </div>
                    <div class="input1_count">
                        <label for="">Mail</label><br>
                        <input type="email">
                        <br><br>
                    </div>
                </div>
                <div class="input_name_count1">
                    <div class="input1_count">
                        <label for="">Né le(optionnel)</label><br>
                        <input type="date"><br>
                    </div>
                    <div class="input1_count">
                        <label for="">Genre(optionnel)</label><br>
                        <select>
                            <option>Masculin</option>
                            <option>Féminin</option>
                            <option>Marié(e)</option>
                            <option>Célibataire</option>
                        </select>
                        <br><br>
                    </div>
                </div>
                <div class="textarea">
                    Dites nous plus sur vous! <br><br>
                    <textarea rows="7"></textarea>
                </div>
                <div class="radio_profil">
                    <div class="radio_profil1">
                        <input type="radio">
                        <label>Afficher ceci sur mon compte</label>
                    </div>
                    <button class="sauvegarde">Sauvegarder</button>
                </div>
            </form>
        </div>
    </section>

    <!-- SE DECONNECTER -->
    <section class="deconnecter">
        <div class="menu_element">
            <div class="menu_element1">
                <i class="fa fa-poll-h"></i>
                <span class="span_edit_pdf">Paramétre du compte</span>
            </div>
            <div class="menu_element1">
                <i class="fa fa-trash-alt"></i>
                <span class="span_edit_pdf">Supprimer compte</span>
            </div>
        </div>
        <hr>
        <div class="menu_element">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="hidden" name="admin" value="1">
            </form>
            <div class="menu_element1 menu-logout" style="cursor:pointer;">
                <i class="fa fa-sign-out-alt"></i>
                <span class="span_edit_pdf">Se déconnecter</span>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/dash.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>
    document.querySelector('.menu-logout').addEventListener('click', function(){
        document.querySelector('#logout-form').submit();
    });
</script>

</html>
