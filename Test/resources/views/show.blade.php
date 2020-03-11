@extends('layouts.app')
@section('content')
<h3> List User </h3>
<br>
<div class="col-lg-9">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Payment</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        @foreach($registers as $register)
        <tbody>

            <tr>

                <th scope="row">{!! $register->id !!}</th>
                <th scope="row">{{ $register->user->name }}</th>
                <th scope="row">{{ $register->user->email }}</th>
                <td>{!! $register->address !!}</td>
                <td>{!! $register->payment !!}</td>
                <td>{!! $register->status !!}</td>
                <td>
                <form action="{!! Route('update_register', ['id' => $register->id]) !!}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                    <input type="hidden" name="status" value="accept" class="form-control">
                    
                    <input class="btn btn-success" type="submit" name="Acept">
                </form>
                    <form action="{!! Route('update_register', ['id' => $register->id]) !!}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="reject"  name="status">
                        <input type="submit"  class="btn btn-danger">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
