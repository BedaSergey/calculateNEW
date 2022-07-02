@extends('layouts.base')

@section('title', 'Login')

@section('content')
    <div class="p-5 m-5 d-flex flex-column">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{session('status')}}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-5 d-flex flex-row">
                <span class="h-6 p-2">{{ __('Пароль:') }}</span>
                <input name="password" class="form-control">
                <button class="btn btn-success ms-2" type="submit">{{ __('Войти') }}</button>
            </div>
        </form>
    </div>
@endsection
