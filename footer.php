<script language="javascript">
var valeur=1;
function modifier(increment) {
valeur+=increment;
document.getElementById('text').value=valeur;
document.getElementById('text').value=valeur;
}
function somme(){
       var nbr1, nbr2, sum;
       nbr1 = Number(document.getElementById("totale").value);
       nbr2 = Number(document.getElementById("nbr").value);
       sum = nbr1+ nbr2;
       document.getElementById("totale").value = sum;
   }
</script>
<script language="javascript">
function menu1panierdesctop(){
  document.getElementById("menu2panier").style.display = "none";
  document.getElementById("menupanier1").style.display = "block";
    document.getElementById("btncommanderpanier").style.display = "none";
      document.getElementById("btnconnexionpanier").style.display = "block";
}
function menu2panierdesctop(){
  document.getElementById("menu2panier").style.display = "none";
  document.getElementById("menupanier1").style.display = "block";
    document.getElementById("btnconnexionpanier").style.display = "none";
      document.getElementById("btnadressepanier").style.display = "block";
}
</script>
<script language="javascript">

function recherch() {
      document.getElementById("imagerech").style.display = "none";
      document.getElementById("barre").style.display = "block";
      var span = document.getElementById('navbare') // L'élément du DOM
span.style.fontSize = '15px' // Font-size à 13px


    }

</script>
<script language="javascript">

function ouvrirFermerSpoiler() {
      document.getElementById("panier").style.display = "block";
      document.getElementById("textpanier").style.display = "none";

    }

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
