<?php

class BankAccount
{
    public string $name;
    public int $balance;

    public function __construct(string $name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance * 100;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance < 0) {
            return $this->name . ', -$' . abs(number_format($this->balance, 2, '.', '')) / 100;
        }
        return $this->name . ', $' . abs(number_format($this->balance, 2, '.', '')) / 100;
    }
}

$ben = new BankAccount('Benson', 44.4557);
$rup = new BankAccount('Rupert', -29);

echo $ben->showUserNameAndBalance() . PHP_EOL;
echo $rup->showUserNameAndBalance() . PHP_EOL;