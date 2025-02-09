<?php

namespace App\Repositories;

use App\Models\View;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ViewRepository
 * @package App\Repositories
 * @version October 7, 2019, 1:06 pm UTC
 *
 * @method View findWithoutFail($id, $columns = ['*'])
 * @method View find($id, $columns = ['*'])
 * @method View first($columns = ['*'])
*/
class ViewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'item_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return View::class;
    }
}
