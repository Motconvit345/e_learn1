@extends('master')
@section('title','danh sach User')
@section('cate','danh sach User')
@section('content')
@if (count($errors)>0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>
           {{ $error }}  
        </li>
           
        @endforeach
    </ul>
</div>
@endif
    <form action="{{ route('user.update',$kq->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="{{$kq->name }}" disabled />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{$kq->email }}"/>
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" @if ($kq->role == 1)
                    checked="" 
                @endif type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" @if ($kq->role == 2)
                    checked="" 
                @endif type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="3" @if ($kq->role == 3)
                    checked="" 
                @endif type="radio">Member
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        </form>


        @endsection
