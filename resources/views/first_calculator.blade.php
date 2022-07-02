@extends('layouts.base')

@section('title', 'First calculator')

@section('content')
<div class="mt-3 d-flex flex-column">
  @include('includes.first_calculator.index')
  @include('includes.first_calculator.indexs')
</div>
@endsection
