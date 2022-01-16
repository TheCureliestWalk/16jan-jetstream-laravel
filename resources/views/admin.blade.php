@extends('_layouts.main')
@section('content')

    <div class="rows">
        @component('components.page-heading')
            @slot('header')
                Admin Panel
            @endslot
                @slot('button')
                     Generate Data
                @endslot
        @endcomponent
    </div>


@endsection
