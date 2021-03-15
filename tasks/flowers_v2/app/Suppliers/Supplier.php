<?php
namespace App;

interface Supplier
{
    public function products(): ProductCollection;
}