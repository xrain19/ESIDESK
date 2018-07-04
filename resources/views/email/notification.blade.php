<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>

<div>

    <h3>{{$notification['title']}}</h3>

    Pour accéder à la demande : {{$notification['link']}}

    <div class="card-body">
        <h4>Equipe :</h4>
        <p id="description" class="card-text text-body">{!! $notification['demande']->equipe->name !!}
        </p>
        <h4>Description : </h4>
        <p id="description" class="card-text text-body">{!! $notification['demande']->description !!}</p>
        <strong>Statut : </strong>
        <span><strong> {{$notification['demande']->statut->name}}</strong></span>
    </div>

    <ul>
        <li><i>Demandeur
                : </i>{{$notification['demande']->user->firstname . " " . $notification['demande']->user->lastname}}
        </li>
        <li><i>Equipe : </i>{{$notification['demande']->user->equipe->name}}</li>
        <li><i>Date de Création
                : </i>{{date('d-m-Y à H', strtotime($notification['demande']->created_at))}}h
        </li>
        <li><i>Date souhaitée
                : </i>{{date('d-m-Y', strtotime($notification['demande']->desired_date))}}
        </li>
    </ul>


</div>
</body>
</html>