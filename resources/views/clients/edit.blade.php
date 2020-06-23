@extends('template')
@section('contenu')
<div class="conteneur">
    <div class="contactez-nous-contact-form contact Formul">
    <form class="contact-form" action="/clients/{{$client->id}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <h3 class="contact-form-titre">MODIFICATION D'ARTICLES IMMOBILIERS</h3>
                <div class="nom">
                <input type="text" id="name" name="nom" tabindex="1" value="{{$client->nom}}" title="Veuillez renseigner le nom" x-moz-errormessage="Veuillez renseigner le nom." required placeholder="Nom " class="form-control" required>
                </div>
                    <h3 class="contact-form-titre left">Critere</h3>
                    <div class="critere">
                    <p>
                        <input type="radio" id="vente"  name="critere"  value="vente" @if($client->critere == "vente") checked @endif > 
                        <label  for="vente">Vente</label>

                        <input type="radio" id="louer"  name="critere"   value="louer" @if($client->critere == "louer") checked @endif>
                        <label for="louer">Louer</label> 
                    </p>        
                </div>

                <h3 class="contact-form-titre left">Prix</h3>
                <div class="prix">
                    <p>
                        <input type="number" id="prix"  name="prix" required value="{{$client->prix}}">
                        <label  for="prix"> Fcfa</label>  
                    </p>      
                </div>

                <h3 class="contact-form-titre left">Type de Logement</h3>
                <div class="logement">
                    <p>
                        <input type="radio" id="appartement"  name="logement"  value="appartement"> 
                        <label  for="appartement">appartement</label>                   
        
        
                        <input type="radio" id="villa"  name="logement" @if($client->logement == "villa") checked @endif value="villa">
                        <label  for="villa">villa</label>
        
                        <input type="radio" id="garage"  name="logement" @if($client->logement == "garage") checked @endif value="garage"> 
                        <label  for="garage">garage</label>
        
                        <input type="radio" id="immeuble"  name="logement" @if($client->logement == "immeuble") checked @endif value="immeuble"> 
                        <label  for="immeuble">immeuble</label>
        
                        <input type="radio" id="terrain"  name="logement"  @if($client->logement == "terrain") checked @endif value="terrain">
                        <label  for="terrain">terrain</label> 
        
                        <input type="radio" id="propriete"  name="logement" @if($client->logement == "propriete") checked @endif value="propriete">
                        <label  for="propriete">propriete</label> 
        
                        <input type="radio" id="bureau"  name="logement" @if($client->logement == "bureau") checked @endif value="bureau">
                        <label  for="bureau">bureau</label>

                        <input type="radio" id="entrepot"  name="logement"  @if($client->logement == "entrepot") checked @endif value="entrepot">
                        <label  for="entrepot">entrepot</label> 
                    </p>
                </div>
    
                <h3 class="contact-form-titre left">Image Item</h3>
                <div>
                <p>
                    <input type="file" class="file" name="ma_photo">
                </p>
        
    
                </div>
                <h3 class="contact-form-titre left">Surface</h3>
                <div>
                    <p>
                    <input type="number" name="surface" value="{{$client->surface}}" required>
                        <label  for="surface"> m2</label> 
                    </p>
                </div>
    
                <h3 class="contact-form-titre left">Type de Biens </h3>
                <div>
                    <p>
                        <input type="radio" id="AUTRE_BIENS"  name="type_bien" @if($client->type_bien == "AUTRE_BIENS") checked @endif value="AUTRE_BIENS">
                        <label  for="AUTRE_BIENS">Autres Biens</label> 
        
                        <input type="radio" id="LOCATION"  name="type_bien" @if($client->type_bien == "LOCATION") checked @endif value="LOCATION">
                        <label  for="LOCATION">Location</label> 
        
                        <input type="radio" id="villa_maison"  name="type_bien" @if($client->type_bien == "villa_maison") checked @endif value="villa_maison">
                        <label  for="villa_maison">Villa&amp;Maison</label> 
                    </p>
                </div>

                <h3 class="contact-form-titre left">Nombre de Piece</h3>
                <div class="piece">
                    <p>
                        <input type="radio" id="1"  name="piece" @if($client->piece == 1) checked @endif  value="1">
                        <label  for="1">1 piece</label> 
        
                        <input type="radio" id="2"  name="piece" @if($client->piece == 2) checked @endif  value="2">
                        <label  for="2">2 pieces</label>
        
                        <input type="radio" id="3"  name="piece" @if($client->piece == 3) checked @endif  value="3"> 
                        <label  for="3">3 pieces</label>
        
                        <input type="radio" id="4"  name="piece" @if($client->piece == 4) checked @endif  value="4"> 
                        <label  for="4">4 pieces</label>
        
                        <input type="radio" id="5"  name="piece" @if($client->piece == 5) checked @endif  value="5">
                        <label  for="5">5 pieces</label> 
                    </p>
                </div>
                <h3 class="contact-form-titre left">Commune</h3>
                <div class="commune">
                    <p>
                        <input type="radio" id="cocody"  name="commune"  @if($client->commune == "cocody") checked @endif value="cocody"> 
                        <label  for="cocody">Cocody</label>                   
    
                        <input type="radio" id="riviera"  name="commune" @if($client->commune == "riviera") checked @endif value="riviera">
                        <label  for="riviera">riviera</label>
        
                        <input type="radio" id="palmeraie"  name="commune" @if($client->commune == "palmeraie") checked @endif value="palmeraie"> 
                        <label  for="palmeraie">Palmeraie</label>
        
                        <input type="radio" id="deux-plateaux"  name="commune"  @if($client->commune == "deux-plateaux") checked @endif value="deux-plateaux"> 
                        <label  for="deux-plateaux">2 Plateaux</label>
        
                        <input type="radio" id="plateau"  name="commune" @if($client->commune == "plateau") checked @endif value="plateau">
                        <label  for="plateau">Plateau</label> 
        
                        <input type="radio" id="anani"  name="commune"  @if($client->commune == "anani") checked @endif value="anani">
                        <label  for="anani">Anani</label> 
        
                        <input type="radio" id="zone-quatre"  name="commune" @if($client->commune == "zone-quatre") checked @endif value="zone-quatre">
                        <label  for="zone-quatre">Zone 4</label>

                        <input type="radio" id="vridi"  name="commune"  @if($client->commune == "vridi") checked @endif value="vridi">
                        <label  for="vridi">Vridi</label> 
        
                        <input type="radio" id="yopougon"  name="commune"  @if($client->commune == "yopougon") checked @endif value="yopougon">
                        <label  for="yopougon">yopougon</label> 
                    </p>
                </div>
                <div class="form-group form_message">
                    <label class="sr-only" for="descriptions">Votre message</label>
                    <textarea id="descriptions" rows="7" tabindex="4" name="descriptions" type="textarea"  required placeholder="La description" class="form-control">{{$client->descriptions}}</textarea>
                </div>
                 <div class="form-group form_submit">
                    <button class="btn btn-primary btn-block contact-form-submit envoyer" type="submit" name="envoyer" tabindex="5">MODIFIER</button>
                </div>
                </form>
            </div>
        
    </div>
</div>
@endsection