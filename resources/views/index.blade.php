<!DOCTYPE html>
<html lang="en">

<head>

    @include('_layouts.head')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

@include('_layouts.sidebar')

<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        @include('_layouts.topbar')

        <!-- Begin Page Content -->
            <div class="container-fluid">
                <x-page-heading>
                    <x-slot name="header">หน้าหลัก</x-slot>
                </x-page-heading>
                <!-- Content Row -->
                @guest

                <div class="row">




                    <div class="col-lg-12 col-md-12">
                        @component('components.medium-card')
                            @slot('title')
                                แจ้งเตือน
                                @endslot
                            @slot('text')
                                    กรุณาเข้าสู่ระบบเพื่อเข้าใช้งานระบบได้อย่างเต็มที่ หากยังไม่ได้สมาสมาชิก คุณสามารถสมัคร เพียงใช้ระยะเวลา 30 วินาที
                                @endslot
                                <div class="d-flex flex-md-row-reverse">
                                    <a href="{{ route('login') }}" class="btn btn-primary ml-2">เข้าสู่ระบบ</a>
                                    <a href="{{ route('register') }}" class="btn btn-success mr-2">สมัครสมาชิก</a>
                                </div>
                        @endcomponent
                    </div>
                </div>

                @endguest

                @auth
                <div class="row">
                    <div class="col-lg-3 col-md-7">
                        <x-money-card/>
                    </div>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <div class="col-md d-flex d-lg-inline-block">
                        <div class="col-md-6 justify-content-center">
                            <x-create-new-wallet/>
                            @if($sessions = Session::has('error'))
                                <div class="alert alert-danger">
                                    <p>{{ Session::get('error') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg mb-4">
                        <x-chart-pie/>
                        <x-progress-bar/>

                    </div>
                    <div class="col-lg mb-4">
                        <x-example-color/>
                        <x-example-illustration/>
                    </div>

                </div>

                <div class="rows">
                    <div class="col-lg mb-4">
                        <x-table/>
                    </div>
                </div>


                @endauth
            </div>
        </div>
        <x-footer/>
    </div>
</div>
<x-go-to-top/>
<x-modal-logout/>
<x-modal-box/>
@include('_layouts.scripts')
</body>

</html>
