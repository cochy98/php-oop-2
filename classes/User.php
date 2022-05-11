<?php
include_once __DIR__ . '/CreditCard.php';

class User
{
  protected $first_name;
  protected $last_name;
  protected $username;
  protected $email;
  protected $credit_card;
  protected $is_registered;
  protected $discount;

  public function __construct($first_name, $last_name, $username, $email, $credit_card = null, $is_registered = false)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->username = $username;
    $this->email = $email;
    $this->credit_card = $this->setCreditCard($credit_card);
    $this->is_registered = $is_registered;
    $this->discount = $this->setDiscount();
  }

  /**
   * Metodo che setta la percentuale di sconto per l'utente, a seconda se è  registrato o meno
   */
  private function setDiscount()
  {
    return ($this->is_registered) ? $this->discount = 20 : $this->discount = 0;
  }

  /**
   * Metodo che restituisce la percentuale di sconto per l'utente corrente
   */
  public function getDiscount()
  {
    return 'Hai il ' . $this->discount . '% di sconto';
  }

  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;
  }

  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getFullName()
  {
    return $this->first_name . ' ' . $this->last_name;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setCreditCard($credit_card)
  {
    if ($credit_card instanceof CreditCard) {
      return $this->credit_card = $credit_card;
    }
  }

  public function getCreditCard()
  {
    return $this->credit_card;
  }

  public function setIsRegistered($is_registered)
  {
    $this->is_registered = $is_registered;
  }

  public function getIsRegistered()
  {
    return $this->is_registered;
  }


  public function buyProduct($product)
  {
    /**
     * 1) controllare se l'utente è registrato e che quindi ha diritto allo sconto
     * 2) controllare che la carta di credito dell'utente non sia scaduta è che il saldo sia sufficiente per l'acquisto, successivamente aggiornare il nuovo saldo sulla carta.
     */

    $price = 0;
    // | Se presente una percentuale di sconto per l'utente
    if ($this->discount > 0) {
      // | Calcolo lo sconto per il prodotto
      $price = $product->getPrice() - (($product->getPrice() * $this->discount) / 100);
    } else {
      // | Altrimenti memorizzo il prezzo intero
      $price = $product->getPrice();
    }

    // § Se la carta non è scaduta e il saldo è maggiore al costo del prodotto
    if (($this->credit_card->getExpireDate() > date('Y')) && ($this->credit_card->getBalance() >= $price)) {
      // § Memorizzo il nuovo saldo in una variabile di comodo
      $new_balance = $this->credit_card->getBalance() - $price;
      // § Aggiorno il saldo della carta e mostro un messaggio di successo
      $this->credit_card->setBalance($new_balance);
      return 'Acquisto effettuato con successo';
    }

    // § Altrimenti una delle due condizioni è errata, mostro un messaggio di errore
    return 'Modificare le opzioni di pagamento, impossibile effettuare l\'acquisto!';
  }
}
