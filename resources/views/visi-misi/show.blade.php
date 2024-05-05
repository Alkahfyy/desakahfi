@extends('layouts.layout')
<style>
    .animate-up:hover {
        top: -5px;
    }
</style>

@section('header')
<h1 class="text-white text-muted">Visi Misi Desa</h1>
@endsection

@section('content')
<div class="row justify-content-center">

    <div class="col-lg-12 col-md-6 mb-3">
        <div class="card animate-up shadow">
            <div class="card-body">
               <div>{!! $visiMisi->visi !!}</div>
               <br>
               <div>{!! $visiMisi->misi !!}</div>
            </div>
        </div>
    </div>

</div>
@endsection
