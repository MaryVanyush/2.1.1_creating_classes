<?php

class Car {
    private $brand;
    private $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getCarInfo() {
        return "Машина: {$this->brand} {$this->model}.";
    }

    public function setModel($model) {
        $this->model = $model;
    }
}
