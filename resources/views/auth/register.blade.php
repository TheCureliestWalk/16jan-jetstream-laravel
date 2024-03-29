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
                                    <h1 class="h4 text-gray-900 mb-4">สร้างบัญชีใหม่</h1>
                                </div>
                                <form method="POST" action="{{ route('register') }}" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user"
                                               id="name" aria-describedby="nameHelp"
                                               placeholder="ชื่อ-นามสกุลจริง">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="email" aria-describedby="emailHelp"
                                               placeholder="อีเมลล์">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="password" placeholder="รหัสผ่าน">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation"
                                               class="form-control form-control-user"
                                               id="password" placeholder="ยืนยันรหัสผ่านอีกรอบ">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        สร้างบัญชี
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                                @if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="text-center">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="small">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="small">'.__('Privacy Policy').'</a>',
                                ]) !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
