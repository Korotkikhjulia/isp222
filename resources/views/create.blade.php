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
    <form class="mt-5" action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-5">
            @error('title')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{old('title')}}">
        </div>
        <div class="mb-3">
        @error('content')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="5">{{old('content')}}</textarea>
        </div>
        @error('rubric_id')
                <div class = "alert alert-danger">{{$message}}</div>
            @enderror
        
        
        <select class="form-select mb-3" id="rubric_id" name="rubric_id">
            <option selected>Выберите рубрику</option>
            @foreach ($rubrics as $key => $value)
            <option value="{{ $key }}"
            @if(old('rubric_id') == $key) selected @endif
            >{{ $value }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

@endsection