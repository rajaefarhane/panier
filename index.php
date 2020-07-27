<?php
include('header.php');
 ?>
<!-- ***********************************navbare partie dexctope **********************************************-->

 <nav class="navbar navbar-expand-lg  navbar-dark fixed-top navs" id="navbare">
   <img alt="logo"src="image/logo.png" class="px-4 ">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     <h1>
   </button>
   <div class="px-4 collapse navbar-collapse" id="navbarText">
     <ul class="navbar-nav mr-auto">
       <li class="px-2 nav-item active">
         <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
       </li>
       <li class=" px-2 nav-item">
         <a class="nav-link  text-white " href="index.php">Nos collections</a>
       </li>
       <li class="px-2  nav-item">
         <a class="nav-link text-white" href="index.php">Qui sommes-nous</a>
       </li>
       <li class="px-2  nav-item">
         <a class="nav-link text-white" href="contact.php">Nous contacter</a>
       </li>
       <li class="px-1 nav-item">
           <img class="taille" alt="logo"src="image/rech.png" onclick="recherch()"id="imagerech">
              <form name="formbarre">
               <input type="text" name="barre" id="barre" placeholder= "recherche..." />
              </form>
       </li>
     </ul>
     <ul class="px-4  navbar-nav mr-auto d">
       <li class="px-4 nav-item">
          <span title="0625314587"> <a href="contact.php" class="stdetaile"> <img class="taille" alt="logo"src="image/telephone.png"></span></a>
       </li>
       <li class=" px-4 nav-item">
         <span title="connecter-vous"><a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/user.png"></span></a>
      </li>
      <li class="px-4 nav-item">
         <span title="consulter-votre panier"><a href="contact.php" class="stdetaile"><img class="taille" alt="logo"src="image/panier.png"></span></a>
      </li>
    </ul>
   </div>
 </nav>


 <!-- *****************************navbare partie mobile***************************************************-->

     <nav class="navbar navbar-expand-lg navbar-light " id="navbarmobile">
       <img src="image/logonoire.png"class="navbar-brand logomobilep"/>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           <li class="nav-item active">
             <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Nos collections</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">Qui sommes-nous</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">Nous contacter</a>
           </li>
         </ul>
         <ul class="px-4  navbar-nav mr-auto ">
           <li class="px-4 nav-item">
            <a href="contact.php" class="stdetaile"> <img class="taille" alt="logo"src="image/telephone.png"> <p class="px-2 tlf">0625314587</p></a>
           </li>
           <li class=" px-4 nav-item">
            <a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/user.png"><p class="px-2 tlf">connecter-vous</p></a>
           </li>
           <li class="px-4 nav-item">
            <a href="contact.php" class="stdetaile">  <img class="taille" alt="logo"src="image/panier.png"><p class="px-2 tlf">votre panier</p></a>
           </li>
         </ul>
       </div>
       <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon "></span>
       </button>
     </nav>
</header>

<div class="container-fluid">
  <div class="row margtitre">
    <div class="col-lg-12">
      <h1 class="titrerecapitulatif cacherpanier2">RECAPITULATIF DE LA COMMANDE</h1>
      <!-- ***********************tire recaputilatife pour partie mobile*************************************************-->
      <h1 class="titrerecapitulatife bla">RECAPITULATIF DE</h1><br>
      <h1 class="titrerecapitulatife bla">LA COMMANDE</h1>
      <!-- ***************************************fin titre************************************************************-->
    </div>
  </div>
</div>
<!-- ********************************************* menu de recapitilatif connexion de panier****************************-->
<div class="container-fluid navbar2 ">
          <div class="row">
            <div class="col-lg-3 col-sm-12 col1">
              <h3 class="recapitulatif">  Récapitulatif  <span class="flech py-4">></span><h3>
            </div>
            <div class="col-lg-2 cacherelemntpanier" id="menu2panier">
              <h3 class="connexionmenu" id="Connexionpanier" >Connexion<span class="flech1 py-4">></span></h3>

            </div>
            <div class="col-lg-2 cacherelemntpanier col11" id="menupanier1">
              <h3 class="recapitulatifjs" id="Connexionpanier" >Connexion<span class="flech py-4">></span></h3>

            </div>

            <div class="col-lg-2 cacherelemntpanier"id="menu2panier">
              <h3 class="connexionmenu">Adresse <span class="flech1 py-4">></span></h3>
            </div>
            <div class="col-lg-2 cacherelemntpanier col1" id="menupanier1">
              <h3 class="recapitulatifjs" id="Connexionpanier" >Adresse<span class="flech py-4">></span></h3>

            </div>
            <div class="col-lg-2 cacherelemntpanier">
              <h3 class="connexionmenu">Livraison<span class="flech1 py-4">></span></h3>
            </div>
            <div class="col-lg-3 cacherelemntpanier ">
              <h3 class="position1">Paiement</h3>
            </div>
          </div>
