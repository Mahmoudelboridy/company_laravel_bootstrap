<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sabka extends Model
{
    use HasFactory;
    public $table="sabkas";
    protected $fillable=[
        "id",
        "image",
        "text"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
