@extends('layouts.layout')
@section('title')
@parent - {{$title}}

@endsection

@section('content')
<div class="container">
    <div class="mt-5">
        <h1>Create Post</h1>

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
    <form class="mt-5" action="{{route('enter.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-5">
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="title" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="title" placeholder="Name" value="{{old('title')}}">
        </div>
        <div class="mb-3">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="email" class="form-label">Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            @error('phone')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="content" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="content" placeholder="Phone" value="{{old('content')}}">
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

@endsection