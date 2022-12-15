@extends('user_details.layout')
@section('content')
<div class="card">
  <div class="card-header">User Details Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{ $user_details->name }}</h5>
        <p class="card-text">Address : {{ $user_details->address }}</p>
        <p class="card-text">Phone : {{ $user_details->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
