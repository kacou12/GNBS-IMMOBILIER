@extends('template')

@section('contenu')
    <h3>Listes des Biens Immobiliers</h3>
    <p class="vert"><a href="/clients/create" class="btn btn-success "><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></p>
    <!--Bootstrap nav-->



    
    <table class="table table-bordered">
        <thead>
            <th>Nom</th>
            <th>Descriptions</th>
            <th >Prix</th>
            <th>Critere</th>
            <th>Logement</th>
            <th>Piece</th>
            <th>commune</th>
            <th>Surface</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            @foreach ($clients as $donnees)
                <tr>
                    <td>{{$donnees->nom}}</td>
                    <td>{{substr($donnees->descriptions, 0, 48).".."}}</td>
                    <td>{{$donnees->prix}}Fcfa</td>
                    <td>{{$donnees->critere}}</td>
                    <td>{{$donnees->logement}}</td>
                    <td>{{$donnees->piece}}</td>
                    <td>{{$donnees->commune}}</td>
                    <td>{{$donnees->surface}}</td>
                    <td colspan="1"><a class="btn btn-outline-secondary " href="/clients/{{$donnees->id}}"><i class="fa fa-eye"></i> Voir</a></td>
                    <td colspan="1">
                        <a href="/clients/{{$donnees->id}}/edit" class="btn btn-primary"><i class="far fa-edit"></i> modifier</a>
                    </td>
                    <td colspan="1">
                        <form action="/clients/{{$donnees->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger supp"><i class="far fa-edit"></i> supprimer</button>
                        </form>
                    </td>
                <tr>        
                
            @endforeach
        </tbody>
    </table>
    {{$clients->links()}}
    
@endsection