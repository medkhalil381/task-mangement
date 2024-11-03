<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pro
 * @package App\Models
 * @version May 16, 2024, 8:36 am UTC
 *
 * @property string $nom
 * @property string $dexcription
 */
class pro extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pros';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'dexcription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'dexcription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'prix integer number',
        'dexcription' => 'date date date'
    ];

    
}
