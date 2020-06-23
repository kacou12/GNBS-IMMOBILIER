@extends('layout')
@section('contenu')
<div class="alert-email">
    <h3>ALERTE EMAIL</h3>
    <p class="recevez">recevez sur votre email nos annonces les plus recentes</p>
    <h3 class="votre-recherche">ABONNEMENT NEWSLETTER</h3>
    <form action="/newsletter" method="POST" class="searchs">
        @csrf
            <div class="row forme">
                    <div class="col-lg-6">
                        <div class="estimation-contact-form">
        
                            <div class="contact contact-form">
                                <div class="row titre">
                                    <h5 class="coordone">VOS COORDONNEES</h5>
                                </div>
        
                                <fieldset class="radiogroup form-horizontal estimation-form-type">
                                    <legend class="estimation-form-type-legende">Titre*</legend>
                                    <div class="estimation-form-type-select">
                                        <div class="form-group form_civilite">
                                            <label class="sr-only" for="titre">Titre</label>
                                            <select class="selectpicker form-control @error('titre') is-invalid @enderror" required name="titre" id="titre">
                                                <option>Aucune sélection</option>
                                                <option value="Monsieur">Monsieur</option>
                                                <option value="Madame">Madame</option>
                                            </select>
                                            <p>@error("titre")
                                                <div class="invalid-feedback">{{$errors->first('titre')}}</div>
                                            @enderror</p>
                                        </div>
                                    </div>
                                </fieldset>
        
                                <fieldset class="radiogroup form-horizontal estimation-form-type">
                                    <legend class="estimation-form-type-legende">Nom*</legend>
                                    <div class="estimation-form-type-select">
                                        <div class="form-group form_nom">
                                            <label class="sr-only" for="nom">Nom</label>
                                            <input type="text" name="nom" id="nom" title="Veuillez renseigner votre nom." x-moz-errormessage="Veuillez renseigner votre nom." required placeholder="Nom (obligatoire)" class="form-control @error('nom') is-invalid @enderror" tabindex="1">
                                            <p>@error("nom")
                                                <div class="invalid-feedback">{{$errors->first('nom')}}</div>
                                            @enderror</p>
                                        </div>
                                    </div>
                                </fieldset>
        
                                <fieldset class="radiogroup form-horizontal estimation-form-type">
                                    <legend class="estimation-form-type-legende">Prenom</legend>
                                    <div class="estimation-form-type-select">
                                        <div class="form-group form_prenom">
                                            <label class="sr-only" for="prenom">Prenom</label>
                                            <input type="text" name="prenom" id="prenom" title="Veuillez renseigner votre prenom." placeholder="Prenom" class="form-control @error('prenom') is-invalid @enderror" tabindex="1">
                                            <p>@error("prenom")
                                                <div class="invalid-feedback">{{$errors->first('prenom')}}</div>
                                            @enderror</p>
                                        </div>
                                    </div>
                                </fieldset>
        
                                <fieldset class="radiogroup form-horizontal estimation-form-type">
                                    <legend class="estimation-form-type-legende">Email*</legend>
                                    <div class="estimation-form-type-select">
                                        <div class="form-group adresse_email">
                                            <label class="sr-only" for="mail">Email</label>
                                            <input type="email" name="email" id="mail" title="Veuillez renseigner votre E-mail." x-moz-errormessage="Veuillez renseigner votre E-mail." required placeholder="E-mail (obligatoire)" class="form-control @error('email') is-invalid @enderror" tabindex="1">
                                            <p>@error("email")
                                                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                            @enderror</p>
                                        </div>
                                    </div>
                                </fieldset>
                                *Obligatoire
                            </div>
                        </div>
                    </div>
        </div>
        
        <div class="form-group form_submit Center-block horairecheck">
                <button type="submit" id="alerteemail-form-submit" class="btn btn-block  alerteemail-form-submit email-envoyer" tabindex="35">ENREGISTRER</button>
        </div>
    </form>
    <div class="loi">
            <p>l'enregistrement de cet email est sous réserve de validation par nos services. Pour vous désabonner, envoyez un email à kacou585@gmail.com ou contactez-nous.</p>
            <p>Les informations communiquées sont destinées à Agence immobilière GNBS IMMOBILIER éditrice de ce site.</p>
            <p>Vous bénéficiez d'un droit d'accès à vos données personelles (Loi n°2004-575 du 21 Juin 2004). Pour les exercer, contactez Agence immobilière GNBS IMMOBILIER.</p>        
    </div>
    
@endsection