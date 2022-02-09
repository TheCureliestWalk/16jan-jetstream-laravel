@extends('_layouts.main')
@section('content')

 <!-- Page Header -->
    <div class="container-fluid">
        <x-page-heading>
            <x-slot name="header">ทดสอบ Livewire</x-slot>
        </x-page-heading>


    <div class="row">
        <div class="col-md-12">

            @livewire('text-update')
        </div>
    </div>





@endsection
