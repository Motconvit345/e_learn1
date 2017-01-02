@extends('master')
@section('title','Them San Pham test')

@section('content')
 @if(count($errors)>0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
@endif
    <form action="{{route('product.store')}}" id="form1" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Category Parent</label>
            <select  class="form-control" name="parent">
            @php
                cate_parent($pa);
            @endphp
 
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value='{{ old('txtName')}}'/>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Password" value='{{ old('txtPrice')}}'/>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{{ old('txtIntro')}}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" rows="3" name="txtContent">{{ old('txtContent')}}</textarea>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
          <div class="form-group">
            <label for="">Sub Img</label>
               <input type="file" name="Fimages1[]" multiple/>
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeyWords" placeholder="Please Enter Category Keywords" value="{{ old('txtKeyWords')}}"/>
        </div>

        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description')}}</textarea>
            <script>
                CKEDITOR.replace("description");
            </script>
        </div>
        <div class="form-group">
            <label>Product Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Invisible
            </label>
        </div>
        <button id="submit" class="btn btn-default">Product Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
   </form>

    

@endsection

@section('sc_head')
<script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('public/js/ckfinder/ckfinder.js') }}"></script>
@stop
{{-- @section('sub-img')

<div id="a">
<span>X</span>
    <img src="http://tranhthaonguyen.com/pic/Product/243_635695568151688072.jpg.ashx" alt=""/>
</div>

<style>
    div#a{
        position: relative;
        width: 100%;
        height: 150px;
    }
    div#a>span{
        cursor: pointer;
        color: white;
        background: red;
        position: absolute;
            width: 20px;
    border-radius: 50%;
    text-align: center;
    }
    div#a img{
        width: 100%;
        height: 100%;
    }
</style>
@endsection --}}
