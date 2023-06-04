<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public $table="contacts";
    protected $fillable=[
        "id",
        "location",
        "number",
        "email",
        "text",
        "facebook",
        "twitter",
        "instgram",
        "youtube",
        "color"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}
