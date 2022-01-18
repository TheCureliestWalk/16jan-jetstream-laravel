@extends('_layouts.main')
@section('content')

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            @if (session('status'))
                                <div class="mb-4 alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <div class="mb-4 font-medium text-sm text-red-600">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">


                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">เข้าสู่ระบบ</h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="email" aria-describedby="emailHelp"
                                               placeholder="อีเมลล์">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"class="form-control form-control-user"
                                               id="password" placeholder="รหัสผ่าน">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="remember_me">
                                            <label class="custom-control-label" for="customCheck" id="remember_me">จำการเข้าสู่ระบบ</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        ล็อคอิน
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                                @if(Route::has('passsword.request'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">ลืมรหัสผ่าน</a>
                                </div>
                                @endif
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">สร้างบัญชีใหม่</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
