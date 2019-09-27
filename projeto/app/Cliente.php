<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['name','phone','description','id_client','type','value'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';

}
