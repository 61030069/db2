<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawModel extends Model
{
    protected $table="Withdraw";
    protected $fillable=[
        'Tran_No ','ACC_No ','DateOp','Amount'
    ];
}
