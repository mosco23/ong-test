@extends('layouts.master')

@section('sidebar')
{{-- @include('items.sub-navbar', ['name' => "Activité"]) --}}
<x-sub-navbar :link="request()->segment(1)"/>
@endsection