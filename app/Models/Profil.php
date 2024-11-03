<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class profil
 * @package App\Models
 * @version March 7, 2024, 11:38 am UTC
 *
 * @property string $nom
 * @property string $prenom
 * @property integer $age
 */
class profil extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'profils';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'age'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'prenom' => 'string',
        'age' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
