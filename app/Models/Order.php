<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tt_orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'status_id',
    ];


}
