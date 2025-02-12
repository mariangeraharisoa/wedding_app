<header>
        <div class="head_box">
            <div data-aos="fade-right">
                <div class="logo">
                    <a href="{{ route('fo.home') }}">
                    <h2><i class="fa fa-infinity">wedding</i></h2>
                    </a>
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
                            <a hre  f="">
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
                <div class="bell" style="cursor: pointer">
                    <div class="bell1">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="litle_point"></div>
                </div>
                <div class="pdf" style="cursor: pointer">
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