<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    public $table="abouts";
    protected $fillable=[
        "id",
        "image",
        "text1",
        "text2"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
