<?php

namespace App;



use Illuminate\Pipeline\Pipeline;

class ParameterValue extends Model
{
    public function getHexValueAttribute()
    {
        return "0x" . strtoupper(str_pad(strrev(unpack('h*', pack('f', $this->value))[1]), 4, "0", STR_PAD_LEFT));
    }
}
