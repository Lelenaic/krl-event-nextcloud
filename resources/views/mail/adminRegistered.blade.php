Nouvelle inscription au Workshop Docker :<br>
Nom : {{$ticket->name}}<br>
Mail : {{$ticket->email}}<br>
@if (!is_null($ticket->card))
    Moyen de paiement : {{$ticket->card?'Carte':'Chèque'}}<br>
    Tarif réduit : {{$ticket->reduced ? 'Oui':'Non'}}<br>
    @if($ticket->card)
        Numéro de transaction : {{$number}}
    @endif
@else
    <b>INSCRIPTION EN TANT QU'ETUDIANT</b>
@endif