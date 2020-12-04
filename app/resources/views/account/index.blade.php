@extends('account.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <table border=1>
                    <tr>
                        <td>เลขบัญชี</td>
                        <td>ชนิดบัญชี</td>
                        <td>ชื่อ</td>
                        <td>นามสกุล</td>
                        <td>ที่อยู่</td>
                        <td>ตำบล</td>
                        <td>อำเภอ</td>
                        <td>จังหวัด</td>
                        <td>รหัสไปรษณีย์</td>
                        <td>วันที่เปิดบัญชี</td>
                        <td>จำนวนเงิน</td>
                    </tr>
                    @foreach($account as $acc)
                    <tr>
                        <td>{{ $acc->ACC_No }}</td>
                        <td>{{ $acc->Type_No }}</td>
                        <td>{{ $acc->ACC_Name }}</td>
                        <td>{{ $acc->ACC_Surname }}</td>
                        <td>{{ $acc->Address }}</td>
                        <td>{{ $acc->SubDistrict }}</td>
                        <td>{{ $acc->District }}</td>
                        <td>{{ $acc->Province }}</td>
                        <td>{{ $acc->ZipCode }}</td>
                        <td>{{ $acc->DateOp }}</td>
                        <td>{{ $acc->Balance }}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
