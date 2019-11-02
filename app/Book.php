<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'idbook';

    //public $incrementing = false;

    // protected $hidden = [
    //     'pass_member',
    // ];

    protected $keyType = 'int';
    public $timestamps = false;


    public function mod_employee()
    {
        return $this->belongsTo(ModEmployee::class, 'id_data_role' , 'id_employee');
    }
}
