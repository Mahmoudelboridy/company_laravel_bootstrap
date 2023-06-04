<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roayt extends Model
{
    use HasFactory;
    public $table="roayts";
    protected $fillable=[
        "id",
        "image1",
        "image2",
        "title1",
        "title2",
        "text1"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
