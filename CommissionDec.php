<?php

class CommissionDec extends SalaryDecorator
{
    public const PRICE = 50;

    public function calculatesalary(): int
    { 
        return $this->SalaryReceiving->calculatesalary() + self::PRICE;
    }
}