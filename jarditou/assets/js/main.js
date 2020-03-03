function validForm(event) {
  // Fonction appelée par le listener
  if (!rxNP.test(txtNom.value)) {
    // Nom valide ?
    event.preventDefault();
    msgNom.textContent =
      "Votre nom doit commencer par une lettre et contenir uniquement des lettres séparées par des espaces, tirets et apostrophes";
    styleError(msgNom);
  } else {
    msgNom.textContent = "*";
    styleValid(msgNom);
  }
  if (!rxNP.test(txtPrenom.value)) {
    // Prénom valide ?
    event.preventDefault();
    msgPrenom.textContent =
      "Votre prénom doit commencer par une lettre et contenir uniquement des lettres séparées par des espaces, tirets et apostrophes";
    styleError(msgPrenom);
  } else {
    msgPrenom.textContent = "*";
    styleValid(msgPrenom);
  }

  if (!("" == txtAdr.value || rxAdr.test(txtAdr.value))) {
    // L'adresse n'est pas requise, donc le champ vide ou respectent la regex est valide
    event.preventDefault();
    msgAdr.textContent =
      "Veuillez rentrer une adresse valide (chiffres suivis de groupes de lettres séparées par des espaces), ou laisser vide";
    styleError(msgAdr);
  } else {
    msgAdr.textContent = "*";
    styleValid(msgAdr);
  }
  if (!rxMail.test(txtMail.value)) {
    event.preventDefault();
    msgMail.textContent = "Veuillez entrer votre adresse mail";
    styleError(msgMail);
  } else {
    msgMail.textContent = "*";
    styleValid(msgMail);
  }
  if (-1 == selSuj.selectedIndex) {
    event.preventDefault();
    msgSuj.textContent = "Sélectionnez un sujet";
    styleError(msgSuj);
  } else {
    msgSuj.textContent = "*";
    styleValid(msgSuj);
  }
  if ("" == txtaQuestion.value) {
    event.preventDefault();
    msgQuest.textContent = "Veuillez entrer votre question";
    styleError(msgQuest);
  } else {
    msgQuest = "*";
    styleValid(msgQuest);
  }
  if (!(estHomme.checked || estFemme.checked)) {
    event.preventDefault();
    msgGenre.textContent = "Veuillez sélectionner votre genre";
    styleError(msgGenre);
  } else {
    msgGenre.textContent = "*";
    styleValid(msgGenre);
  }
  if ("" == txtDate.value) {
    event.preventDefault();
    msgDate.textContent = "Veuillez choisir votre date de naissance";
    styleError(msgDate);
  } else if (!rxDate.test(txtDate.value)) {
    // Obligation de tester la validité du contenu, IE ne prend pas en charge le contrôle de saisie sur les input date
    event.preventDefault();
    msgDate.textContent = "Veuillez saisir votre date de naissance";
    styleError(msgDate);
  } else {
    msgDate.textContent = "*";
    styleValid(msgDate);
  }
}
btnSubmit.addEventListener("click", validForm);
