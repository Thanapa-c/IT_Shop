@extends('layouts.myapp')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>หมวดหมู่สินค้า</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">หมวดหมู่
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        จำนวนรายการสินค้า</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $ptype)
                                    <tr>
                                        <td>
                                            <p class="text-xs px-4 font-weight-bold mb-0">{{ $ptype->id }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="https://needidea.in.th/wp-content/uploads/2021/10/4-3.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $ptype->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">99</p>
                                            <p class="text-xs text-secondary mb-0">ชิ้น</p>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{ route('product_types.destroy', $ptype->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" class="btn btn-outline-success px-3 py-2"><i
                                                        class="fa fa-pencil"></i> แก้ไข</a>
                                                <button type="submit" class="btn btn-outline-danger px-3 py-2"
                                                    onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่?')"><i
                                                        class="fa fa-trash"></i> ลบ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
