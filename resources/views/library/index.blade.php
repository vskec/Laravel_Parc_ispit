@extends('layouts.app')

@section('content')
    <h1>Popis Library</h1>
    <ul>
        @foreach ($Library as $model)
            <li>{{ $model->title }}</li>
        @endforeach
    </ul>
@endsection
