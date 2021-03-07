<?php

class SavingAccount
{
    public int $balance;
    public int $monthlyDeposit = 0;
    public int $monthlyWithdraw = 0;
    public int $interestRateEarned = 0;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function addDeposit(int $enterDeposit): int
    {
        return $this->monthlyDeposit = $this->monthlyDeposit + $enterDeposit;
    }

    public function getDeposit(): int
    {
        return $this->monthlyDeposit;
    }

    public function addWithdraw(int $enterWithdraw): int
    {
        return $this->monthlyWithdraw = $this->monthlyWithdraw + $enterWithdraw;
    }

    public function getWithdraw(): int
    {
        return $this->monthlyWithdraw;
    }

    public function calculateRate(int $enterRate): float
    {
        return $this->interestRateEarned = ($this->interestRateEarned + ($enterRate / 12) * $this->endingBalance()) / 100;
    }

    public function getRateEarned(): int
    {
        return $this->interestRateEarned;
    }

    public function endingBalance(): int
    {
        return $this->balance + $this->getDeposit() - $this->getWithdraw() + $this->getRateEarned();
    }
}

$enterBalance = intVal(readline('How much money is in the account?: '));
$myAccount = new SavingAccount($enterBalance);
$enterRate = intVal(readline('Enter the annual interest rate: '));
$enterTime = intVal(readline('How many months has the account been opened? '));

for ($i = 1; $i <= $enterTime; $i++) {

    $enterDeposit = intVal(readline('Enter amount deposited for month: ' . $i . ' : ')) . PHP_EOL;
    $enterWithdraw = intVal(readline('Enter amount withdrawn for month ' . $i . ' : ')) . PHP_EOL;

    $myAccount->addDeposit($enterDeposit);
    $myAccount->addWithdraw($enterWithdraw);
    $myAccount->calculateRate($enterRate);
    $myAccount->endingBalance();
}

echo 'Total deposited: ' . $myAccount->getDeposit() . PHP_EOL;
echo 'Total withdrawn: ' . $myAccount->getWithdraw() . PHP_EOL;
echo 'Interest earned: ' . $myAccount->getRateEarned() . PHP_EOL;
echo 'Ending balance: ' . $myAccount->endingBalance() . PHP_EOL;