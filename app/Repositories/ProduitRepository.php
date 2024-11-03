<?php

namespace App\Repositories;

use App\Models\Produit;
use App\Repositories\BaseRepository;

/**
 * Class ProduitRepository
 * @package App\Repositories
 * @version February 29, 2024, 1:04 pm UTC
*/

class ProduitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Title',
        'Description',
        'Montant',
        'Author ID'
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
        return Produit::class;
    }
}
