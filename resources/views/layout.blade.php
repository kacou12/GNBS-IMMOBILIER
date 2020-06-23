<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.map')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
      .pagination{
        display: flex;
        justify-content:center; 
      }
      .page-link{
        color: #432740;
      }
      .page-link:hover{
        color: #432740;
      }
      .page-item.active .page-link{
        background-color: #432740!important;
        border-color: #432740!important;
        
      }
    </style>
    <title>GNBS IMMOBLIER</title>
<link rel="icon" type="storage/images/x-icon" href="{{asset('image/favico.png')}}">
</head>
<body>

    
<div class="head-container">
    <div class="affich">
        <nav class="navbar topbar">
                <nav class="left-nav">
                        <a href="tel:+22587175804"><i class="fa fa-phone" aria-hidden="true"></i> +225 87 17 58 04</a>
                        <a href="#mailto:kacou585@gmail.com"><i class="fas fa-envelope"></i> KACOU585@GMAIL.COM</a>
                </nav>
                <nav class="right-nav">
                <a href="/accueil" class="@if(Request::is('accueil'))active @endif"><i class="fa fa-home" aria-hidden="true"></i> ACCUEIL</a>
                    <a href="/contact" class="@if(Request::is('contact'))active @endif"><i class="fas fa-envelope"></i> CONTACT</a>
                    <a href="/services" class="@if(Request::is('services'))active @endif"> <i class="far fa-address-card"></i> NOS SERVICES </a>
                    <a href="/alertemail" class="@if(Request::is('alertemail'))active @endif"><i class="fa fa-address-book-o" aria-hidden="true"></i> ALERTE EMAIL</a>
                </nav>         
        </nav>
        <div class="head-logo">
            <img class="left" src="storage/images/logo-agence.png" alt="Logo">
            <img class="right"src="storage/images/nom-agence1.png" alt="nom agence">
        </div>
    </div>
    <div class="head-nav-maison">
        <nav class="navbar nav-bar-top">
            <a href="#" class="dropdown-toggle"  data-toggle="dropdown" aria-expanded="false" role="button" aria-haspopup="true">APPARTEMENTS</a>
            <ul class="dropdown-menu" aria-labelledby="ssmenu-maison" role="menu">
                            
                    <li><a class="link-inverse" href="appart50" role="menuitem">&lt; 5 000 000 Fcfa</a></li>
    
                       <li><a class="link-inverse" href="appart100" role="menuitem">&gt; 5 000 000 Fcfa</a></li>
                    <li><a class="link-inverse" href="piece3" role="menuitem">3 pièces ou -</a></li>
                    <li><a class="link-inverse" href="piece4" role="menuitem">4 pièces et +</a></li>                            
                </ul>
                <!--
                    
                -->
            <a href="villas">VILLA &amp; MAISON </a>
            <a href="locations">LOCATIONS</a>
            <a href="autres_biens">AUTRES BIENS</a>
            <a href="exclusivite">EXCLUSIVITE</a>
        </nav>
    
    </div>
</div>
<!---------------------------------------->
<main>
        <figure class="Fond">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active" data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond5.jpg" alt="First slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond7.jpg" alt="Second slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond3.jpg" alt="Third slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond4.jpg" alt="Second slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond.jpg" alt="Third slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond6.jpg" alt="Third slide">
                          </div>

                          <div class="carousel-item"  data-interval="110">
                            <img class="d-block w-100 img-fluid" src="storage/images/Fond2.jpg" alt="Third slide">
                          </div>

                        </div>
                 </div>
        </figure>
        <div class="recherche">
        <div class="formulaire">
        <form id="moteur" class="navbar-form form-inline form-group navbar to_center" method="get" action="/query" data-noselection="Aucune sélection"  role="search">
                    @csrf
                    <select id="moteur_type" class=" form-control critere"  name="critere" data-groupby="1">
                        <option value="tous" disabled selected data-categorie="">Critère</option>
                        <option value="vente" data-categorie="">Ventes</option>
                        <option value="louer" data-categorie="">Locations</option>                   
                   </select>
                   <select id="moteur_type" class=" form-control logement" name="logement" data-groupby="1" title="Villes">
                        <option value="tous" data-categorie="" disabled selected>Logement</option>
                        <option value="appartement" data-categorie="">Appartements</option>
                        <option value="villa" data-categorie="">Villas</option>
                        <option value="garage" data-categorie="locauxlocation">Garages</option>
                        <option value="immeuble" data-categorie="locauxlocation">Immeubles</option>
                        <option value="terrain" data-categorie="locauxlocation">Terrain</option>
                        <option value="propriete" data-categorie="locauxlocation">Propriete</option>
                        <option value="bureau" data-categorie="locauxlocation">bureau</option>
                        <option value="entrepot" data-categorie="locauxlocation">Entrepot</option>   
                   </select>
                   
                    <select id="moteur_pieces" name="piece" class="form-control piece">
                        <option value="tous" disabled selected>Pieces</option>
                        <option value="1">1 pièces </option>
                        <option value="2">2 pièces </option>
                        <option value="3">3 pièces </option>
                        <option value="4">4 pièces </option>
                        <option value="5">5 pièces </option>
                    </select>

                    
                    <select id="moteur_pieces" name="commune" class="form-control commune">
                            <option  value="tous" disabled selected>Commune</option>
                            <option value="cocody">Cocody</option>
                            <option value="riviera" >Riviera</option>
                            <option value="palmeraie" >palmeraie</option>
                            <option value="deux-plateau">2 Plateaux</option>
                            <option value="plateau">Plateau</option>
                            <option value="anani">Anani</option>
                            <option value="zone-quatre">Zone 4</option>
                            <option value="vridi">Vridi</option>
                            <option value="yopougon">Yopougon</option>  
                    </select>
                    <input class="submit btn btn-primary" type="submit" value="RECHERCHER">
            
        
                </form>
        </div>

        </div>
    
<!-- /////////////MENU\\\\\\\\\\\\\\\\\\\\\\\ -->
@include('flash::message')
   @yield('contenu')
        
</main>
    <footer class="footer">
        <div class="bas">
            <img src="storage/images/logo-agence.png" width="132" height="86" alt="">
            <div class="navfooter">
                <nav class="navbar">
                    <a href="/">Accueil |</a>
                    <a href="#">Partenaires |</a>
                    <a href="/services">  Notre agence immobilière à Abidjan |</a>
                    <a href="#">Syndic |</a>
                    <a href="nos_services.php">A propos</a>
                </nav>
                <p>Téléphone +225 01 60 13 16 | Fax +225 87 17 58 04 | <a href="mailto:kacou585@gmail.com">kacou585@gmail.com</a></p>
                <p>Agence immobilière GNBS immobilier - Cocody -   Pharmacie de la 8eme Tranche  - Logiciel immobilier de transaction, 
                    réalisation site internet et plus , référencement naturel immobilier seo Mentions légales.</p></p>

                
            </div>
            <div class="footerright">
                <figure>
                        <img src="storage/images/footerimage.png" width="132" height="53" alt="">
                        <p> Mac & PC | Tablette | Smartphones</p>
                </figure>
             
            </div>     
        </div>
            
    </footer>


    <script src="{{asset('js/fontawesome-all.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>

    $(document).ready(function() {
      if (window.location.href.indexOf("accueil") <= -1) {
        $('html,body').animate({ scrollTop: 496 }, 'slow');
      }
    });
    
 


    </script>
    
    
</body>
</html>