<?php

namespace App\Repositories;

use App\Models\CV;
use App\Repositories\BaseRepository;

/**
 * Class CVRepository
 * @package App\Repositories
 * @version March 7, 2024, 8:45 am UTC
*/

class CVRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'experience',
        'competance',
        'section',
        'nomprofile'
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
        return CV::class;
    }
}
