<?php
// src/Controller/Products.php
namespace App\Entity;

use App\Traits\CreateFromArray;
use App\Traits\Fillable;

class Product
{
    use Fillable;

    public function __construct()
    {
        $this->fillable = [
            'productId',
            'productName',
            'unitPrice',
            'imageUrl',
            'quantity',
        ];
    }

    public $productId;
    public $productName;
    public $unitPrice;
    public $imageUrl;
    public $quantity;
}
