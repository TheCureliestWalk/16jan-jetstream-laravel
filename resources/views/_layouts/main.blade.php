<!DOCTYPE html>
<html lang="en">

<head>
    @include('_layouts.head')
</head>

<body id="page-top">

<div id="wrapper">

    @include('_layouts.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('_layouts.topbar')
                <div class="container-fluid">

                    @yield('content')
                </div>
            </div>
        <x-footer/>
    </div>
</div>

    <x-go-to-top/>
    <x-modal-logout/>
@include('_layouts.scripts')
@include('sweetalert::alert')
</body>

</html>
