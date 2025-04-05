<?php

require_once __DIR__ . '/../vendor/autoload.php';

class BankAccount
{

    // Immutability and best practices.
    private float $balance = 0;
    private String $accountHolderName = "AndreVsc";

    // Tell, Don’t Ask principle
    public function deposit(float $amount): string
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return "\n Amount deposited: " . $amount . " \n Current balance: " . $this->balance;
        }
        return "\n Invalid deposit amount.";
    }

    public function withdraw(float $amount): string
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "\n Amount withdrawn: " . $amount . " \n Current balance: " . $this->balance;
        }
        return "\n Insufficient balance or invalid amount.";
    }

    // Getters and Setters
    public function getAccountHolderName(): string
    {
        return "\n Name: " . $this->accountHolderName;
    }

    public function setAccountHolderName(string $accountHolderName)
    {
        $this->accountHolderName = $accountHolderName;
        return "\n New name: " . $accountHolderName;
    }
}
$account = new BankAccount();
// account.balance = 9999; Immutability and best practices.

// Tell, Don’t Ask principle
print($account->deposit(100));
print($account->deposit(100));
print($account->withdraw(200));

// Getters and Setters
print($account->getAccountHolderName());
print($account->setAccountHolderName("NewName"));
