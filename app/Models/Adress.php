<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'street',
        'number_home',
        'number_entrance',
        'number_apartment',
        'full_adress',
        'index',

    ];




}
