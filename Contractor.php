<?php

require_once 'Person.php';

class Contractor extends Person
{
    private $contractPeriod;
    private $hourlyRate;

    public function __construct($firstName, $lastName, $dateOfBirth, $address, $contractPeriod, $hourlyRate)
    {
        parent::__construct($firstName, $lastName, $dateOfBirth, $address);
        $this->contractPeriod = $contractPeriod;
        $this->hourlyRate = $hourlyRate;
    }

    public function getContractPeriod()
    {
        return $this->contractPeriod;
    }

    public function setContractPeriod($contractPeriod)
    {
        $this->contractPeriod = $contractPeriod;
    }

    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }

    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }

    public function toArray()
    {
        return [
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'dateOfBirth' => $this->getDateOfBirth(),
            'address' => $this->getAddress(),
            'contractPeriod' => $this->contractPeriod,
            'hourlyRate' => $this->hourlyRate
        ];
    }

    public static function fromArray($data)
    {
        return new self(
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['address'],
            $data['contractPeriod'],
            $data['hourlyRate']
        );
    }
}
