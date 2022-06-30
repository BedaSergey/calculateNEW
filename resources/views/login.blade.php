@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<div class="p-5 m-5 d-flex flex-column">
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mt-5 d-flex flex-row">
      <span class="h-6 p-2">Пароль:</span>
      <input name="password" class="form-control">
      <button class="btn btn-success ms-2" type="submit">Войти</button>
    </div>
  </form>
</div>
@endsection
