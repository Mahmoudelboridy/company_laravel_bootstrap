<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navbar extends Model
{
    use HasFactory;
    public $table="navbars";
    protected $fillable=[
        "id",
        "logo_image"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
