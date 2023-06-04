<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shahda extends Model
{
    use HasFactory;
    public $table="shahdas";
    protected $fillable=[
        "id",
        "image",
        "title",
        "code"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
