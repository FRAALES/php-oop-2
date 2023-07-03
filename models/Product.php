<?php

class Product {

    public $nameProduct;
    public $priceProduct;
    public $typeProduct;

    public function __construct($nameProduct, $priceProduct, $typeProduct) {

        $this -> setNameProduct($nameProduct);
        $this -> setPriceProduct($priceProduct);
        $this -> setTypeProduct($typeProduct);
    }

    public function getNameProduct() {

        return $this -> nameProduct;
    }
    public function setNameProduct($nameProduct) {

        $this -> nameProduct = $nameProduct;
    }

    public function getPriceProduct() {

        return $this -> priceProduct;
    }
    public function setPriceProduct($priceProduct) {

        $this -> priceProduct = $priceProduct;
    }

    public function typeProduct() {

        return $this -> typeProduct;
    }
    public function setTypeProduct($typeProduct) {

        $this -> typeProduct = $typeProduct;
    }
}