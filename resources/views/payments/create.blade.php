@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/payments">
    @csrf
        <button class="btn btn-primary" type="submit" formmethod="POST">Make Payment</button>
        @if(session('message'))
            <div><span>{{session('message')}} </span></div>
        @endif
    </form>
</div>    
@endsection