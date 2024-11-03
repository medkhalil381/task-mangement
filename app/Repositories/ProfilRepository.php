<?php

namespace App\Repositories;

use App\Models\profil;
use App\Repositories\BaseRepository;

/**
 * Class profilRepository
 * @package App\Repositories
 * @version March 7, 2024, 11:38 am UTC
*/

class profilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'prenom',
        'age'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return profil::class;
    }
}
