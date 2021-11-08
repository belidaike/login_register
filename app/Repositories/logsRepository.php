<?php

namespace App\Repositories;

use App\Models\logs;
use App\Repositories\BaseRepository;

/**
 * Class logsRepository
 * @package App\Repositories
 * @version November 8, 2021, 9:51 am UTC
*/

class logsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
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
        return logs::class;
    }
}
