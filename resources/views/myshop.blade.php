
@extends('layouts.myapp')
@section('content')
    <div class = "row">
        <div class = "col-12">
            <div class = "card">
                <div class = "card-header">
                เกี่ยวกับร้าน IT Shop

                </div>
                <div class="card-body"> 
                <ul>            
                    <li>ที่อยู่ร้าน: {{$address}}</li>
                    <li>เบอร์โทร: {{$mobilephone}} </li>
                    <li>ที่ตั้งร้าน: {{$location}} </li>
                </ul>
                </div>
            </div>
        </div>
    </div >
@endsection

    