</div>
<!-- ************************************ partie de l-image et overlay **************************************-->
           <div class="container-fluid traitpanierfn ">
                     <div class="row">
                       <div class="col-lg-3 ">
                         <div class="dess">
                           <img src="image/imm1.png" class="pre1panier">
<!-- ************************************* image pour la pertie mobile d'overlay **************************-->
                            <img src="image/matr1.png" class="pre1mobile">
<!-- ***************************************fin image mobile *********************************************-->
                          <div class="overlayp">
                           <div class="py-4 textsticker">STICKER</div><br>
                           <div class="py-4 textt">6€</div><br>
                           <div class="py-4 texttt"><h3 class="voir"><a href="dettail.php" class="stdetailee">Voir le produit</a></h3></div>
                              <hr>
                          </div>
                       </div>
                      </div>
                      <div class="col-lg-5 vermobile">
                         <h3 class="autocollant">AUTOCOLLANT PLAQUE RESINE 21</h3>
                         <!-- *************************************** texte just pour partie mobile *******************-->
                         <h3 class="autocollanteresine">AUTOCOLLANT PLAQUE </h3><h3 class="autocollanteresine">RESINE 21</h3>
                         <img class="btnsuppmobile" alt="cntrl2"src="image/supp.png" onClick="supprimer">
                         <!-- *************************************** fin parti emobile ***************************-->
                         <h6 class="reference referencemobile">Référence Bleu :<span class="gr"> D21B1<span></h6>
                         <p class="reference  ">6,00 €</p>
                     </div>
                       <div class="col-lg-4 ">
                         <div class="row laquantite">
                          <div class="col-lg-6">
                           <h6 class="autocollante qte">Qté</h6>
                            <!-- *************************************** texte just pour partie mobile *******************-->
                           <h6 class="autocollanteresinemobile">Quantités:</h6>
                           <!-- *************************************** fin parti emobile ***************************-->
                         </div>
                         <div class="col-lg-6">
                            <h6 class="autocollante totaledesctop">Total produit</h6>
                            <h6 class=" totalepromobile">Total produit:</h6>
                         </div>
                          <hr>
                       </div>
                       <div class="row">
                       <div class="col-lg-5 numbermobile">
                           <input class="ds" type="text" id="text" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; text-align:center; font-size:30px">
                      <div class="tpanier tpaniermobile ">
                             <img  class="tapanier tapaniermobile"  alt="cntrl1"src="image/fl1.jpg"  id="nbr" onClick="modifier(1);somme();"><br>
                             <img class="taapanier taapaniermobile" alt="cntrl2"src="image/fl2.jpg" onClick="modifier(-1)">
                       </div>
                       </div>
                       <div class="col-lg-5">
                           <input type="text" class="prixpanier prixpaniermobile" id="totale" value="6,00€" size="3" readonly="true"  >
                       </div>
                       <div class="col-lg-2">
                             <img class="btnsupp" alt="cntrl2"src="image/supp.png" onClick="supprimer">
                       </div>
                     </div>
                    </div>
                  </div>
            </div>
            <div class="container-fluid  ">
                      <div class="row">
                        <div class="col-lg-6 imageachat">
                           <img class="visamobile" alt="cntrl2"src="image/visa.png" onClick="commander">
                           <img class="threed" alt="cntrl2"src="image/3d.png" onClick="commander">
                           <img class="visa" alt="cntrl2"src="image/visa.png" onClick="commander">
                           <img class="paypal" alt="cntrl2"src="image/paypal.png" onClick="commander">
                         </div>
                        <div class="col-lg-6 totalesimobile">
                          <h3 class="totalepanierfn totalepanierfnmobile">Total: <span class="prixpanierfn">6,00€</span></h3>
                        </div>
                     </div>
                     <div class="row">
                      <div class="col-lg-8 ">
                      </div>
                     <div class="col-lg-4 ">
                      <div class="btnmobile">
                          <button class="boutonpaniercommander" onclick="menu1panierdesctop()" id="btncommanderpanier"><p class="textepaniere">Commander</p>
                         </button>
                         <button class="boutonpaniercommander" onclick="menu2panierdesctop()" id="btnconnexionpanier"><p class="textepaniere">Connexion</p>
                        </button>
                        <button class="boutonpaniercommander" onclick="menu3panierdesctop()" id="btnadressepanier"><p class="textepaniere">valider</p>
                       </button>
                      </div>
                    </div>
                  </div>
                </div>

 <?php
 include('footer.php');
  ?>
