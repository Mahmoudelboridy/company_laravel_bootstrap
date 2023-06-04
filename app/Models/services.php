<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    public $table="services";
    protected $fillable=[
        "id",
        "text",
        "image",

        "image1",
        "title1",
        "text1",

        "image2",
        "title2",
        "text2",

        "image3",
        "title3",
        "text3",

        "image4",
        "title4",
        "text4",

        "image5",
        "title5",
        "text5",

        "image6",
        "title6",
        "text6"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
