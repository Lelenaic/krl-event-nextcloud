<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<p>
    Merci pour votre participation !<br>
    Vous avez correctement été inscrit à l'évènement <b>projection Nothing to Hide</b> !<br>
    Rendez-vous le 18 Janvier à 19h00 !<br>
    Le flash code correspondant à votre ticket est ci-dessous, vous devez absolument l'amener le jour de l'évènement (imprimé ou
    sur smartphone), afin de valider votre ticket.
    <br>
    <br>
    <img src="{!!$message->embedData(\SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(300)->generate($number), 'QrCode.png', 'image/png')!!}">
</p>
</body>
</html>