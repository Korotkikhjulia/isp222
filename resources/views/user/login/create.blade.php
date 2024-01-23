@extends('layouts.layout')
@section('title')
@parent - {{$title}}


@endsection

@section('content')
<div class="container">
    <h2 class="mt-5">Авторизация пользователя</h2>
    <div class="mt-5">
        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
    </div>
    <form class="mt-5" action="{{route('login.store')}}" method="POST">
        @csrf

        <div class="mb-3 mt-5">
            @error('email')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalis @enderror" id="email" placeholder="Email" value="{{old('email')}}">
        </div>

        <div class="mb-3 mt-5">
            @error('password')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalis @enderror" id="password" placeholder="Password" value="{{old('password')}}">
        </div>
       
        <button type="submit" class="btn btn-primary mt-5">Отправить</button>
    </form>
</div>

@endsection