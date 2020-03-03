// Éléments de formulaire à tester/modifier
var btnSubmit = document.getElementById("envoi");
var txtAdr = document.getElementById("adr");
var txtNom = document.getElementById("nom");
var txtPrenom = document.getElementById("prenom");
var txtCP = document.getElementById("cp");
var txtMail = document.getElementById("mail");
var selSuj = document.getElementById("suj");
var txtaQuestion = document.getElementById("question");
var txtDate = document.getElementById("naiss");
var estHomme = document.getElementById("Mas");
var estFemme = document.getElementById("Fem");

// Éléments span pour les messages d'erreur:
var msgNom = document.getElementById("spnNom");
var msgPrenom = document.getElementById("spnPrenom");
var msgGenre = document.getElementById("spnGenre");
var msgDate = document.getElementById("spnDate");
var msgCP = document.getElementById("spnCP");
var msgAdr = document.getElementById("spnMail");
var msgSuj = document.getElementById("spnSuj");
var msgQuest = document.getElementById("spnQuestion");
var msgGenre = document.getElementById("spnGenre");
var msgMail = document.getElementById("spnMail");
var msgDate = document.getElementById("spnDate");

//RegEx
var rxNP = /^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?:\-| |\')?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/; //regex pour les noms/prénoms
/*// Un code postal contient 5 nombres, sauf la corse qui peut contenir a ou b en second caractère, gère le cas de monaco et des dom-tom
var rxCP=/^(?:(?:(?:(?:[013-8]\d)|(?:2[\dabAB])|(?:9[0-5]))\d{3})|(?:(?:97[1-5]\d{2})|(?:98[06-8]\d{2})))$/;
 // Prise en charge des CP en 2a/2b pour la corse, pas de contrôle de validité du n° de département */
var rxCP = /^(?:(?:[013-9]\d)|(?:2[\dabAB]))\d{3}/;
// rxAdr contient : soit un groupe de chiffres éventuellement suivi d'une virgule et au moins 2 groupes avec espace et au moins une lettre, soit un groupe d'au moins une lettre suivi d'au moins un groupe constitué d'1 espace et d'au moins une lettre
var rxAdr = /^(?:\d+\,?(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+){2,}|(?:[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+)+))$/;
var rxMail = /^\w+[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]*@[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]+\.[a-zA-Z]+$/;
var rxDate = /^(?:\d\d?[\/\- ]\d\d?[\/\- ](?:\d\d)(?:\d\d)?)|(?:(?:\d\d)(?:\d\d)?[\/\- ]\d\d?[\/\- ]\d\d?)$/;