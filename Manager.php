<?php

require_once 'Employee.php';

class Manager extends Employee
{
    private $team = [];

    public function addTeamMember(Employee $employee)
    {
        $this->team[] = $employee;
    }

    public function removeTeamMember($index)
    {
        if (isset($this->team[$index])) {
            array_splice($this->team, $index, 1);
        }
    }

    public function displayTeam()
    {
        echo "Danh sách thành viên nhóm của " . $this->getFirstName() . " " . $this->getLastName() . ":\n";
        foreach ($this->team as $index => $member) {
            echo ($index + 1) . ". " . $member->getFirstName() . " " . $member->getLastName() . "\n";
        }
    }

    public function toArray()
    {
        $data = parent::toArray();
        $data['team'] = array_map(function ($member) {
            return $member->toArray();
        }, $this->team);
        return $data;
    }

    public static function fromArray($data)
    {
        $manager = new self(
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['address'],
            $data['jobPosition'],
            $data['salary']
        );
        foreach ($data['team'] as $memberData) {
            $manager->addTeamMember(Employee::fromArray($memberData));
        }
        return $manager;
    }
}
