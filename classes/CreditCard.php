<?php

class CreditCard
{
  protected $number;
  protected $expire_date;
  protected $circuit;
  protected $security_code;
  protected $balance;

  public function __construct($number, $expire_date, $circuit, $security_code, $balance)
  {
    $this->number = $number;
    $this->expire_date = $expire_date;
    $this->circuit = $circuit;
    $this->security_code = $security_code;
    $this->balance = $balance;
  }

  // da rendere piu efficiente, mostrare solo le ultime 4 cifre
  public function getNumber()
  {
    return $this->number;
  }

  public function getExpireDate()
  {
    return $this->expire_date;
  }

  public function getCircuit()
  {
    return $this->circuit;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function setExpireDate($expire_date)
  {
    $this->expire_date = $expire_date;
  }

  public function setCircuit($circuit)
  {
    $this->circuit = $circuit;
  }

  public function setSecurityCode($security_code)
  {
    $this->security_code = $security_code;
  }

  public function setBalance($balance)
  {
    $this->balance = $balance;
  }
}
