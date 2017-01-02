@extends('master')
@section('title','danh sach User')
@section('cate','danh sach User')
@section('content')
    <form action="{{ route('user.store') }}" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{{ old('txtUser')}}"/>
        </div>
        <div class="form-group">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('txtUser') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password"/>
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email"  value="{{ old('txtEmail')}}"/>
        </div>
        <div class="form-group">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('txtEmail') }}
        </div>
            @endif
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" checked="" type="radio">Admin
            </label>
             <label class="radio-inline">
                <input name="rdoLevel" value="2" checked="" type="radio">Editor
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="3" type="radio">Member
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
        </form>
        @endsection
@section('sc')
    <script>
        $(document).ready(function() {
            $(".alert").slideUp(20000);
        });
    </script>
@stop
