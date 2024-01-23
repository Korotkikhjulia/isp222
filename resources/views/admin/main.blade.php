@extends('layouts.layout')


@section('content')
<div class="container">
    <h1>Main</h1>

    <table class="table table-striped">
    <tr>
      <td>id</td>
      <td>name</td>
      <td>email</td>
      <td>email_verified_at</td>
      <td>password</td>
      <td>remember_token</td>
      <td>created_at</td>
      <td>updated_at</td>
      <td>is_admin</td>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->email_verified_at}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->remember_token}}</td>
      <td>{{$user->created_at	}}</td>
      <td>{{$user->updated_at	}}</td>
      <td>{{$user->is_admin}}</td>
    </tr>
    @endforeach
    </table>


</div>
@endsection