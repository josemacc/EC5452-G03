<?php

namespace App\Repositories;

use App\Models\Course;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CourseRepository
 * @package App\Repositories
 * @version October 7, 2019, 1:04 pm UTC
 *
 * @method Course findWithoutFail($id, $columns = ['*'])
 * @method Course find($id, $columns = ['*'])
 * @method Course first($columns = ['*'])
*/
class CourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'about_instructor',
        'discount_price',
        'actual_price',
        'playlist_url',
        'view_count',
        'subscriber_count',
        'status',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Course::class;
    }
}
