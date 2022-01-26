<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function show()
    {
        return $this->hasOne('App\Models\Customer_detail', 'customer_id');
    }

    public function priceList()
    {
        return $this->hasOne('App\Models\testList', 'name','test_type');
    }
}
