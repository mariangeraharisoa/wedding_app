<section class="section_login">
    <div class="box1_login">
        <div class="connexion_times">
            <i class="fa fa-times"></i>
        </div>
<div data-aos="fade-down">

        <div class="login">
            <h2>Se connecter</h2>
                <span class="span_h2_login">Joindre la communauté</span><br><br>
            
            <form class="form_login" action="{{ route('login') }}" method="POST">@csrf
                <div class="lab1">
                    <label id="labelmail">Email</label><br>
                    <input type="text" name="email" class="input_login" id ="Email" required><br><br>
                </div>
                <div class="lab1">
                    <label class="labelMdp">Mot de passe</label><br>
                    <input type="password" name="password" class="input_login" id="password" required><br><br>

                </div>
                <div class="checkbox_souvenir">
                    <input type="checkbox">
                        <span class="se_souvenir">Se souvenir de moi</span>
                </div>
                <br>
                
                    <button  class="btn_login">Se connecter</button><br><br>
                    <div class="mdp_forgot">
                        <span class="span_mdp">Mot de passe oublié?</span>
                        <span class="clic_ici">Cliquez ici</span>
                    </div><br><br>
                    <div class="other_way">
                        <h5>Essayer d'une autre façon</h5><br>
                        <button class="with_google">Continuer avec Google</button><br><br>
                        <span class="miss_count">Pas encore de compte?
                            <span class="s_inscrire">S'inscrire</span> ici
                        </span>
                    </div>
                
            </form>
        </div>
    </div>
    <div class="rond"></div>
    <div class="rond1"></div>
    <div class="rond2"></div>
</section>