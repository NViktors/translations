<?php

namespace Netcore\Translator\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * Override primary key
     *
     * @var boolean
     */
    protected $primaryKey = 'iso_code';

    /**
     * Is primary key incrementing?
     *
     * @var boolean
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'title_localized',
        'iso_code',
        'is_fallback',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @param $value
     */
    public function setIsoCodeAttribute($value)
    {
        $this->attributes['iso_code'] = strtolower($value);
    }
}