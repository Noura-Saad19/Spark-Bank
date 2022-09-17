<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Transfer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'sender_email',
        'receiver_email' ,
        'transferred_amount',
        'sender_balance',
        'receiver_balance',
        'status',
        'created_at',
        'updated_at',
    ];


}
