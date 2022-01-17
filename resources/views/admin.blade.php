@extends('_layouts.main')
@section('content')

    <x-page-heading>
        <x-slot name="header">Admin Panel</x-slot>
    </x-page-heading>

    <div class="row">
        <div class="col-lg-9 mb-4">
            <x-small-card>
                <x-slot name="border_color">success</x-slot>
                <x-slot name="title">รายได้รวมทั้งหมด</x-slot>
                <x-slot name="title_color">primary</x-slot>
                <x-slot name="text"> บาท</x-slot>
                <x-slot name="icon">wallet</x-slot>
            </x-small-card>
            <x-small-card/>
            <x-small-card/>
            <x-small-card/>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">

            <x-chart-pie/>
            <x-chart-graph/>
        </div>

    </div>



@endsection
