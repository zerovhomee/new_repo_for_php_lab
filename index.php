<?php

require 'vendor/autoload.php';

use App\MagicClass; // используем наш мэджик класс из пространства имен апп

//$magic = new MagicClass(); // создаем экземпляр класса

class Point{
    public $x;
    public $y;
     // Конструктор для инициализации координат
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод для переноса точки по оси X
    public function moveX($distance) {
        $this->x += $distance;
    }

    // Метод для переноса точки по оси Y
    public function moveY($distance) {
        $this->y += $distance;
    }
    // Метод для переноса точки по вектору
    public function moveByVector($vector) {
        $this->moveX($vector->x);
        $this->moveY($vector->y);
    }
    public function displayPosition() {
        echo "Точка находится в ({$this->x}, {$this->y})\n";
    }

}
class Vector {
    public $x;
    public $y;

    // Конструктор для инициализации координат
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод для определения длины вектора
    public function length() {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    // Метод для проверки, является ли вектор нулевым
    public function isZero() {
        return $this->x == 0 && $this->y == 0;
    }

    // Метод для проверки перпендикулярности с другим вектором
    public function isPerpendicularTo(Vector $other) {
        // Векторы перпендикулярны, если их скалярное произведение равно нулю
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }
}
//  Создание точки с произвольными координатами T1
$T1 = new Point(2, 5);
echo "T1: ";
$T1->displayPosition();


//  Создание произвольного вектора V1
$V1 = new Vector(3, 4);
echo "Длина V1: " . $V1->length() . "\n";

//  Создание нулевого вектора V2
$V2 = new Vector();
echo "Длина V2: " . $V2->length() . "\n";
echo "V2 нулевой вектор? " . ($V2->isZero() ? "Да" : "Нет") . "\n";

//  Создание вектора V3, перпендикулярного V1
$V3 = new Vector(-4, 3); // Вектор, перпендикулярный V1 (3, 4)
echo "Длина V3: " . $V3->length() . "\n";

//  Проверка, что V3 и V1 перпендикулярны
echo "V1 и V3 перпендикулярны? " . ($V1->isPerpendicularTo($V3) ? "Да" : "Нет") . "\n";

//  Перенос точки T1 на вектор V1
$T1->moveByVector($V1);
echo "Позиция T1 после переноса на  V1: ";
$T1->displayPosition();