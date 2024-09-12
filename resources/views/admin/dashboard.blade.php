@extends('layouts.myapp')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circleshadow">
                            <i class="fas fa-user-secret"></i>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Admin</h5>
                        <span class="h2 font-weight-bold mb-0">ผู้ดูแลระบบ</span>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                    <div class="col">
                        <p>ส่วนนี้เฉพาะผู้ดูแลระบบเท่านั้น</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection