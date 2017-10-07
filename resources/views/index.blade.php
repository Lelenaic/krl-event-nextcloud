<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inscription au Workshop Docker de K'rément Libre">
    <meta name="author" content="Lénaïc Grolleau">
    <title>K'rément Libre - Workshop Docker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href='css/dosis-font.css' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".side-menu">
<nav class="side-menu">
    <ul>
        <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
        </li>
        <li>
            <a href="#home" class="page-scroll">
                <span class="menu-title">Accueil</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#speakers" class="page-scroll">
                <span class="menu-title">Intervenant</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#tickets" class="page-scroll">
                <span class="menu-title">Tickets</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#schedule" class="page-scroll">
                <span class="menu-title">Déroulement</span>
                <span class="dot"></span>
            </a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <!-- Start: Header -->
    <div class="row hero-header" id="home">
        <div class="col-md-7">
            <h1 class="logo">K'rément Libre</h1>
            <h1>Workshop Docker 2017</h1>
            <h3>Apprenez à utiliser Docker comme un atout dans votre travail</h3>
            <h4>Le samedi 04 Novembre 2017 à la Loco numérique</h4>
            <a href="#tickets" class="btn btn-lg btn-red page-scroll">ACHETER DES TICKETS <span
                        class="fa fa-arrow-right"></span></a>

        </div>
        <div class="col-md-5 hidden-xs">
            <img src="img/docker.png" class="rocket animated bounce">
        </div>
    </div>
    <!-- End: Header -->
</div>
<div class="container">
    <!-- Start: Desc -->
    <div class="row me-row content-ct">
        <h2 class="row-title">Pourquoi cet évènement est-il super cool ?</h2>
        <div class="col-md-4 feature">
            <span class="ti-ticket"></span>
            <h3>Docker est pour tout le monde</h3>
            <p>
                Ne vous méprenez pas, que vous soyez administrateur système/réseau ou développeur,
                vous avez tous besoin de Docker. Vous y trouverez forcément une utilité.
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
            <h3>Intervenant expert</h3>
            <p>
                Notre intervenant est un professionel et utilise cette technologie au quotidient dans son entreprise.
                Il pourraît <span style="font-size: 0.6em;">probablement</span> même faire tourner Docker sur un
                grille-pain.
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <h3>Parce que vous serez là</h3>
            <p>
                Après tout, c'est pour vous que l'on fait ça.<br>
                Si vous ne venez pas, c'est pas génial génial ...
            </p>
        </div>
    </div>
    <!-- End: Desc -->
    <hr>
    <!-- Start: Speakers -->
    <div class="row me-row content-ct speaker" id="speakers">
        <h2 class="row-title">Notre intervenant</h2>
        <div class="col-md-12">
            <img src="img/guillaume.png" class="speaker-img">
            <h3>Guillaume CHÉRAMY</h3>
            <p>
                Patron d'une entreprise d'hébergement et d'infogérence libre, Président de l'association K'rément Libre
                et Professeur à ses heures perdues, rien que ça. Guillaume vous fera découvrir le merveilleux monde
                de la conteneurisation.
                Il vous transmettra son savoir dans ce Workshop passionant et instructif.
            </p>
            <ul class="speaker-social">
                <li><a href="https://www.facebook.com/hisyl.fr/" target="_blank"><span
                                class="fa fa-facebook"></span></a></li>
                <li><a href="https://twitter.com/EIRL_Hisyl" target="_blank"><span class="fa fa-twitter"></span></a>
                </li>
                <li><a href="https://fr.linkedin.com/in/guillaume-cheramy-01039226" target="_blank"><span
                                class="fa fa-linkedin"></span></a></li>
            </ul>
        </div>
    </div>
    <!-- End: Speakers -->
</div>

<!-- Start: Tickets -->
<div class="container-fluid tickets" id="tickets">
    <div class="row me-row content-ct">
        <h2 class="row-title">Acheter des tickets</h2>
        <p>
            Vous pouvez payer par carte en ligne ou par chèque à l'arrivée au Workshop.<br>
            Même si vous payez par chèque, cliquez sur "Acheter" pour réserver une place.<br><br>
        </p>
        <h3>Il reste : <b>{{$places}}</b> places.</h3>
        <div class="col-md-4 col-sm-6 col-md-offset-2">
            <h3>Tarif réduit</h3>
            <p class="price">25€</p>
            <p>Membres de K'rément Libre</p>
            <a href="#" class="btn btn-lg btn-red">
                ACHETER
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <h3>Plein tarif</h3>
            <p class="price">35€</p>
            <p>Non membres</p>
            <a href="#" class="btn btn-lg btn-red">
                ACHETER
            </a>
        </div>
    </div>
    <hr>
    <h3 class="text-center">
        Wow, vous voulez une super réduc' sur tous nos évènements et faire partie d'une association
        super cool qui défend le libre en Vendée ?<br><br>
        <a href="https://www.krementlibre.org/adherer-ou-soutenir/" target="_blank" class="btn btn-lg btn-red">
            Rejoignez-nous dès maintenant !
        </a>
    </h3>
