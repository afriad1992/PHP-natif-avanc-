// Fonctions appelées par le script principal
function styleError(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "red";
  elem.style.display = "block";
}
function styleValid(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "black";
  elem.style.display = "inline";
}
