<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Repositories\BaseRepository;

/**
 * Class ContactRepository
 * @package App\Repositories
 * @version March 7, 2024, 8:47 am UTC
*/

class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'telprofile',
        'adresse',
        'sectioncv'
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
        return Contact::class;
    }
}
