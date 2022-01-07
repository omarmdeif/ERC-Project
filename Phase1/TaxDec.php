<?php

class TaxDec extends SalaryDecorator
{
    public const Tax = 50;

    public function calculatesalary(): int
    { 
        return $this->SalaryReceiving->calculatesalary() - self::Tax;
    }
}