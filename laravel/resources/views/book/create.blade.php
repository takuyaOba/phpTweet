@extends('book/layout')
@extends('layouts.app')
@section('content')
@include('book/form', ['target' => 'store'])
@endsection