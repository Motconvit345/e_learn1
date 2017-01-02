@extends('master')
@section('title','sua San Pham')
@section('cate','sua San Pham')
@section('content')
    <form action="{{ route('product.update',$pr->id) }}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
     {{ method_field('PUT') }}
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" id="txtName" placeholder="Please Enter Username" value="{{$pr->name }}" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Password" value="{{$pr->price }}"/>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{{ $pr->intro }}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" rows="3" name="txtContent">{{ $pr->content }}</textarea>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Sub Image</label>
            <input type="file" name="Fimages1[]" multiple="true">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" value="{{$pr->keywords }}"/>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3">{{$pr->description }}</textarea>
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
        <button type="submit" class="btn btn-default">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        </form>
    @endsection
@section('sub-img')
<style type="text/css">
    img{
        width: 70%;
        height: 360px;
        margin-bottom: 30px;
            border: 1px solid black;
    }
    div#a{
        position: relative;
    }
    div#a>i{
        top:0;
        cursor: pointer;
        position: absolute;
        color:red;
    }
</style>
        @foreach ($img as $k=>$v)
        <div id="a hinh{{ $k }}">
            <a href="javascript:void(0)" id="{{ $v['id'] }}" data-method="delete" data-token="{{csrf_token()}}"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
             <img src="{{ url('public/upload/'.$v['image']) }}">
        </div>
           
        @endforeach
@endsection
@section('sc')
<script>
    $(document).ready(function() {
        $(".fa-times").click(function(event) {
            if(confirm("Bạn Có Muốn Xóa Không?")){
                var id=$(this).parent().attr("id");
                $(this).parent().parent().hide();
                $.get('http://localhost/hoa_qua3/laravel1.1/admin/DeleteProductAjax/'+id, function(data) {
                      $("#txtName").html(data);
                });
              }
        });
    });
</script>
@stop