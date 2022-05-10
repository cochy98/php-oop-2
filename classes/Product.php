<?php

/**
 * Product
 */
class Product
{
  protected $name;
  protected $description;
  protected $price;
  protected $category;

  /**
   * Costruttore per instanziare un nuovo Product
   *
   * @param String $name -> Nome del prodotto
   * @param String $description -> Descrizione del prodotto
   * @param Float $price -> Prezzo del prodotto
   * @param String $category -> Categoria di appartenenza del prodotto
   */
  public function __construct($name, $description, $price, $category = null)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->category = $category;
  }

  /**
   * Metodo che restituisce il nome del prodotto
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Metodo che restituisce la descrizione del prodotto
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Metodo che restituisce il prezzo del prodotto
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Metodo che restituisce la categoria del prodotto
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Metodo per settare il nome del prodotto
   */
  public function setName($product_name)
  {
    $this->name = $product_name;
  }

  /**
   * Metodo per settare la descrizione del prodotto
   */
  public function setDescription($product_desc)
  {
    $this->description = $product_desc;
  }

  /**
   * Metodo per settare il prezzo del prodotto
   */
  public function setPrice($product_price)
  {
    $this->price = $product_price;
  }

  /**
   * Metodo per settare la categoria del prodotto
   */
  public function setCategory($product_category)
  {
    $this->category = $product_category;
  }
}
