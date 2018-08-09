@extends('layouts.app')

@section('content')

<div class="main">
    <h2>Order History of {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</h2>
    <button id="back_button" class="btn btn-primary">Back to home</button>
</div>
@endsection

<script>
    $(document).ready(function() {
        $('#back_button').click(function(){
            alert("Hi");
            //history.go(-1);
        });
    });
</script>