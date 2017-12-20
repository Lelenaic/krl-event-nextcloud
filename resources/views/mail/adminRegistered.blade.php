Nouvelle inscription à la projection Nothing to Hide :<br>
@if(is_null($ticket->name))
    L'utilisateur ayant choisi une inscription anonyme, aucun détail ne peut vous être transmis.
@else
    Nom : {{$ticket->name}}<br>
    Mail : {{$ticket->email}}<br>
@endif
<br><br>
Il y a désormais {{\App\Ticket::all()->count()}} inscriptions.