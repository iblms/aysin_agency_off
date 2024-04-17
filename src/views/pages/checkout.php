<?php

require_once __DIR__ .'/vendor/autoload.php'; // Inclusion du fichier autoload.php pour charger les classes de Stripe

$stripe_secret_key = "sk_test_51P6KxnDbDjUdn3et6EBa1XMRcdYF8raSWkn10focRMAzomNbTU3TKE01TXLYePoofyBzkpasa3MM8Aws4vYOXfEa00hoMtDOPJ";

\Stripe\Stripe::setApiKey($stripe_secret_key); // Configuration de la clé secrète de l'API Stripe

// Création de la session de paiement Checkout
$checkout_session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'success_url' => 'http://localhost:8888/aysin_agency_off/www/?p=success', // URL de redirection en cas de succès
    'line_items' => [
        'quantity' => 1,
        'price_data' => [
            'currency' => 'EUR', // Devise utilisée
            'product_data' => [
                'name' => $infoCatalogue['product_name'] // Nom du produit à afficher dans Stripe récupéré en BDD
            ],
            'unit_amount' => $infoCatalogue['product_price'] // Prix du produit à afficher dans Stripe récupéré en BDD
        ]
    ]
]);

http_response_code(303); // Code de réponse HTTP à 303 pour indiquer que la réponse doit être traitée ailleurs
header("Location: " . $checkout_session->url); // Redirection vers l'URL de la session de paiement Stripe

?>