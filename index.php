<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php
// ! Richiedo la classe Food, che a sua volta richiede 'Product'
require_once __DIR__ . '/classes/Food.php';

// ! Richiedo la classe User, che a sua volta richiede 'CreditCard'
require_once __DIR__ . '/classes/User.php';

// § Instanza di 'Product'
$guinzaglio = new Product('Guinzaglio', 'guinzaglio per cani di taglia media, fatto con materiali ecosostenibili', 10.00, 'accessori');
var_dump($guinzaglio);

// § Instanza di 'Food'
$croccantini = new Food('Croccantini', 'fantastici croccantini per i nosti amici a 4 zampe', 2.50, '2022-06-12', 'Manzo, Pollo');
var_dump($croccantini);

// § Instanza di 'Food'
$croccantini_vegani = new Food('Croccantini vegani', 'Croccantini di verdure per i nosti amici a 4 zampe', 4.50, '2022-12-12');
// | Utilizzo di un metodo della classe 'Food'
$croccantini_vegani->setIngredients('verdure miste');
var_dump($croccantini_vegani);

// ? Instanza di 'CreditCard'
$card = new CreditCard('4004-8800-2021-9982', '2025-01-12', 'VISA', 432, 30);
// ? Instanza di 'User', che dipende da 'CreditCard'
$utenteACaso = new User('Paolo', 'Bonolis', 'paolo80', 'paolo@gmail.com', $card, false);
var_dump($utenteACaso);

echo '</br>';

// § Effettuo la simulazione di un ordine, richiamo un metodo della classe 'User'
echo $utenteACaso->buyProduct($croccantini);

echo '</br>';

// § Stampo i dati dell'utente e della sua carta in seguito all'acquisto effettuato con successo
var_dump($utenteACaso);
?>
