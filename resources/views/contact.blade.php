@extends('layout')
@section('contenu')
<h4 class="gnbs">GNBS IMMOBILIER</h4>
<div class="conteneur">
    <div class="explication">
        <h4>Agence immobilière GNBS IMMOBILIER</h4>
        <p>Agence immobilière GNBS immobilier - Cocody - Pharmacie de la 8eme Tranche  </p>
        <p>Du lundi au vendredi de 09h00 à 12h00 et de 14h00 à 18h00.</p>
        <p>En dehors des heures d'ouverture, contactez-nous pour un rendez-vous.</p>

    </div>
    <div class="contactez-nous-contact-form contact Formul contact-formulaire">
        <form class="contact-form" action="/information_generale" method="POST" role="form">
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
        
                 <label class="sr-only" for="message">Votre message </label>
                 <textarea id="message"  tabindex="4" name="message" type="textarea" required placeholder="Votre message (indispensable)" class="form-control @error('message')  is-invalid @enderror"></textarea>
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
<div class="emplacement">
    <h4 class="gnbs">Agence immobilière GNBS,a Abidjan</h4>
    <p><strong>Notre agence immobilière GNBS IMMOBILIER</strong>, est située a Angré pres de la Pharmacie de la 8ème tranche . 
    Notre vitrine idéalement positionnée, dispose d'une belle mise en valeur <strong>des annonces immobilières</strong> grâce notamment à de larges supports rétroéclairés.
     Notre équipe de négociateurs expérimentés et nos bureaux spacieux vous réservent le meilleur accueil.</p>
    <p>
        Notre département transaction immobilière, propose à nos clients acheteurs un rendez-vous personnalisé 
        pour établir les meilleurs choix de recherche et un par la suite un suivi régulier. Nous proposons aussi
         à nos clients vendeurs, une évaluation précise du bien à vendre et définissons la meilleure stratégie de 
         vente ; toujours accompagné d'un suivi régulier et de conseil jusqu'à la vente effective du bien.
    </p>
    <p>Consultez régulièrement nos offres de vente <strong>appartements, villas, maisons, terrains,
       a Abidjan et aux alentours</strong> .</p>

    <p>Notre service de location, offre à ceux à la recherche d'un bien en location, une sélection représentative sur le secteur.
     Consultez régulièrement nos offres de location appartement et location villa à Saint Laurent du Var, Cagnes sur mer et alentours.</p>

    <p>
        Enfin le service de gestion locative assure une gestion rigoureuse et une tranquillité d'esprit à nos propriétaires bailleurs.
    </p>
    <img src="storage/images/photo-agence1.jpg" width="1141" height="662" class="img-fluid"  alt="">
    <img src="storage/images/photo-agence2.jpg" width="1141" height="662" class="img-fluid"  alt="">
</div>
<figure class=" maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.101950406087!2d-3.978316785170134!3d5.401436496082354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193dacde4c265%3A0x35ae6d1733932f8a!2sGLOBAL%20NUMERIK%20BUSINESS%20SCHOOL!5e0!3m2!1sfr!2sci!4v1568375750583!5m2!1sfr!2sci" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</figure>
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