<?php
class BankAccount 
{
  private $balance;
  public function deposit($amount) 
  {
    $this->balance += $amount;
  }
  public function withdraw($amount) 
  {
    if ($this->balance >= $amount) {
      $this->balance -= $amount;
    } 
    else {
      throw new Exception("Insufficient funds.");
    }
  }
  public function getBalance() 
  {
    return $this->balance;
  }
}
?>

