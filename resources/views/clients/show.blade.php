@extends('template')
@section('contenu')
    <div class="corps">
        <main>
            <div class="contenu">
                <div class="explication">              
                    <h4>{{$client->nom}}</h4>
                    <p> 
                        Située  a {{$client->commune}}
                    </p>
                    <p>
                        {{$client->descriptions}}
                    </p> 
                    <p><strong>Situation Géographique :</strong>{{$client->commune}}</p>
                    <p><strong>  Status :</strong>{{$client->critere}}</p>
                    <p><strong>  Nombre de pieces :</strong>{{$client->piece}}</p>      
                    <p><strong>Prix: </strong>{{$client->prix}} Fcfa</p>
                    <p><strong>Surface: </strong>{{$client->surface}}m<sup>2</sup></p>
                    <p><a href="/clients" class="btn btn-primary bleu"><i class="fas fa-arrow-left"></i> Retour</a></p>     
                                 
                </div>
            </div>
            <div class="image">
                <figure>
                    <img src="../storage/{{$client->images}}" width="515" height="400" alt="">
                </figure>
            </div>
        </main>
    </div>
@endsection