<?php

namespace ES95;

class Car {

    protected $make='';
    protected $model='';

    public function __construct(string $make, string $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function drive() : void {
        echo "\nDriving";
    }

}