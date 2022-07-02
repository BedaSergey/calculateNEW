@extends('layouts.base')

@section('title', 'Second calculator')

@section('content')
<div class="mt-3 d-flex flex-column">
  @include('includes.second_calculator.index')
  @include('includes.second_calculator.indexs')
</div>
@endsection
