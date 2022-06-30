@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<div class="mt-3 d-flex flex-column">
  @include('includes.calculator.index')
  @include('includes.calculator.indexs')
</div>
@endsection
