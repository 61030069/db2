<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferModel extends Model
{
    protected $table="Transfer";
    protected $fillable=[
        'Tran_No ','ACC_No_Source ','ACC_No_Dest ','DateOp','Amount'
    ];
}
