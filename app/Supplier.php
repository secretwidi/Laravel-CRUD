<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //kasih tau nama tabel
    protected $table = 'supplier';

    //laravel default id
    protected $primaryKey = 'supplier_id';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'supplier_id',
        'name',
        'address',
        'telp'
    ];
}
