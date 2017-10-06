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
                    <a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">
                        Première partie
                    </a>
                </li>
                <li role="presentation">
                    <a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">
                        Seconde partie
                    </a>
                </li>
                <li role="presentation">
                    <a href="#day-3" aria-controls="messages" role="tab" data-toggle="tab">
                        Troisième partie
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-1.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10am to 10:30am</h4>
                                    <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-2.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10:45am to 11:30am</h4>
                                    <h5>MODULAR DESIGN AT WORK</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-3.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">12:00pm to 01:30pm</h4>
                                    <h5>AN INTRODUCTION TO TOUCH AND POINTER EVENTS</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-4.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">02:00pm to 03.30pm</h4>
                                    <h5>WEB FONTS PERFORMANCE</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="day-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-4.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10am to 10:30am</h4>
                                    <h5>MAKING DOG FOOD PART OF A BALANCED DIET</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-3.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10:45am to 11:30am</h4>
                                    <h5>HANDS-ON WEB AUDIO</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-2.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">12:00pm to 01:30pm</h4>
                                    <h5>CONVERSION RATE OPTIMIZATION TECHNIQUES IN ECOMMERCE</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-1.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">02:00pm to 03.30pm</h4>
                                    <h5>PAPER PROTOTYPING APPLICATIONS</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="day-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-6.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10am to 10:30am</h4>
                                    <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-5.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">10:45am to 11:30am</h4>
                                    <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-3.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">12:00pm to 01:30pm</h4>
                                    <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/speaker-4.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">02:00pm to 03.30pm</h4>
                                    <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                                    <p>Simon is designer and partner at Fictivekin and has worked in a variety of
                                        situations for bands, record labels, governments, polar explorers, and most
                                        other things. </p>
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
            <h3 class="content-ct"><span class="ti-email"></span> Contact</h3>
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