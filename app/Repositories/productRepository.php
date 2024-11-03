<?php

namespace App\Repositories;

use App\Models\product;
use App\Repositories\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version May 16, 2024, 8:20 am UTC
*/

class productRepository extends BaseRepository
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
        return product::class;
    }
}
