<?php
    /*
     * Fonction mail :
     * mail(destinataire, objet, message, entêtes, paramètres);
     *  destinataire    : Adresse mail du destinataire
     *  objet           : Objet du mail
     *  message         : Corps de texte du message
     *  entêtes         : Tableau des paramètres optionnels (CC, BCC, FROM, ...)
     *                    Si la valeur passée est une chaîne, els données doivent
     *                    être séparées par \r\n
     *                    BCC 	Blind Carbon Copy, ou copie carbone cachée :
     * adresses mail des personnes recevant une copie du message; 
     * ces adresses sont masquéees par le destinataire. Attention, 
     * les logiciels antispam n'aiment pas.
     *                    CC 	Carbon Copy, ou copie carbone : adresses mail
     * des personnes recevant une copie du message; ces adresses sont visibles
     * par le destinataire. Attention, les logiciels antispam n'aiment pas.
     *                    Content-Type 	Type de contenu du mail, c'est-à-dire le format.
     *                    From 	Expéditeur du mail.
     *                    MIME-Version 	Version du type MIME,
     * toujours la valeur 1.0.
     *                    Reply-To 	Adresse mail de réponse au mail. Si non
     * indiquée, cette adresse sera celle de l'expéditeur spécifiée dans From.
     *                    X-Mailer 	Indique le logiciel, service ou langage
     * (par exmple la version de PHP) utilisé pour envoyer le mail. 
     *  paramètres      : Paramètres à passer au serveur mail
     */
?>