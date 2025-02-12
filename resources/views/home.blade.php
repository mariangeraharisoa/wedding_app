@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="menu_dash1">
    <div class="fizarana2">
        <div class="episode3">
            <div class="font_user">
                <i class="fa fa-donate"></i>
            </div>
        
            <div class="about_price">
                <span class="span_about_price">Total revenue</span>
                <div class="k">
                    <h3>1.2 K</h3><span class="span_service">/années</span>
                </div>
            </div>
        </div>
        <div class="episode3">
            <div class="font_user">
                <i class="fa fa-user-plus"></i>
            </div>
            <div class="about_price">
                <span class="span_about_price">Clients</span>
                <div class="k1">
                    <h3>100 K</h3><span class="span_service">/mois</span>
                </div>
            </div>
        </div>
        <div class="episode3">
            <div class="font_user">
                <i class="fa fa-user-alt"></i>
            </div>
            <div class="about_price">
                <span class="span_about_price">Commentaires</span>
                <div class="k2">
                    <h3>300 K</h3><span class="span_service"> / service</span>
                </div>
            </div>
        </div>
        <div class="episode3">
            <div class="font_user">
                <i class="fa fa-id-card"></i>
            </div>
            <div class="about_price">
                <span class="span_about_price">Rating</span>
                <div class="k3">
                    <h3>1 K </h3>
                    <span class="span_service"> / service</span>
                </div>
            </div>
        </div>
    </div>
    <!-- section top revenue -->

    <section class="top_revenue">
        <div class="box_revenue">
            <div class="revenue1">
                <div class="user_quatation">
                    <div class="top_ap">
                        <h2 class="title_h2">Top revenue</h2>
                        <span>Les meilleurs revenue par mois</span>
                    </div>
                    <div class="top_filter">
                        <i class="fa fa-filter"></i>
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="diagram">
                    <div class="janvier">
                        <div class="box_jan"></div>
                        <span class="span_months">Jan</span>
                    </div>
                    <div class="fevrier">
                        <div class="box_fev"></div>
                        <span class="span_months">Fev</span>
                    </div>
                    <div class="mars">
                        <div class="box_mars"></div>
                        <span class="span_months">Mars</span>
                    </div>
                    <div class="Avril">
                        <span class="pic_avril">15M ariary</span>
                        <div class="box_avril"></div>
                        <span class="span_months">Av</span>
                    </div>
                    <div class="Mai">
                        <div class="box_mai"></div>
                        <span class="span_months">Mai</span>
                    </div>
                    <div class="Jui">
                        <div class="box_juin"></div>
                        <span class="span_months">juin</span>
                    </div>
                    <div class="Jul">
                        <div class="box_juillet"></div>
                        <span class="span_months">juil</span>
                    </div>
                    <div class="aou">
                        <div class="box_aout"></div>
                        <span class="span_months">ao</span>
                    </div>
                    <div class="september">
                        <div class="box_sept"></div>
                        <span class="span_months">sept</span>
                    </div>
                    <div class="october">
                        <div class="box_oct"></div>
                        <span class="span_months">oct</span>
                    </div>
                    <div class="november">
                        <div class="box_nov"></div>
                        <span class="span_months">nov</span>
                    </div>
                </div>
            </div>

            <!-- top commentaire -->
            <div class="revenue">
                <div class="box_commentaire">
                    <div class="user_quatation">
                        <div class="top_ap">
                            <h2 class="title_h2">Top commentaires</h2>
                            <span>Les meilleurs commentaires du mois</span>
                        </div>
                        <div class="top_filter">
                            <i class="fa fa-filter"></i>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="service_accompagnement">
                        <div class="taux">
                            <span>Services et accompagnement</span>
                            <span>83%</span>
                        </div>
                        <div class="box_serve">
                            <div class="box_serve_1"></div>
                        </div>
                    </div>
                    <div class="service_accompagnement">
                        <div class="taux">
                            <span>Réponse des prestataires</span>
                            <span>82%</span>
                        </div>
                        <div class="box_serve1">
                            <div class="box_serve1_1"></div>
                        </div>
                    </div>
                    <div class="service_accompagnement">
                        <div class="taux">
                            <span> Organisation </span>
                            <span> 93% </span>
                        </div>
                        <div class="box_serve2">
                            <div class="box_serve1_2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top appreciation and demande de devis -->

        </div>
        <div class="first_bloc">
            <div class="appreciate1">
                <div class="head_app">
                    <div class="top_ap">
                        <h2 class="title_h2">Top appreciation</h2>
                        <span>Les meilleurs préstations par projet</span>
                    </div>
                    <div class="form_ap">
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
                <div class="title_appreciate">
                    <span class="N_P">nom & prénom</span>
                    <span class="ap_date">date</span>
                    <span class="ap_benefite">bénéfice</span>
                    <span class="ap_price">Prix</span>
                    <span class="ap_appeciate">appréciation</span>
                </div>
                <div class="appreciate2">
                    <div class="content_appreciate">
                        <div class="ap_image">
                            <img src="../images/pdf.jpeg">
                        </div>
                        <div class="ap_profil">
                            <h3>Rakotozafy Hery</h3>
                            <span>organisateur/paysagiste</span>
                        </div>
                    </div>
                    <div class="content_ap">
                        <div class="date_content">
                            <span>01/01/24</span>
                        </div>
                        <div class="benefite_content">
                            <span>5M ar</span>
                        </div>
                        <div class="price_content">
                            <span>10M ar</span>
                        </div>
                        <div class="i_content">
                            <span><i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="appreciate2">
                    <div class="content_appreciate">
                        <div class="ap_image">
                            <img src="../images/pdf.jpeg">
                        </div>
                        <div class="ap_profil">
                            <h3>Rabako Tahiana</h3>
                            <span>Organisatrice/deco</span>
                        </div>
                    </div>
                    <div class="content_ap">
                        <div class="date_content">
                            <span>01/01/24</span>
                        </div>
                        <div class="benefite_content">
                            <span>5M ar</span>
                        </div>
                        <div class="price_content">
                            <span>10M ar</span>
                        </div>
                        <div class="i_content">
                            <span><i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="appreciate2">
                    <div class="content_appreciate">
                        <div class="ap_image">
                            <img src="../images/pdf.jpeg">
                        </div>
                        <div class="ap_profil">
                            <h3>Miarisoa fy</h3>
                            <span>Organisatrice/marketing</span>
                        </div>
                    </div>
                    <div class="content_ap">
                        <div class="date_content">
                            <span>01/01/24</span>
                        </div>
                        <div class="benefite_content">
                            <span>5M ar</span>
                        </div>
                        <div class="price_content">
                            <span>10M ar</span>
                        </div>
                        <div class="i_content">
                            <span><i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="appreciate2">
                    <div class="content_appreciate">
                        <div class="ap_image">
                            <img src="../images/pdf.jpeg">
                        </div>
                        <div class="ap_profil">
                            <h3>Rasalama Rado</h3>
                            <span>Organisateur</span>
                        </div>
                    </div>
                    <div class="content_ap">
                        <div class="date_content">
                            <span>01/01/24</span>
                        </div>
                        <div class="benefite_content">
                            <span>5M ar</span>
                        </div>
                        <div class="price_content">
                            <span>10M ar</span>
                        </div>
                        <div class="i_content">
                            <span><i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user_quotation_request">
                <div class="boaty_iray">
                    <div class="user_quatation">
                        <div class="top_ap">
                            <h2 class="title_h2">Utilisateur & demande de devis</h2>
                            <span>Nombres d'utilisateurs & les demandes de prestation du mois </span>
                        </div>
                        <div class="top_filter">
                            <i class="fa fa-filter"></i>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="big_bloc">
                        <div class="bloc_user1">
                            <div class="user_service">
                                <i class="fa fa-caret-up"></i>
                                <div class="caret1">
                                    <span>Journée de coordination</span><br>
                                    <b style="font-size: 1vw;">50%</b>
                                </div>
                            </div>
                            <div class="user_service">
                                <i class="fa fa-caret-down"></i>
                                <div class="caret1">
                                    <span>Organisation partielle</span><br>
                                    <b style="font-size: 1vw;">35%</b>
                                </div>
                            </div>
                            <div class="user_service">
                                <i class="fa fa-caret-up"></i>
                                <div class="caret1">
                                    <span>Organisation complète</span><br>
                                    <b style="font-size:1vw;">75%</b>
                                </div>
                            </div>
                        </div>
                        <div class="loading">
                            <div class="bloc_load1">
                                <div class="bloc_load2">
                                    <div class="bloc_load3">
                                        <h4>1.6 %</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="plateform_gestion">
                    <h5>Gestion du plateforme</h5>
                    <p>Nombre d'utilisateur et le demande de prestation du mois</p>
                    </dvi>
                </div>
            </div>
    </section>
@endsection
