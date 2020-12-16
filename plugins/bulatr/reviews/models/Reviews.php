<?php namespace Bulatr\Reviews\Models;

use Model;

/**
 * Model
 */
class Reviews extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bulatr_reviews_database';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /** Relations */
    public $belongsTo = [
        'id_productitem' => 'Lovata\shopaholic\Models\Product'
    ];

    public function registerFormWidgets()
    {
        return [
            'Bulatr\Reviews\FormWidgets\StarRating' => 'starrating',
        ];
    }
}