</div>
<!-- End: Tickets -->

<!-- Start: Schedule -->
<div class="container">
    <div class="row me-row schedule" id="schedule">
        <h2 class="row-title content-ct">Déroulement de la journée</h2>
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#morning" aria-controls="home" role="tab" data-toggle="tab">
                        Déroulement de la matinée
                    </a>
                </li>
                <li role="presentation">
                    <a href="#afternoon" aria-controls="home" role="tab" data-toggle="tab">
                        Déroulement de l'après-midi
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="morning">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/coffee.png" alt="Coffee">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">08h30 - 9h00</h4>
                                    <h5>Café d'accueil</h5>
                                    <p>Nous vous proposerons un café pour vous préparer à cette grosse journée.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/install.png" alt="Install">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">09h00 - 10h30</h4>
                                    <h5>Débuter avec Docker</h5>
                                    <p>
                                        Installation et premières commandes sont au programme.
                                        Vous apprendrez ici la base de Docker pour la suite du Workshop.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/tea.png" alt="Tea">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10h30 - 10h45</h4>
                                    <h5>Pause</h5>
                                    <p>Après ce départ en trombe, il va falloir souffler un peu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/whale.png" alt="Whale">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10h45 - 12h30</h4>
                                    <h5>Utilisation de base</h5>
                                    <p>
                                        Dans cette partie, utilisation des principes et outils de base de Docker,
                                        comme les Images, le registre, les volumes ou encore le réseau.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/eat.png" alt="Eat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">12h30 - 14h00</h4>
                                    <h5>Pause déjeuner</h5>
                                    <p>
                                        Après une matinée bien remplie, un bon repas équilibré pour repartir d'aplomb l'après-midi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="afternoon">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/whale2.png" alt="Whale">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">14h00 - 15h00</h4>
                                    <h5>Gérer des conteneurs avec une interface</h5>
                                    <p>
                                        Et oui Docker ce n'est pas que des lignes de commandes.
                                        Des outils existent pour faciliter la gestion de vos conteneurs, graphiquement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/compose.png" alt="Compose">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">15H00 - 16H30</h4>
                                    <h5>Docker Compose</h5>
                                    <p>
                                        Docker Compose est un outil de mise en place d'applications multi-conteneurs.
                                        Vous apprendrez ici à l'utiliser.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/question.png" alt="Question">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">16H30 - 17H00</h4>
                                    <h5>Questions</h5>
                                    <p>
                                        Sur ce dernier temps, vous pourrez poser des questions à l'intervenant
                                        sur Docker.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/diploma.png" alt="End">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">17H00</h4>
                                    <h5>Fin</h5>
                                    <p>
                                        Fin de ce Workshop vers 17H00, sauf si vous êtes passionnés, il pourrait y avoir du retard ;)<br>
                                        Vous serez déjà des pros sur Docker !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Schedule -->

<!-- Start: Footer -->
<div class="container-fluid footer">
    <div class="row contact">
        <div class="col-md-6 contact-form">
            <h3 class="content-ct"><span class="fa fa-envelope"></span> Contact</h3>
            <p class="text-center">
                Si vous avez un problème de paiement, une question sur votre paiement, demande d'annulation etc.
                Contactez lenaic@lenaic.me. Pour le reste (questions Workshop), utilisez le formulaire ci-dessous.
            </p><br>
            <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="{{route('contact')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Nom<sup>*</sup></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        <div class="help-block with-errors pull-right"></div>
                        <span class="form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail<sup>*</sup></label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@youremail.com" required>
                        <div class="help-block with-errors pull-right"></div>
                        <span class="form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-3 control-label">Votre message<sup>*</sup></label>
                    <div class="col-sm-9">
                        <textarea id="message" name="message" class="form-control" rows="3" required></textarea>
                        <div class="help-block with-errors pull-right"></div>
                        <span class="form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" id="submit" name="submit" class="btn btn-yellow pull-right">Envoyer <span
                                    class="ti-arrow-right"></span></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-md-offset-1 content-ct">
            <a class="twitter-timeline" data-height="500" data-theme="light"
               href="https://twitter.com/krementlibre?ref_src=twsrc%5Etfw">Tweets by krementlibre</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <div class="row footer-credit">
        <div class="col-md-6 col-sm-6">
            <p>&copy 2017 <a href="https:/krementlibre.org">K'rément Libre</a> | Sous Licence Apache 2.0.</p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="footer-menu">
                <li><a href="https://www.krementlibre.org" target="_blank">Site principal</a></li>
                <li><a href="https://www.krementlibre.org/contact/" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End: Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
<script src="/js/validator.js"></script>
</body>
</html>