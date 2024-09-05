<?php

// 1. Работа со строками
// Преобразование строки в верхний регистр
$string = "hello world";
$uppercaseString = strtoupper($string); // Преобразует "hello world" в "HELLO WORLD"
echo "Uppercase: $uppercaseString\n";

// Форматирование строки с использованием переменных
$name = "Alice";
$greeting = "Hello, $name!"; // Вставляет значение переменной $name в строку
echo "$greeting\n";

// 2. Работа с массивами
// Создание массива с использованием современного синтаксиса
$array = [1, 2, 3, 4, 5];
$array[] = 6; // Добавляет элемент 6 в массив
echo "Array: ";
print_r($array); // Выводит весь массив

// Поиск элемента в массиве
$searchElement = 3;
if (in_array($searchElement, $array)) {
    echo "Element $searchElement found in array.\n"; // Проверка наличия элемента в массиве
} else {
    echo "Element $searchElement not found in array.\n";
}

// Использование функции array_map для преобразования значений массива
$squares = array_map(fn($n) => $n ** 2, $array); // Возводит каждый элемент массива в квадрат
echo "Squares: ";
print_r($squares);

// 3. Работа с датами и временем
// Получение текущей даты и времени
$currentDateTime = new DateTime(); // Создание объекта DateTime с текущей датой и временем
echo "Current date and time: " . $currentDateTime->format('Y-m-d H:i:s') . "\n";

// Изменение времени
$currentDateTime->modify('+1 day'); // Увеличивает дату на 1 день
echo "Date and time after one day: " . $currentDateTime->format('Y-m-d H:i:s') . "\n";

// 4. Работа с файлами
// Запись данных в файл
$file = 'example.txt';
$content = "This is a sample text.";
file_put_contents($file, $content); // Записывает текст в файл example.txt

// Чтение данных из файла
$readContent = file_get_contents($file); // Читает содержимое файла
echo "File content: $readContent\n";

// Удаление файла
unlink($file); // Удаляет файл example.txt
echo "File $file has been deleted.\n";

// 5. Обработка ошибок
// Попытка открыть несуществующий файл
$nonExistentFile = 'nonexistent.txt';
if (!file_exists($nonExistentFile)) {
    echo "Error: File $nonExistentFile does not exist.\n"; // Проверка существования файла
}

// 6. Использование стрелочных функций (fn)
$numbers = [1, 2, 3, 4, 5];
$squares = array_map(fn($n) => $n ** 2, $numbers); // Возводит каждый элемент массива в квадрат
echo "Squares: ";
print_r($squares);

// 7. Работа с ассоциативными массивами
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john.doe@example.com'
];
echo "Name: " . $person['name'] . "\n"; // Выводит имя
echo "Age: " . $person['age'] . "\n"; // Выводит возраст
echo "Email: " . $person['email'] . "\n"; // Выводит email

?>
