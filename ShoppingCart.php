<?php

namespace MandyLin\NewCart;

class ShoppingCart
{
    protected $productList;  //array

    public function addProduct(Product $product)
    {
        $this->productList[] = $product;
        return true;
    }

    public function totalPrice()
    {
        $totalPrice = 0;
        if (count($this->productList)) {
            foreach ($this->productList as $product) {
                $totalPrice += $product->price;
            }
        }
        return $totalPrice;
    }

    public function totalProducts()
    {
        return count($this->productList);
    }
}