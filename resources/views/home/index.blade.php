@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col log 12 text-center">{{-- text-center--}}
            <h1 class="page-title">Home Page</h1>
        </div>
    </div>
@endsection

@push('css')
<style>
    .page-title {
        padding-top: 10vh;
        font-size: 3.5rem;
        color: #2b8e7c;
    }
</style>
@endpush
