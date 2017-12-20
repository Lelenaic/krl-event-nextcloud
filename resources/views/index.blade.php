<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inscription au Workshop Docker de K'Rément Libre">
    <meta name="author" content="Lénaïc Grolleau">
    <title>K'Rément Libre - Projection de Nothing To Hide</title>

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
                <span class="menu-title">Le film</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#tickets" class="page-scroll">
                <span class="menu-title">Inscription</span>
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
            <h1 class="logo">K'Rément Libre</h1>
            <h1>Projection Nothing To Hide</h1>
            <h3>Projection du film et débat suivi d'une galette</h3>
            <h4>Le jeudi 18 janvier 2018 à la Loco numérique</h4>
            <a href="#tickets" class="btn btn-lg btn-red page-scroll">S'INSCRIRE GRATUITEMENT <span
                        class="fa fa-arrow-right"></span></a>

        </div>
        <div class="col-md-5 hidden-xs">
            <img src="/img/poster.jpg" width="80%" class="rocket animated bounce">
        </div>
    </div>
    <!-- End: Header -->
</div>
<div class="container">
    <!-- Start: Desc -->
    <div class="row me-row content-ct">
        <h2 class="row-title">Pourquoi cet évènement est-il super cool ?</h2>
        <div class="col-md-4 feature">
            <span class="fa fa-eye"></span>
            <h3>Vous n'avez rien à cacher</h3>
            <p>
                Comme tout le monde, vous n'avez à cacher.<br>Enfin, presque ...
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="fa fa-film"></span>
            <h3>Un documentaire dans son temps</h3>
            <p>
                Nous vous proposons un documentaire qui ne peut pas tomber mieux. La situation actuelle est d'autant
                plus propice à se demander ce que les autres savent de nous.
            </p>
        </div>
        <div class="col-md-4 feature">
            <span class="fa fa-money"></span>
            <h3>Et puis bon c'est gratuit</h3>
            <p>
                Voir un film gratuitement et se faire payer à boire, c'est pas génial ?
            </p>
        </div>
    </div>
    <!-- End: Desc -->
    <hr>
    <!-- Start: Speakers -->
    <div class="row me-row content-ct speaker" id="speakers">
        <h2 class="row-title">Le documentaire</h2>
        <div class="col-md-12">
            <img src="/img/video-camera.png">
            <h3>Nothing To Hide</h3>
            <p>
                Êtes-vous vraiment sûr de n'avoir "rien à cacher"?
                Que peuvent savoir Facebook ou Google de vous en seulement 30 jours? Votre orientation sexuelle? Vos
                heures de lever et de coucher? Votre consommation d'alcool et vos infractions pénales? Votre niveau de
                richesses et votre solvabilité? Marc Meillassoux et Mihaela Gladovic ont fait l'expérience en hackant
                l'Iphone et l'IMac d'un jeune artiste n'ayant « rien à cacher » pendant un mois. Un hacker et une
                analyste ont pour mission de deviner qui est ce jeune homme et s'il n'a véritablement "rien à cacher".
                Celui-ci est loin de se douter où l’expérience va le mener...
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

<!-- Start: Schedule -->
<div class="container">
    <div class="row me-row schedule" id="schedule">
        <h2 class="row-title content-ct">Déroulement de la séance</h2>
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#morning" aria-controls="home" role="tab" data-toggle="tab">
                        Déroulement de la soirée
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
                                        <img class="media-object" src="/img/chat.png" alt="Débat">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">19h00</h4>
                                    <h5>Débat</h5>
                                    <p>Débat autour du film et des domaines concernés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/popcorn.png" alt="Popcorn">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">19h30</h4>
                                    <h5>Début de projection</h5>
                                    <p>
                                        Début de la projection du film.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/talk.png" alt="Parler">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">21h00</h4>
                                    <h5>Présentation des associations et débat</h5>
                                    <p>
                                        Nous allons présenter les associations organisatrices et discuter du
                                        documentaire.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/img/wafer.png" alt="Galette">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">21h30</h4>
                                    <h5>Galette & cidre</h5>
                                    <p>
                                        Passons un moment convivial autour d'une part de galette et du cidre.
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
                Si vous avez un problème de paiement, une question sur votre paiement, demande d'annulation etc.
                Contactez lenaic@lenaic.me. Pour le reste (questions Workshop), utilisez le formulaire ci-dessous.
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
            <p>&copy 2017 <a href="https:/krementlibre.org">K'Rément Libre</a> | Sous Licence Apache 2.0. | Pictures from <a
                        href="https://www.flaticon.com" target="_blank">Flaticon</a> | NOTHING TO HIDE Novembre 2016 © Marc Meillassoux & Mihaela Gladovic</p>
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