<?php

namespace App\Repositories;

use App\Models\cat;
use App\Repositories\BaseRepository;

/**
 * Class catRepository
 * @package App\Repositories
 * @version February 29, 2024, 1:39 pm UTC
*/

class catRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'idP'
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
        return cat::class;
    }
}
