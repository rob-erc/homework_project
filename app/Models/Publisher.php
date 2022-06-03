<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'number_of_employees',
        'is_european'
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'number_of_employees' => 'required|numeric',
        'is_european' => 'boolean'
    ];

}
