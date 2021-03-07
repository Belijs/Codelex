<?php

class Account
{
    public int $balance;
    public string $name;

    public function __construct(string $name, int $balance)
    {
        $this->balance = $balance;
        $this->name = $name;
    }

    public function withdraw($amount)
    {
        $this->balance = $this->balance - $amount;
    }

    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
    }

    public function showAccount()
    {
        echo 'Account: ' . $this->name . ', Balance: ' . $this->balance . PHP_EOL;
    }

    public function transfer($from, $to, int $howMuch)
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }
}

// Create a program that creates an account with the balance of 100.0, deposits 20.0 and prints the account.
$testAccount = new Account('Carl', 100);
$testAccount->deposit(20);
$testAccount->showAccount();
echo PHP_EOL;

// Create Matts(1000) and my(0) account. Withdraw 100 from Matt to mine.
$mattAccount = new Account('Matt', 1000);
$myAccount = new Account('Me', 0);
$mattAccount->withdraw(100);
$myAccount->deposit(100);
$mattAccount->showAccount();
$myAccount->showAccount();
echo PHP_EOL;

// The method transfers money from one account to another.  A, B, C.

$accountA = new Account('A', 100);
$accountB = new Account('B', 0);
$accountC = new Account('C', 0);

$accountA->transfer($accountA, $accountB, 50);
$accountB->transfer($accountB, $accountC, 25);

$accountA->showAccount();
$accountB->showAccount();
$accountC->showAccount();