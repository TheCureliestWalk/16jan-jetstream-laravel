@extends('_layouts.main')
@section('content')

    <x-page-heading>
        <x-slot name="header">ตั้งค่าบัญชี</x-slot>
    </x-page-heading>

    @if(Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ Session::get('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="row">
        <!-- IMG PROFILE -->
        <div class="col-md-4">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">รูปโปรไฟล์</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img class="img-profile rounded-circle my-3" src="images/{{ Auth::user()->profile_image }}" width="150x150" alt="">

                    </div>
                    <div class="d-flex justify-content-center">
                        <form method="POST" action="{{ route('updateImage') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image">
                            <button class="btn btn-outline-success">เปลี่ยนรูป</button>
                        </form>
                    </div>
                    <h6></h6>
                    <form action="#">
                        <label for=""></label>
                    </form>
                </div>
            </div>
        </div>

        <!-- User Profile -->
        <div class="col-md-4">

            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ข้อมูล</h6>
                </div>
                <div class="card-body">
                    <p>หากต้องการเปลี่ยนชื่อ-นามสกุล ต้องแจ้งกับทางผู้ดูแลระบบ</p>
                    <form method="POST" action="{{ route('updateSettings') }}">
                        @csrf
                        <div class="form-group">
                            <label for="" class="">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control form-control-user mb-3"
                                   value="{{ Auth::User()->name }}" name="name">
                            <label for="" class="">อีเมลล์</label>
                            <input type="text" class="form-control form-control-user mb-3"
                                   value="{{ Auth::User()->email }}" name="email">
                            <button type="submit" class="btn btn-success">เปลี่ยน</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Change Password -->
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">รหัสผ่าน</h6>
                </div>
                <div class="card-body">
                    <p>หากต้องการเปลี่ยนรหัสผ่านใหม่ กรุณาเปลี่ยนรหัสด้านล่าง</p>
                    <form action="#">
                        <div class="form-group">
                            <label for="" class="">รหัสผ่าน</label>
                            <input type="password" class="form-control form-control-user">
                            <div class="d-flex flex-row-reverse justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary">เปลี่ยน</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <!-- 2FA -->
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Two-Factor Auth</h6>
                </div>
                <div class="card-body">
                    <p>ระบบความปลอดภัยสองขั้นตอน</p>
                    <ul class="list-unstyled">
                        <li>ทำให้บัญชีคุณปลอดภัยมากขึ้น</li>
                        <li>ได้รับคะแนนเพิ่มเป็นกรณีพิเศษ</li>
                    </ul>
                    <form action="#">
                        <div class="form-group">
                            <div class="d-flex flex-row-reverse justify-content-center mt-3">
                                <button type="submit" class="btn btn-warning">เปิดการใช้งาน</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>


        </div>

        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Two-Factor Auth</h6>
                </div>
                <div class="card-body">
                    <p>สถานะการเข้าสู่ระบบ</p>
                    <ul class="list-unstyled">
                            <li>{{ request()->ip() }}</li>
                    </ul>



                    </form>
                </div>
            </div>


        </div>


















@endsection
