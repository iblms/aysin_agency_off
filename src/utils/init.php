<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

require_once __DIR__ . '/common.php';
require_once __DIR__ . '/db.php';

// config du site
$existing_pages = ['accueil', 'expertises', 'contact', 'login', 'register', 'catalogue', 'personnalisation', 'success'];

// les classes
require_once __DIR__ . "../../class/DbManager.php";

$BDD = new DbManager($db);


// tous les utilitaires
require_once __DIR__ . '../../error.php';