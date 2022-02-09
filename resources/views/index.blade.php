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

                <!-- Not Login Alert -->
                @guest
                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="d-flex justify-content-center">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">กรุณาเข้าสู่ระบบ</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>กรุณาเข้าสู่ระบบเพื่อเข้าใช้งานระบบได้อย่างเต็มที่ หากยังไม่ได้สมาสมาชิก
                                            คุณสามารถสมัคร เพียงใช้ระยะเวลา 30 วินาที</p>
                                        <div class="d-flex flex-md-row-reverse">
                                            <a href="{{ route('login') }}" class="btn btn-primary ml-2">เข้าสู่ระบบ</a>
                                            <a href="{{ route('register') }}"
                                               class="btn btn-success mr-2">สมัครสมาชิก</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                        <div class="col-md d-flex d-lg-block">

                            <div class="col-md-6 justify-content-center">
                                <!-- Create New Wallet Notify -->
                                <x-create-new-wallet/>
                                <div class="col-lg-12 mb-4">
                                    <!-- News -->
                                    <x-news-card/>
                                </div>

                            <!--    Alert Notify
            <div class="alert alert-warning alert-dismissible fade show">
                                    <p>{{ Session::get('error') }}</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> -->

                                @if(Session::has('error'))
                                    <script>Swal.fire('ผิดพลาด', '{{ Session::get('error') }}', 'error')</script>
                                @endif

                                @if(Session::has('warning'))
                                    <script>Swal.fire('ชี้แจง', '{{ Session::get('warning') }}', 'warning')</script>
                                @endif

                                @if(Session::has('success'))
                                    <script>Swal.fire('สำเร็จ', '{{ Session::get('success') }}', 'success')</script>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg mb-4">
                            <x-chart-pie/>
                            <x-add-remove-money/>
                            <x-progress-bar/>

                        </div>
                        <div class="col-lg mb-4">
                            <x-example-color/>
                            <x-example-illustration/>

                        </div>

                    </div>



                    <div class="row">
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
