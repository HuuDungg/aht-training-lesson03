<?php

class EmployeeManager
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function displayEmployeeList()
    {
        foreach ($this->employees as $index => $employee) {
            echo ($index + 1) . ". " . $employee->getFirstName() . " " . $employee->getLastName() . "\n";
        }
    }

    public function getEmployeeDetails($index)
    {
        if (isset($this->employees[$index])) {
            $employee = $this->employees[$index];
            echo "Họ tên: " . $employee->getFirstName() . " " . $employee->getLastName() . "\n";
            echo "Ngày sinh: " . $employee->getDateOfBirth() . "\n";
            echo "Địa chỉ: " . $employee->getAddress() . "\n";
            echo "Vị trí công việc: " . $employee->getJobPosition() . "\n";
            echo "Lương: " . $employee->getSalary() . "\n";
        } else {
            echo "Nhân sự không tồn tại.\n";
        }
    }

    public function saveToFile($filename)
    {
        $data = array_map(function ($employee) {
            return $employee->toArray();
        }, $this->employees);

        file_put_contents($filename, json_encode($data));
    }

    public function loadFromFile($filename)
    {
        if (file_exists($filename)) {
            $data = json_decode(file_get_contents($filename), true);
            $this->employees = array_map(function ($item) {
                return Employee::fromArray($item);
            }, $data);
        } else {
            echo "File không tồn tại.\n";
        }
    }
}
