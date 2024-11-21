<?php
require_once 'Person.php';
require_once 'Employee.php';
require_once 'EmployeeManager.php';

$manager = new EmployeeManager();
$filename = 'employees.json';

$employee1 = new Employee("Nguyen", "Van A", "1990-01-01", "Hanoi", "Developer", 2000);
$employee2 = new Employee("Tran", "Thi B", "1985-03-15", "HCMC", "Designer", 2500);
$manager->addEmployee($employee1);
$manager->addEmployee($employee2);

echo "Danh sách nhân sự:\n";
$manager->displayEmployeeList();

echo "\nChi tiết nhân sự thứ 1:\n";
$manager->getEmployeeDetails(0);

$manager->saveToFile($filename);
echo "\nDanh sách đã được lưu vào file.\n";

$manager->loadFromFile($filename);
echo "\nDanh sách sau khi tải lại từ file:\n";
$manager->displayEmployeeList();
