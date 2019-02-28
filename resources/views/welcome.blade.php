
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/accueil.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.js"></script>
</head>
@yield('title','la vie en robe')

<header>

    <!--------------------------------- Barre de Navigation --------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.php"><img src="img/log.png" height="100" width="100"></a>
        <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="dlc.php">Nouveaute<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="dlc.php">Vetement<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item connexion">
                    <a class="nav-link text-white" href="">Se connecter</a>
                </li>
            </ul>
            <div id="recherche">
                <input id="inputR" type="text" name="recherche" placeholder="recherche...">
                <img id="logo" src="img/search.png">
            </div>
        </div>
    </nav>
</header>

<body>

<!--------------------------------- Bannière Vetement ---------------------------------------------->

<image src="img/S52-VP-Desk.jpg" class="img-fluid" alt="Responsive image">
    <h3 class="dede"></h3> </image> <!--------------------------------- Card Decks Bootstrap --------------------------------------->

<div id='lesDLC' class="container">
    <div class="card-deck">

        @foreach($categories as $categorie)

        <div class="card">
            <img class="card-img-top" src="img/10020848C060_81_G.jpg" alt="Card image cap">
            <div class="card-body">
                <h6 class="card-title">{{ $categorie->label  }}</h6>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <a href="categorie/{{ $categorie->id }}" button type="button" class="btn btn-primary buy">Je shoppe</a>
            </div>
        </div>

        @endforeach

        <!--

        <div class="card">
            <img class="card-img-top" src="img/10022130C060_81_G.jpg" alt="Card image cap">
            <div class="card-body">
                <h6 class="card-title">ROBES & COMBIS</h6>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <a href="{{route('combis')}}" button type="button" class="btn btn-primary buy">Je shoppe</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/10021485C060_81_G.jpg" alt="Card image cap">
            <div class="card-body">
                <h6 class="card-title">PULLS & GILET</h6>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                <a href="{{route('pulle')}}" button type="button" class="btn btn-primary buy">Je shoppe</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/10019964C060_81_G.jpg">
            <div class="card-body">
                <h6 class="card-title">ACCESSOIRE</h6>
                <p class="card-text"></p>
                <p class="card-text"></p>
                <a href="{{route('accessoires')}}" button type="button" class="btn btn-primary buy">Je shoppe</a>
            </div>
        </div>

        ->

    </div>
    <br />
    <!--  <div class="card-deck">
<div class="card">
<img class="card-img-top" src="img/dlc%20for%20honor%201.jpg">
<div class="card-body">
  <h6 class="card-title">FOR HONOR SEASON PASS YEAR 1</h6>
  <p class="card-text"></p>
  <p class="card-text"><small class="text-muted">19.99€</small></p>
  <button type="button" class="btn btn-primary buy">Acheter</button>
</div>
</div>
<div class="card">
<img class="card-img-top" src="img/dlc%20ac%20origin.jpg" alt="Card image cap">
<div class="card-body">
  <h6 class="card-title">ASSASSIN'S CREED : ORIGIN'S SEASON PASS</h6>
  <p class="card-text"></p>
  <p class="card-text"><small class="text-muted">99.99€</small></p>
  <button type="button" class="btn btn-primary buy">Acheter</button>
</div>
</div>
<div class="card">
<img class="card-img-top" src="img/dlc%20ac%20syndicate.jpg" alt="Card image cap">
<div class="card-body">
  <h6 class="card-title">ASSINSSIN'S CREED SYNDICATE SEASON PASS</h6>
  <p class="card-text"></p>
  <p class="card-text"><small class="text-muted">24.99€</small></p>
  <button type="button" class="btn btn-primary buy">Acheter</button>
</div>
</div>
<div class="card">
<img class="card-img-top" src="img/dlc%20farcry.jpg" alt="Card image cap">
<div class="card-body">
  <h6 class="card-title">FARCRY 5 SEASON PASS </h6>
  <p class="card-text"></p>
  <p class="card-text"><small class="text-muted">24.99€</small></p>
  <button type="button" class="btn btn-primary buy">Acheter</button>
</div> -->
</div>
</div>
</div>
</body>

<!---------------------------------------- Footer ----------------------------------------------->

<footer  class="container-fluid">

    <div id="footer-top" class="row justify-content-center px-5 pt-5">

        <!--Liens vers autres sites-->

        <ul class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">
            <h2>Nos gategories</h2>
            <li><a>MANTEAUX & VESTE</a></li>
            <li><a>ROBES & COMBIS</a></li>
            <li><a>PULLS & GILET</a></li>
            <li><a>ACCESSOIRE</a></li>
        </ul>

        <!--Liens téléchargement application-->

        <div class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">

            <div class="row justify-content-center">
                <h2>Téléchargez l'application</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img class="bouton-store" src="img/bouton_googleplay.jpg" alt="googleplay">
                </div>
                <div class="col-12 text-center">
                    <img class="bouton-store" src="img/bouton_appstore.png" alt="appstore">
                </div>
            </div>

        </div>

        <!--Liens réseaux sociaux-->

        <div class="col-xl-4 col-md-4 col-sm-12 col-12 pb-4">
            <h2>Suivez-nous</h2>

            <div class="flex-logo">
                <a><img src="./img/logo_fb.png" alt="Facebook" class="rounded logo-social"></a>
                <a><img src="./img/logo_tweeter.png" alt="Facebook" class="rounded logo-social"></a>
                <a><img src="./img/logo_instagram.png" alt="Facebook" class="rounded logo-social"></a>
            </div>
        </div>

    </div>

    <!--Navigation-->

    <div id="nav-footer" class="row align-items-end">

        <ul class="col-12 nav justify-content-center align-self-end">
            <li class="nav-item">
                <a class="nav-link" href="#">Mentions légales</a>
            </li>
            <li class="nav-item nav-borders">
                <a class="nav-link" href="#">Foire aux questions</a>
            </li>
            <li class="nav-item nav-borders">
                <a class="nav-link" href="#">Accessibilité</a>
            </li>
            <li class="nav-item nav-borders">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item nav-borders">
                <a class="nav-link" href="#">Plan du site</a>
            </li>
        </ul>

    </div>


</footer>

<script type="text/javascript" src="scripts/scripts.js"></script>



</html>
