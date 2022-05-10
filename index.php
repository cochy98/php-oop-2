<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Buon lavoro a tutte e a tutti! :laptop_parrot: -->

<?php
require_once __DIR__ . '/classes/Product.php';

$guinzaglio = new Product('Guinzaglio', 'guinzaglio per cani di taglia media, fatto con materiali ecosostenibili', 10.00, 'accessori');

var_dump($guinzaglio);

?>
