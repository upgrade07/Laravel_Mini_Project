@extends('layout')
@section('content')
    <div>
        <ul>
            @foreach ($user as $u)
                <li> {{ $u->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
