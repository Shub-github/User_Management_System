<?php

// namespace App\Models\;
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class record extends Model
{

    protected $table ='records';
    protected $fillable=[
        'name',
        'email',
        'experience',
        'image',
    ];
}
