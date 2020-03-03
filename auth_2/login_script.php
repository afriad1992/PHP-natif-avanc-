<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
isset($_SESSION['auth'])?header('location: ok.html'):header('location: login_form.php');
