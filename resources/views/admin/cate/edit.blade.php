@extends('master')
@section('title','Sua Category')
@section('cate','Sua Category')
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
    <form action="{{ route('cate.update',$dk->id) }}" method="POST">
     {{ csrf_field() }}
     {{ method_field('PUT') }}
       <div class="form-group">
                {{ csrf_field() }}
            
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
              "<option selected value='0'>Parent</option>"; 
                {{ cate_parent($paa,0,'--',$dk->id) }}
                </select>
            </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{{$dk->name }}" />
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{{$dk->order }}" />
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{{$dk->keyword}}"/>
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea name="txtDescription" id="content" class="form-control" rows="3">{{$dk->description}}</textarea>
        </div>
        <script>
            CKEDITOR.replace('txtDescription');
        </script>
        <div class="form-group">
            <label>Category Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Invisible
            </label>
        </div>
        <button type="submit" class="btn btn-default" ">Category Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        </form>
@endsection
