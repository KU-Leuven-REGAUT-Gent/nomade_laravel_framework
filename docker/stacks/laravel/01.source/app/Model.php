<?php

namespace App;

use Illuminate\Database\Eloquent;

abstract class Model extends Eloquent\Model
{
    use Eloquent\SoftDeletes;

    /**
     * The attributes that are protected from mass assignable.
     * By default no attribute is guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Hidding the 'pivot' table by default.
     *
     * @var array
     */
    protected $hidden = ['pivot'];

    /**
     * Get the model's name.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->name_en;
    }

    /**
     * Get the model's description.
     *
     * @return string
     */
    public function getDescriptionAttribute()
    {
        return $this->description_en;
    }

    /**
     * Get the model's id in hex text format.
     *
     * @return string
     */
    public function getHexIdAttribute()
    {
        return "0x" . strtoupper(str_pad(dechex($this->id), 4, "0", STR_PAD_LEFT));
    }


    /**
     * Converts all Date Formats to milliseconds.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.v';
    }

    /**
     * Get the user that created this model entity.
     */
    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    /**
     * Get the user that updated/edited this model entity.
     */
    public function editor()
    {
        return $this->belongsTo(User::class,'updated_by');
    }

    /**
     * Get the user that deleted this model entity.
     */
    public function deletor()
    {
        return $this->belongsTo(User::class,'deleted_by');
    }
}
