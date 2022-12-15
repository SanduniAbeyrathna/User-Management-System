@extends('user_details.layout')
@section('content')
<div class="card">
  <div class="card-header">User Details Page</div>
  <div class="card-body">

      <form action="{{ url('user_details/' .$user_details->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user_details->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$user_details->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$user_details->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$user_details->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
