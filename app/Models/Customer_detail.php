<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_detail extends Model
{
    use HasFactory;

    public function getPolicyHolderDob1Attribute($value)
    {
        return date("m-d-Y", strtotime($value));
    }

    public function getPolicyHolderDob2Attribute($value)
    {
        return date("m-d-Y", strtotime($value));
    }

}
