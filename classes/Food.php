<?php
require_once __DIR__ . '/Product.php';
/**
 * Food
 */
class Food extends Product
{
  protected $expiration_date;
  protected $ingredients;

  /**
   * Construct per inizializzare una nuova instanza di Food. 
   * Da notare che tra gli argomenti non c'è 'category', infatti esso viene valorizzato di default a 'food'.
   *
   * @param String $name -> Nome del prodotto
   * @param String $description -> Descrizione del prodotto
   * @param Float $price -> Prezzo del prodotto
   * @param String $expiration_date -> Data di scadenza del prodotto
   * @param String $ingredients -> Ingredienti del prodotto
   */
  public function __construct($name, $description, $price, $expiration_date, $ingredients = null)
  {
    // Setto  dei valori per il costruttore del parent (Product)
    parent::__construct($name, $description, $price, 'Food');
    $this->expiration_date = $expiration_date;
    $this->ingredients = $ingredients;
  }

  /**
   * Metodo che controlla la lista degli ingredienti del Food.
   *
   * @return $this->ingredients -> restituisce la lista degli ingredienti, un messaggio di testo altrimenti.
   */
  public function getIngredients()
  {
    if ($this->ingredients  == '' || $this->ingredients  == 'null') {
      return 'Nessuna informazione disponibile per questo prodotto';
    }
    return $this->ingredients;
  }

  /**
   * Metodo per settare la lista degli ingredienti del Food
   *
   * @param String $ingredients -> Lista ingredienti da aggiungere
   */
  public function setIngredients($ingredients)
  {
    $this->ingredients = $ingredients;
  }
}
