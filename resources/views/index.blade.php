<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inscription au Workshop Docker de K'Rément Libre">
    <meta name="author" content="Lénaïc Grolleau">
    <title>K'Rément Libre - Workshop Docker</title>

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
            <h1 class="logo">K'Rément Libre</h1>
            <h1>Workshop Docker 2017</h1>
            <h3>Apprenez à utiliser Docker comme un atout dans votre travail</h3>
            <h4>Le samedi 04 Novembre 2017 à la Loco numérique</h4>
            <a href="#tickets" class="btn btn-lg btn-red page-scroll">ACHETER DES TICKETS <span
                        class="fa fa-arrow-right"></span></a>

        </div>
        <div class="col-md-5 hidden-xs">
            <img src="/img/docker.png" class="rocket animated bounce">
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
                Notre intervenant est un professionel et utilise cette technologie au quotidien dans son entreprise.
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
            <img src="/img/guillaume.png" class="speaker-img">
            <h3>Guillaume CHÉRAMY</h3>
            <p>
                Patron d'une entreprise d'hébergement et d'infogérence libre, Président de l'association K'Rément Libre
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
            Vous pouvez payer par carte en ligne ou au Workshop (carte, chèque, liquide).<br>
            Même si vous payez au Workshop, cliquez sur "Acheter" pour réserver une place.<br><br>
        </p>
        <h3>Il reste : <b>{{$places}}</b> places.</h3>
        <div class="col-md-4 col-sm-12">
            <h3>Tarif étudiant</h3>
            <p class="price">15€</p>
            <p>Réservé aux étudiants</p>
            @if ($canBuy)
                <button data-toggle="modal" data-target="#studentModal" class="btn btn-lg btn-red">
                    ACHETER
                </button>
            @else
                <button disabled class="btn btn-lg btn-red">
                    ACHETER
                </button>
            @endif
        </div>
        <div class="col-md-4 col-sm-12">
            <h3>Tarif réduit</h3>
            <p class="price">25€</p>
            <p>Membres de K'Rément Libre,<br>Ozérim ou Code2be</p>
            @if ($canBuy)
                <button data-toggle="modal" data-target="#reducedPrice" class="btn btn-lg btn-red">
                    ACHETER
                </button>
            @else
                <button disabled class="btn btn-lg btn-red">
                    ACHETER
                </button>
            @endif
        </div>
        <div class="col-md-4 col-sm-12">
            <h3>Plein tarif</h3>
            <p class="price">35€</p>
            <p>Non membres</p>
            @if ($canBuy)
                <button data-toggle="modal" data-target="#payModal" onclick="pay()" class="btn btn-lg btn-red">
                    ACHETER
                </button>
            @else
                <button disabled class="btn btn-lg btn-red">
                    ACHETER
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
                                        Après une matinée bien remplie, un bon repas équilibré pour repartir d'aplomb
                                        l'après-midi.
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
                                    <h5>Gardons du temps</h5>
                                    <p>
                                        Nous conservons du temps pour des questions, ou si une activité dûre plus
                                        longtemps.
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
                                        Fin de ce Workshop vers 17H00, sauf si vous êtes passionnés, il pourrait y avoir
                                        du retard ;)<br>
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
            <p>&copy 2017 <a href="https:/krementlibre.org">K'Rément Libre</a> | Sous Licence Apache 2.0.</p>
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
        $('form#pay').submit(function (e) {
            e.preventDefault();
            $('div#already').hide();
            var el = $(this);
            var name = $(this).find('input#name').val();
            $.post('{{route('isRegistered')}}', {name: name, _token: '{{csrf_token()}}'}, function (data) {
                if (data == 'f') {
                    el.unbind().submit();
                } else if (data == 't') {
                    $('div#already').show();
                } else {
                    window.location.replace(data);
                }
            });
        });

        $('form#student').submit(function (e) {
            e.preventDefault();
            $('div#alreadyStudent').hide();
            var el = $(this);
            var name = $(this).find('input#name').val();
            $.post('{{route('isRegistered')}}', {name: name, _token: '{{csrf_token()}}'}, function (data) {
                if (data == 'f') {
                    el.unbind().submit();
                } else if (data == 't') {
                    $('div#alreadyStudent').show();
                }
            });
        });

        $('form#isMember').submit(function (e) {
            $(':input').prop('disabled', true);
            $('div#notMember').hide();
            e.preventDefault();
            var email = $('input#emailForMemberVerify').val();
            $.post('{{route('isMember')}}', {email: email, _token: '{{csrf_token()}}'}, function (data) {
                var response = $.parseJSON(data);
                $(':input').prop('disabled', false);
                if (data !== '0') {
                    $('input#email').val(email).prop('readonly', true);
                    $('input#name').val(response.name).prop('readonly', true);
                    $('div#reducedPrice').modal('hide');
                    $('div#payModal').modal('show');
                } else {
                    $('div#notMember').show();
                }
            });
        });
    });

    function pay() {
        $('form#pay').show();
        $('form#pay-reduced').hide();
    }
