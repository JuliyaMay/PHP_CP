@extends('app')

@section('headerTitle', 'Booking service QWERTY')

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
