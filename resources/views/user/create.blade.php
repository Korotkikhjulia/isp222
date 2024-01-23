@extends('layouts.layout')
@section('title')
@parent - {{$title}}

@endsection

@section('content')
<div class="container">
<h2 class="mt-5">Регистрация пользователя</h2>
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
    <form class="mt-5" action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-5">
            @error('name')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalis @enderror" id="name" placeholder="Name" value="{{old('name')}}">
        </div>

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

        <div class="mb-3 mt-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" value="">
        </div>
       

        <button type="submit" class="btn btn-primary mt-5">Отправить</button>
    </form>
</div>

@endsection