<?php

	
    mail('ghizlane.afriad@gmail.com',
	
         'Confirmation d\'inscription',
	
         'Bienvenue sur Jarditou ! Tu peux y acheter des tomates cerises pour l\'apéro et une brouette pour les transporter. Sors vite ton American Express !',
	
         array('MIME-Version' => '1.0',
               'Content-Type' => 'text/html; charset=utf-8',
             'From' => 'elqerouani@gmail.com',
	
        
	
                'X-Mailer' => 'PHP/' . phpversion()
	
                )
	
        );
	?>