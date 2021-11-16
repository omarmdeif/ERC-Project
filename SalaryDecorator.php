<?php

abstract class SalaryDecorator implements SalaryReceive 
{
    public SalaryReceive $SalaryReceiving;
    public function __construct(SalaryReceive $salaryReceiving)
    {
        $this->SalaryReceiving = $salaryReceiving;
    }
}