@extends('layouts.main')

@section('content')
<div class="row justify-content-between flex-wrap">
    @foreach ($movies as $movie)

    @include('partials.card')

    @endforeach
</div>
@endsection
