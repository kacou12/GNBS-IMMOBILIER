@extends('layout')
@section('contenu')
     <div class="appartement">
            <div>
                <img src="storage/images/logo-titre.png" class="ltitre" alt="">
                <span class="selection">SELECTION</span>
                <span class="appart">APPARTEMENTS</span>
            </div>
            <div>
                <h6><a href="villa">Liste</a>  <i class="fa fa-lg fa-angle-right"></i></h6>
            </div>
        </div>
    <!-- /////////////IMAGE DU MENU \\\\\\\\\\\\\\\\\\\\\\\ -->


       <!-- LOGEMENTS-->

        <section class="menu" >
            <p class="trouver"><span>3 biens</span> trouvés :</p>
            <div class="blocus index">
                <!----------APPARTEMENTS du menu -->
                @foreach ($appartements as $donnees)
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
           
<!----------VILLA du menu -->
        <div class="appartement">
                <div>
                    <img src="storage/images/logo-titre.png" class="ltitre" alt="">
                    <span class="selection">SELECTION</span>
                    <span class="appart">VILLAS</span>
                </div>
                <div>
                    <h6><a href="villa">Liste</a>  <i class="fa fa-lg fa-angle-right"></i></h6>
                </div>
            </div>
        <!-- /////////////IMAGE DU MENU \\\\\\\\\\\\\\\\\\\\\\\ -->


        <section class="menu">
            <p class="trouver"><span>3 biens</span> trouvés :</p>
            <div class="blocus index">
                <!----------VILLA du menu -->
                @foreach ($villas as $donnees)
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
       <!--LOCATION DU MENU-->
       <div class="appartement">
            <div>
                <img src="storage/images/logo-titre.png" class="ltitre" alt="">
                <span class="selection">SELECTION</span>
                <span class="appart">LOCATIONS</span>
            </div>
            <div>
                <h6><a href="locations">Liste</a>  <i class="fa fa-lg fa-angle-right"></i></h6>
            </div>
        </div>
    <!-- /////////////IMAGE DU MENU \\\\\\\\\\\\\\\\\\\\\\\ -->

    <section class="menu">
        <p class="trouver"><span>3 biens</span> trouvés :</p>
        <div class="blocus index">
            <!--LOCATION DU MENU-->
            @foreach ($locations as $donnees)
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
                <img src="storage/images/photo-agence-home.jpg" alt="">
            </div>
            <div class="about-description">
                <p>LA VENTE : consultez sur notre site immobilier <strong>nos annonces immobilières en villas, 
                    appartements à la vente, a Abidjan et partout ailleurs.</strong> 
                </p>
                <p>
                    Accédez aux prestations les plus recherchées : appartements avec vue sur la mer,
                    piscine ou doté d’une grande terrasse. Découvrez un large choix d’appartements
                    à vendre, a Cocody , Riviera ainsi que partout a Abidjan et dans les villes de l'interieur.
                    Tout cela en exclusivité et a des prix battant toute concurrence.
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
    <!--SECTION LIEN SOCIAUX -->
    <section class="social">
        <h4>ACTUALITES</h4>
            <nav  class=" navbar about-social">
                <a href="#" class="about-social-link"><img src="storage/images/sociaux/googleplus.png" width="92" height="92" alt=""></a>
                <a href="facebook.com" class="about-social-link"><img src="storage/images/sociaux/facebook.png" width="92" height="92"  alt=""></a>
                <a href="gts.com" class="about-social-link"><img src="storage/images/sociaux/gts.png" width="92" height="92"  alt=""></a>
                <a href="twimmo.com" class="about-social-link"><img src="storage/images/sociaux/twimmo_market.png" width="92" height="92"  alt=""></a>
                <a href="youtube.com" class="about-social-link"><img src="storage/images/sociaux/youtube.png" width="92" height="92"  alt=""></a>
            </nav> 
           
    </section>
    <section class="lastcontainer">
        <h3>ILS NOUS FONT CONFIANCE</h3>
        <div class="contains">
            <nav class="confiance navbar">
                <a href="#"><img src="storage/images/confiance1.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance2.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance3.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance4.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance5.png" class="img-responsive" alt=""></a>
            </nav>
            <nav class="confiance navbar">
                <a href="#"><img src="storage/images/confiance6.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance7.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance8.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance9.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance10.png" class="img-responsive" alt=""></a>
            </nav>
            <nav class="confiance navbar">
                <a href="#"><img src="storage/images/confiance11.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance12.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance13.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance14.png" class="img-responsive" alt=""></a>
                <a href="#"><img src="storage/images/confiance15.png" class="img-responsive" alt=""></a>
            </nav>
        </div>
    </section> 
@endsection