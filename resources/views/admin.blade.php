@extends('_layouts.main')
@section('content')

    <x-page-heading>
        <x-slot name="header">Admin Panel</x-slot>
    </x-page-heading>

    <div class="row mb-4">
            <div class="col-lg-3">
                <x-small-card>
                    <x-slot name="border_color">success</x-slot>
                    <x-slot name="title">รายได้รวมทั้งหมด</x-slot>
                    <x-slot name="title_color">primary</x-slot>
                    <x-slot name="text"> บาท</x-slot>
                    <x-slot name="icon">wallet</x-slot>
                </x-small-card>
            </div>

        <x-small-card-2/>
        <x-small-card-3/>

    </div>

    <div class="row">
        <div class="col-lg col-md-4 mb-4">
            <x-chart-pie/>
        </div>
        <x-chart-graph/>
    </div>



@endsection
