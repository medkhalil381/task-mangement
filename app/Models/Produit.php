<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
   

    use HasFactory;
    public $incrementing = false;

    public $fillable = [
        'Title',
        'Description',
        'Montant',
        'Author ID',
        'Action'
    ];

}
