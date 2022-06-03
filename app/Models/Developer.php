<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'number_of_developers',
        'publisher_id'
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'number_of_developers' => 'required|numeric',
        'publisher_id' => 'required|exists:publishers,id'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
