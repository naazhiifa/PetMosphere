<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetShop extends Model
{
    use HasFactory;

    protected $table = 'petshop';

    protected $fillable = ['Product','Price','Description'];
    protected $guarded = ['id'];


}
