<?php

namespace Teamleader\Entities\Products;

use Teamleader\Actions\FindAll;
use Teamleader\Actions\FindById;
use Teamleader\Actions\Storable;
use Teamleader\Model;

class Product extends Model
{
    use FindAll;
    use Storable;
    use FindById;

    const TYPE = 'product';

    protected $fillable = [
        'id',
        'name',
        'description', // { "type": "", "id" : "" }
        'code',
        'purchase_price',
        'selling_price',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'products';
}
