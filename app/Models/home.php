<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    public $table="homes";
    protected $fillable=[
        "id",
        "image",
        "title1",
        "title2",
        "text1",
        "text2"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
