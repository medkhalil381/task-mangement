<?php

namespace App\Repositories;

use App\Models\produitees;
use App\Repositories\BaseRepository;

/**
 * Class produiteesRepository
 * @package App\Repositories
 * @version May 16, 2024, 8:41 am UTC
*/

class produiteesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'prix',
        'description',
        'date'
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
        return produitees::class;
    }
}
