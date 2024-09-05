<?php

// 1. Определение базового класса
class Person {
    private string $name;
    private int $age;

    // Конструктор класса
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Геттер для имени
    public function getName(): string {
        return $this->name;
    }

    // Геттер для возраста
    public function getAge(): int {
        return $this->age;
    }

    // Метод для получения полного описания
    public function getDescription(): string {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }
}

// 2. Определение класса-наследника
class Employee extends Person {
    private string $position;

    // Конструктор класса-наследника
    public function __construct(string $name, int $age, string $position) {
        parent::__construct($name, $age); // Вызов конструктора базового класса
        $this->position = $position;
    }

    // Геттер для позиции
    public function getPosition(): string {
        return $this->position;
    }

    // Переопределение метода базового класса
    public function getDescription(): string {
        return parent::getDescription() . ", Position: " . $this->position;
    }
}

// 3. Использование классов
// Создание объекта класса Person
$person = new Person("Alice", 30);
echo $person->getDescription() . "\n"; // Выводит описание человека

// Создание объекта класса Employee
$employee = new Employee("Bob", 40, "Developer");
echo $employee->getDescription() . "\n"; // Выводит описание сотрудника

// 4. Полиморфизм через интерфейсы
interface Payable {
    public function getSalary(): float;
}

class Contractor implements Payable {
    private float $hourlyRate;
    private int $hoursWorked;

    public function __construct(float $hourlyRate, int $hoursWorked) {
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function getSalary(): float {
        return $this->hourlyRate * $this->hoursWorked; // Рассчитывает зарплату
    }
}

// Использование интерфейса
$contractor = new Contractor(50.0, 160);
echo "Contractor Salary: $" . $contractor->getSalary() . "\n";

?>
