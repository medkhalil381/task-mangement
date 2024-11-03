<?php

namespace App\Repositories;

use App\Models\pro;
use App\Repositories\BaseRepository;

/**
 * Class proRepository
 * @package App\Repositories
 * @version May 16, 2024, 8:36 am UTC
*/

class proRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'dexcription'
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
        return pro::class;
    }
}