</script>

<!-- Reduced price inscription Modal -->
<div class="modal fade" id="reducedPrice" tabindex="-1" role="dialog" aria-labelledby="reducedPrice">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Vérification de membre</h4>
            </div>
            <form id="isMember">
                <div class="modal-body">
                    <div id="notMember" class="alert alert-danger text-center" hidden>
                        <i class="fa fa-warning fa-2x"></i><br>
                        Hum, il semblerait que vous ne soyez pas membre de
                        K'Rément Libre, Ozérim ou Code2be. Si vous êtes un membre et que votre mail n'est pas reconnu,
                        veuillez contacter
                        lenaic@lenaic.me.<br>
                        Si vous n'êtes pas membre mais que vous souhaitez vous inscrire,
                        <a href="https://www.krementlibre.org/adherer-ou-soutenir/" target="_blank">cliquez ici</a>.
                    </div>
                    Afin de vous inscrire à ce prix là, nous devons vérifier si vous êtes bien un membre de K'Rément
                    Libre, Ozérim ou Code2be.<br>
                    Merci de bien vouloir entrer l'adresse e-mail avec laquelle vous vous êtes inscris chez nous :
                    <input class="form-control" type="email" id="emailForMemberVerify" name="email"
                           placeholder="moi@domaine.fr"
                           required/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Achat de ticket</h4>
            </div>
            <form action="{{route('prePay')}}" id="pay" method="POST">
                <div class="modal-body">
                    <div id="already" class="alert alert-danger text-center" hidden>
                        <i class="fa fa-warning fa-2x"></i><br>
                        <b>Hum, il semblerait que vous soyez déjà inscrit.</b>
                    </div>
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Votre nom et prénom :*</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre e-mail :*</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment1" value="1" required>
                                Payer maintenant par carte via Stripe
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment" id="payment2" value="2" required>
                                Payer au Workshop (carte, chèque, liquide)
                            </label>
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

<!-- Student Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Réservation étudiants</h4>
            </div>
            <div class="alert alert-info text-center" role="alert">
                <i class="fa fa-info-circle fa-2x"></i><br>
                K'Rément Libre propose aux étudiants de participer à nos évènements avec une réduction
                tant que vous présentez une justification officielle (carte d'étudiant, certificat de scolarité etc.).
                Vous serez amené à payer au Workshop par carte, ou par chèque/liquide en présentant, nous vous le rapellons,
                un justificatif de votre statut d'étudiant.
            </div>
            <form action="{{route('student')}}" id="student" method="POST">
                <div id="alreadyStudent" class="alert alert-danger text-center" hidden>
                    <i class="fa fa-warning fa-2x"></i><br>
                    <b>Hum, il semblerait que vous soyez déjà inscrit.</b>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Votre nom et prénom :*</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre e-mail :*</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required>
                                Je jure être un étudiant et je m'engage à présenter un justificatif officiel lors du
                                Workshop
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button class="btn btn-success">Valider</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>