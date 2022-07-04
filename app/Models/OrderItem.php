<?php


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OrderItem extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "order_item";

    public function order()
    {
        return $this->belongsTo(Order::class);
    }



}
