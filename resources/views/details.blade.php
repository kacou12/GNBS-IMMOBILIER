@extends('layout')
@section('contenu')
<div class="contenu-image">
    <figure>
        <a href="storage/{{$articles->images}}"><img src="storage/{{$articles->images}}" class="img-fluid" width="650" height="500" alt=""></a>
    </figure>
    <div class="conteneur">
            <div class="explication">
                <h4>{{$articles->nom}}</h4>
                <p> 
                    Située  a {{$articles->commune}}.
                </p>
                <p>
                    {{$articles->descriptions}} 
                </p> 
                    
                <p><strong>Situation Géographique :</strong>{{$articles->commune}}</p>
                <p><strong>  Status :</strong> {{$articles->critere}}</p>
                <p><strong>  Nombre de pieces :</strong>  {{$articles->piece}}</p>      
                <p><strong>  Superficie :</strong>  {{$articles->surface}} m<sup>2</sup></p>
                <p><strong>Prix: </strong>{{$articles->prix}} Fcfa</p>    
            </div>
            <div class="contactez-nous-contact-form contact Formul img-formul">
                <form class="contact-form" action="/article_information/{{$articles->id}}" role="form" method="POST">
                    @csrf
                     <h3 class="contact-form-titre">Demande d'informations</h3>
                
                     <div class="form-group form_nom">
                
                         <label class="sr-only" for="name">Nom et prénom</label>
                         <input type="text" id="name" name="nom" tabindex="1" title="Veuillez renseigner votre Nom et prénom." x-moz-errormessage="Veuillez renseigner votre Nom et prénom." required placeholder="Nom et prénom (indispensable)" class="form-control @error('nom')  is-invalid @enderror">
                         <p>@error("nom"))
                            <div class="invalid-feedback">{{$errors->first('nom')}}</div>
                        @enderror</p>
                     </div>
                     <div class="form-group form_tel">
                
                         <label class="sr-only" for="tel">Téléphone</label>
                         <input type="text" id="tel" tabindex="2" name="telephone" placeholder="Téléphone" class="form-control @error('telephone')  is-invalid @enderror">
                         <p>@error("telephone"))
                            <div class="invalid-feedback">{{$errors->first('telephone')}}</div>
                        @enderror</p>
                     </div>
                     <div class="form-group adresse_email">
                
                         <label class="sr-only" for="mail">Email</label>
                         <input type="email" id="mail" tabindex="3" name="email" title="Veuillez renseigner votre Email." x-moz-errormessage="Veuillez renseigner votre Email." required placeholder="Email (indispensable)" class="form-control @error('email')  is-invalid @enderror">
                         <p>@error("email"))
                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                        @enderror</p>
                     </div>
                     <div class="form-group form_message">
                
                         <label class="sr-only" for="message">Votre message</label>
                         <textarea id="message"  tabindex="4" name="message" type="textarea" placeholder="Votre message" class="form-control @error('message')  is-invalid @enderror"></textarea>
                         <p>@error("message"))
                            <div class="invalid-feedback">{{$errors->first('message')}}</div>
                        @enderror</p>
                     </div>
                     <div class="form-group form_submit">
                
                         <button class="btn btn-default btn-block contact-form-submit envoyer" type="submit" tabindex="5">Envoyer</button>
                     </div>
                 </form>
            </div>
        
        </div>
</div> 
@endsection