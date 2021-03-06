@extends('layouts.app')

@section('content')
    @isset($term)
        <div class="inner cover">
            <h1 class="cover-heading">Terms of services</h1>
            <p>{{$term->content}}</p>
            <hr>
            <p>Previous versions of the "Terms of services" can be found <a href="/terms">here</a></p><br>
        </div>
    @else
        <p>No terms and conditions found.</p>
    @endif
@endsection
