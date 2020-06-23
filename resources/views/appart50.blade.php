@extends('layout')
@section('contenu')
<section class="menu">
    <p class="trouver"><span>{{$nombre }} biens</span> trouvés :</p>
    <div class="blocus vm">
        @foreach ($articles as $donnees)
            <div class="premier enieme">
                <div class="deuxieme">
                    <div class="zoom">
                    <img src="storage/{{$donnees->images}}" width="404" height="365" alt="">
                    </div>
                </div>
                <footer class="description">
                    <h6 class="description-titre">{{$donnees->nom}}</h6>
                    <div>
                        <p>{{$donnees->logement}}  |  {{$donnees->piece}} pieces | {{$donnees->commune}} </p>
                    <p>{{$donnees->surface}} m<sup>2</sup></p>
                    </div>
                    <a href="/details{{$donnees->id}}">{{$donnees->critere == 'vente' ? 'A VENDRE ' : 'A LOUER '}} | {{ $donnees->prix}} f cfa</a>
                    
                </footer>
            </div>        
        @endforeach                 
    </div>

  </section>
        <div class="about">
                <div class="image-about">
                    <img src="storage/images/photo-agence-home.jpg" class="img-fluid" alt="">
                </div>
                <div class="about-description">
                    <p>LA VENTE : consultez sur notre site immobilier <strong>nos annonces immobilières en villas, 
                        appartements à la vente, a Abidjan et partout ailleurs.</strong> 
                    </p>
                    <p>
                        Accédez aux prestations les plus recherchées : appartements avec vue mer,
                        piscine ou doté d’une grande terrasse. Découvrez un large choix d’appartements
                        à vendre, des collines vue mer d’Agrimont, Montaleigne, Fahnestock, du quartier 
                        résidentiel du plateau fleuri au centre-ville dynamique proche des plages.
                    </p>
                    <p>
                        LA LOCATION : GNBS Immobilier est spécialisé dans la location vide à l’année.
                    </p>
                    <p>
                        Si vous recherchez <strong>une villa ou un appartement à louer à Abidjan</strong> et aux alentours, notre agence 
                        GNBS IMMOBILIER  vous présente des studios, 2 pièces, 3 pièces et 4 pièces à louer ainsi qu’une
                        sélection de villas.
                    </p>
                </div>
    
            </div>
@endsection