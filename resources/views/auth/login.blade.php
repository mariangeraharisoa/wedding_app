<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login </title>
    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
</head>
<body>
    <section>
        <div class="boxAdmin">
            <div class="titreSeConnecter">
                <h2> <i class="fa fa-infinity"></i> Se connecter <i class="fa fa-infinity"></i></h2>
            </div>
            <form class="formInput" action="{{ route('login') }}" method='POST'>@csrf
                <div class="inputEmail">
                    <div class="labelEmail">Votre email</div>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="motDePasse">
                    <label class="labelmotDePasse">Votre mot de passe</label>
                    <input type="password" name="motDePasse" id="motDePasse" required>
                </div>
                @if($errors->any())
                <div class="erreur">
                    <p class="p_erreur">Veuillez vérifier votre email ou votre mot de passe!</p>
                </div>
                @endif
                <div class="adminBtn">
                    <button class="btnAdmin">Se connecter</button>
                </div>
            </form>
            <p><i class="fa fa-infinity"></i> Accès réservé aux administrateur. <i class="fa fa-infinity"></i></p>
            <div class="pied_login">
                 <i class="fa fa-infinity"></i><i class="fa fa-infinity"></i><i class="fa fa-infinity"></i>
            </div>
        </div>
    </section>

    <section class="div_spinner">
        <i class="fa fa-spinner"></i>
    </section>

    <!-- <script src="{{ asset('js/loginAdmin.js') }}"></script> -->

</body>
</html>