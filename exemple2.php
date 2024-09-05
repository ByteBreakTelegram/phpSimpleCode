<?php

// 1. Работа со строками
$string = "hello world";

// Преобразование строки в верхний регистр
$uppercaseString = strtoupper($string); // Преобразует "hello world" в "HELLO WORLD"
echo "Uppercase: $uppercaseString\n";

// Разделение строки на массив слов
$words = explode(' ', $string); // Преобразует "hello world" в массив ["hello", "world"]
echo "Words: ";
print_r($words);

// Замена части строки
$replacedString = str_replace('world', 'PHP', $string); // Заменяет "world" на "PHP"
echo "Replaced: $replacedString\n";

// 2. Работа с массивами
$array = [1, 2, 3, 4, 5];

// Добавление элемента в массив
$array[] = 6; // Добавляет элемент 6 в массив
echo "Array: ";
print_r($array);

// Поиск элемента в массиве
$searchElement = 3;
if (in_array($searchElement, $array)) {
    echo "Element $searchElement found in array.\n";
} else {
    echo "Element $searchElement not found in array.\n";
}

// Сортировка массива
sort($array); // Сортирует массив в порядке возрастания
echo "Sorted Array: ";
print_r($array);

// Фильтрация массива
$filteredArray = array_filter($array, fn($value) => $value > 3); // Оставляет только значения больше 3
echo "Filtered Array: ";
print_r($filteredArray);

// 3. Работа с датами
use Carbon\Carbon;

// Получение текущей даты и времени с помощью Carbon
$currentDateTime = Carbon::now()->format('Y-m-d H:i:s'); // Формат даты: ГГГГ-ММ-ДД ЧЧ:ММ:СС
echo "Current date and time: $currentDateTime\n";

// Вычисление разницы между двумя датами
$date1 = Carbon::create(2024, 9, 1);
$date2 = Carbon::now();
$diff = $date1->diffInDays($date2); // Разница в днях
echo "Difference in days: $diff\n";

// 4. Работа с файлами
$file = 'example.txt';
$content = "This is a sample text.";

// Запись данных в файл
file_put_contents($file, $content);

// Чтение данных из файла
$readContent = file_get_contents($file);
echo "File content: $readContent\n";

// Удаление файла
if (file_exists($file)) {
    unlink($file); // Удаляет файл
    echo "File deleted.\n";
} else {
    echo "Error: File does not exist.\n";
}

// 5. Обработка ошибок
// Попытка деления на ноль
try {
    $result = intdiv(10, 0); // Деление на ноль
} catch (DivisionByZeroError $e) {
    echo "Error: Division by zero.\n"; // Обработка исключения деления на ноль
}

?>
