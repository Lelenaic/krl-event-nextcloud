<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inscription au Workshop Docker de K'Rément Libre">
    <meta name="author" content="Lénaïc Grolleau">
    <title>K'Rément Libre - Nextcloud</title>

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
                <span class="menu-title">L'intervenant</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#tickets" class="page-scroll">
                <span class="menu-title">Inscription</span>
                <span class="dot"></span>
            </a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <!-- Start: Header -->
    <div class="row hero-header" id="home">
        <div class="col-md-7">
            <h1 class="logo">K'Rément Libre</h1>
            <h1>Découverte Nextcloud</h1>
            <h3>Découverte de Nextcloud et démonstration par Hisyl</h3>
            <h4>Le jeudi 26 avril 2018 à 18H à la Loco numérique</h4>
            <a href="#tickets" class="btn btn-lg btn-red page-scroll">S'INSCRIRE GRATUITEMENT <span
                        class="fa fa-arrow-right"></span></a>

        </div>
        <div class="col-md-5 hidden-xs">
            <img src="{{asset('img/nextcloud.png')}}" width="80%" class="rocket animated bounce">
        </div>
    </div>
    <!-- End: Header -->
</div>
<div class="container">
    <!-- Start: Desc -->
    <div class="row me-row content-ct" id="event">
        <h2 class="row-title">Pourquoi cet évènement est-il super cool ?</h2>
        <div class="col-md-4 feature">
            <span class="fa fa-eye-slash"></span>
            <h3>Confidentialité</h3>
            <p>
                Reprennez le contrôle sur votre vie numérique. Découvrez un outil remplaçant autres Dropbox, Google Drive ou Onedrive.
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="fa fa-lock"></span>
            <h3>Sécurité</h3>
            <p>
                Vous êtes la seule personne (ou organisation) capable d'accèder au contenu de votre Nextcloud.
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="fa fa-money"></span>
            <h3>Un outil Open Source & Gratuit</h3>
            <p>
                Nextcloud est en plus un outil qui n'engendrera pas de frais en plus de l'hébergement.
            </p>
        </div>
    </div>
    <!-- End: Desc -->
    <hr>
    <!-- Start: Speakers -->
    <div class="row me-row content-ct speaker" id="speakers">
        <h2 class="row-title">Notre intervenant</h2>
        <div class="col-md-12">
            <img src="{{asset('img/guillaume.png')}}" class="speaker-img">
            <h3>Guillaume CHÉRAMY</h3>
            <p>
                Patron d'une entreprise d'hébergement et d'infogérence libre, Président de l'association K'Rément Libre
                et Professeur à ses heures perdues, rien que ça. Guillaume utilise Nextcloud quotidiennement dans un
                environnement professionel et le maîtrise sur le bout des doigts.
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
        <h2 class="row-title">Inscription</h2>
        <p>
            L'inscription est entièrement gratuite, et anonyme si vous le souhaitez.<br><br>
        </p>
        <h3>Il reste : <b>{{$places}}</b> places.</h3>
        <div class="col-md-12">
            <h3>Ticket simple</h3>
            <p class="price">0€</p>
            <p>Pour tout le monde</p>
            @if ($canBuy)
                <button data-toggle="modal" data-target="#register" class="btn btn-lg btn-red">
                    S'INSCRIRE
                </button>
            @else
                <button disabled class="btn btn-lg btn-red">
                    S'INSCRIRE
                </button>
            @endif
        </div>
    </div>
    <hr>
    <div class="col-md-12">
        <h3 class="text-center">
            Wow, vous voulez une super réduc' sur tous nos évènements et faire partie d'une association
            super cool qui défend le libre en Vendée ?<br><br>
            <a href="https://www.krementlibre.org/adherer-ou-soutenir/" target="_blank" class="btn btn-lg btn-red">
                Rejoignez-nous dès maintenant !
            </a>
        </h3>
    </div>
</div>
<!-- End: Tickets -->

<hr>
<!-- End: Schedule -->
<div class="text-center">
    <h4><b>Adresse : 123 Boulevard Louis Blanc, 85000 La Roche-sur-Yon</b></h4><br>
    <iframe class="center-block" width="800" height="350" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"
            src="https://www.openstreetmap.org/export/embed.html?bbox=-1.4371356368064883%2C46.67327851895005%2C-1.434238851070404%2C46.67486861701673&amp;layer=mapnik&amp;marker=46.67407357383165%2C-1.435687243938446"></iframe>
    <br/>
    <small><a href="https://www.openstreetmap.org/?mlat=46.67407&amp;mlon=-1.43569#map=19/46.67407/-1.43569"
              target="_blank">Afficher une
            carte plus grande</a></small>
    <br>
</div>
<!-- Start: Footer -->
<div class="container-fluid footer">
    <div class="row contact">
        <div class="col-md-6 contact-form">
            <h3 class="content-ct"><span class="fa fa-envelope"></span> Contact</h3>
            <p class="text-center">
                Pour toute question sur l'évènement, utilisez le formulaire ci-dessous.
            </p><br>
            <form class="form-horizontal" data-toggle="validator" role="form" method="post"
                  action="{{route('contact')}}">
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
                        <input type="email" class="form-control" name="email" id="email" placeholder="moi@domaine.com"
                               required>
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
            <p>&copy 2018 <a href="https:/krementlibre.org">K'Rément Libre</a> | Sous Licence Apache 2.0. | Pictures from <a
                        href="https://www.flaticon.com" target="_blank">Flaticon</a></p>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('input#anonymous').change(function () {
            if ($(this).is(':checked')) {
                $('div#nameGroup').hide().find(':input').prop('disabled', true);
            } else {
                $('div#nameGroup').show().find(':input').prop('disabled', false);
            }
        });
    });
</script>


<!-- Registration Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="payModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Inscription</h4>
            </div>
            <form action="{{route('register')}}" id="register" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="checkbox">
                            <label for="anonymous">
                                <input type="checkbox" value="1" name="anonymous" id="anonymous">
                                Je souhaite être inscris anonymement.
                            </label>
                        </div>
                        <div class="alert alert-info" role="alert" id="anonymousAlert">
                            <i class="fa fa-info-circle"></i> Une inscription anonyme signifie que nous ne conservons
                            ni votre adresse IP, ni e-mail. Nous devons vous la demander pour au moins vous envoyer
                            votre ticket.
                            Même les webmasters et administrateurs de K'Rément Libre ne sauront pas qui vous êtes.
                        </div>
                        <hr>
                        <div class="alert alert-info text-center" role="alert">
                            <i class="fa fa-info-circle fa-2x"></i><br>
                            Dans tous les cas, vos informations personnelles ne seront jamais divulguées à un
                            tiers ni utilisées à des fins de suivis ou commerciaux.
                        </div>
                        <div class="form-group" id="nameGroup">
                            <label for="name">Votre nom et prénom :*</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre e-mail :*</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button class="btn btn-success">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>