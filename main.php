<?php

//1. Инкапсуляция - метод оборачивания кода в класс для изолированной работы с ним 
//и регулировки выборочного доступа к коду или реализованному функционалу для сторонних разработчиков.
//2. Объекты позволяют сделать код более аккуратным, упростить работу с кодом для разработчиков
//и также упросить возможность расширения кода.
//Из недостатков, наверное, изначальная реализация может оказаться сложнее и в больших проектах может быть сложная иерархия.

header("Content-Type: text/html; charset=utf-8");
class Car {
    private $make;
    private $model;
    private $dateOfManufacture;
    private $country;

    public function __construct ($make, $model, $dateOfManufacture, $country)
    {
        $this->make = $make;
        $this->model = $model;
        $this->dateOfManufacture = $dateOfManufacture;
        $this->country = $country;
    }

    public function __toString()
    {
        return 'Автомобиль '. $this->make . ' ' . $this->model . ' выпущен в ' . $this->dateOfManufacture.' году.'.' Страна производитель: '.$this->country.'</br>';
    }
}

class Tv {
    private $make;
    private $model;
    private $country;
    private $size;
    private $resolution;

    public function __construct ($make, $model, $country, $size, $resolution)
    {
        $this->make = $make;
        $this->model = $model;
        $this->country = $country;
        $this->size = $size;
        $this->resolution = $resolution;
    }

    public function __toString()
    {
        return 'Телевизор '. $this->make . ' ' . $this->model . ' с диагональю ' . $this->size . ' и форматом ' . $this->resolution.'.'.' Страна производитель: '.$this->country.'</br>';
    }

}

class BallPen {
    private $color;
    private $material;
    private $ball;

    public function __construct ($color, $material, $ball)
    {
        $this->color = $color;
        $this->material = $material;
        $this->ball = $ball;
    }

    public function __toString()
    {
        return ' Ручка шариковая, цвет: ' . $this->color . ', материал корпуса: ' . $this->material . ', диаметр шарика: ' . $this->ball.'.'.'</br>';
    }
}

class Duck {
    private $name;
    private $territory;
    private $weight;

    public function __construct ($name, $territory, $weight)
    {
        $this->name = $name;
        $this->territory = $territory;
        $this->weight = $weight;
    }

    public function __toString()
    {
        return 'Утка ' . $this->name . ' избрала своим ореолом обитания ' . $this->territory.'.'. ' Средний вес взрослой особи - '.$this->weight.'.'.'</br>';
    }
}

class Product {
    private $type;
    private $origin;
    private $price;

    public function __construct ($type, $origin, $price)
    {
        $this->type = $type;
        $this->origin = $origin;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->type . ', страна-производитель: ' . $this->origin . ' , стоимость одной шт.: ' . $this->price . ' руб.'.'</br>';
    }
}

$toyota2000 = new Car('Toyota', '2000GT', 1967, 'Япония');
echo $toyota2000;
$amcrebel = new Car('AMC', 'Rebel', 1967, 'США');
echo $amcrebel;
$samsung = new Tv ('Samsung', 'UE40M5000AU', 'Корея', '22"', '1080p');
echo $samsung;
$sony = new Tv ('Sony', 'X690E Series', 'Япония', '60"', '4k');
echo $sony;
$bluepen = new BallPen('синий', 'пластик', 0.3);
echo $bluepen;
$redpen = new BallPen('красный', 'металл', 0.7);
echo $redpen;
$mandarinka = new Duck ('мандаринская', 'Дальний Восток России', '0,6-0,9 кг');
echo $mandarinka;
$karoling = new Duck ('каролингская', 'леса США', 'до одного кг');
echo $karoling;
$tea = new Product('Чай, упак.', 'Япония', 1500);
echo $tea;
$soda = new Product('Содовая', 'Корея', 50);
echo $soda;
