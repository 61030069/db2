<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositModel extends Model
{
    protected $table="Deposit";
    protected $fillable=[
        'Tran_No ','ACC_No ','DateOp','Amount'
    ];
}
