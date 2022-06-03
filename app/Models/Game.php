<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'developer_id'
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'developer_id' => 'required|exists:developers,id'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
