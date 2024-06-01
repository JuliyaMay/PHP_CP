@extends('app')

@section('headerTitle', 'Welcome to our services catalog!')
@section('headerDescription', 'Please proceed with selecting service')

@section('content')
    @foreach($services as $service)
        {{-- @dd($service); --}}
        @include(
            'components.servicePanel',
            [
                'name'     => $service->name,
                'price'    => $service->price,
                'duration' => $service->duration,
                'options'  => [],
                'id'       => $service->id,
            ]
        )
    @endforeach
@endsection
