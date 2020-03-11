@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Please fill the registration information</h3>
    <br>
    <br>
    @if(isset($mess))
    <p class="alert alert-success">{!! $mess !!}</p>
    @endif
    @if(isset($errors))
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{!! $error !!}</p>
    @endforeach
    @endif
    <form action="{!! Route('store_user') !!}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-6">
            <label>Your Address : </label>
            <input type="text" name="address" class="form-control">
            <label>Payment :</label>
            <input type="text" name="payment" class="form-control">
            <br>
            <br>
            <input class="btn btn-success" value="Add" type="submit" name="Add">

    </form>


</div>


@endsection
