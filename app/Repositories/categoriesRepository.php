<?php

namespace App\Repositories;

use App\Models\categories;
use App\Repositories\BaseRepository;

/**
 * Class categoriesRepository
 * @package App\Repositories
 * @version February 29, 2024, 1:33 pm UTC
*/

class categoriesRepository extends BaseRepository
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
        return categories::class;
    }
}
