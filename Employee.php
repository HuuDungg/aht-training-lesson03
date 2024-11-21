<?php

class Employee extends Person
{
    private $jobPosition;
    protected $salary;

    public function __construct($firstName, $lastName, $dateOfBirth, $address, $jobPosition, $salary)
    {
        parent::__construct($firstName, $lastName, $dateOfBirth, $address);
        $this->jobPosition = $jobPosition;
        $this->salary = $salary;
    }

    public function getJobPosition()
    {
        return $this->jobPosition;
    }

    public function setJobPosition($jobPosition)
    {
        $this->jobPosition = $jobPosition;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function toArray()
    {
        return [
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'dateOfBirth' => $this->getDateOfBirth(),
            'address' => $this->getAddress(),
            'jobPosition' => $this->jobPosition,
            'salary' => $this->salary
        ];
    }

    public static function fromArray($data)
    {
        return new self(
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['address'],
            $data['jobPosition'],
            $data['salary']
        );
    }
}
