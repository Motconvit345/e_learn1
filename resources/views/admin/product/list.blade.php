@extends('master')
@section('title','danh sach San Pham')
@section('cate','danh sach San Pham')
@section('content')
   @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $pr)
            <tr class="odd gradeX" align="center">
                <td>{{$pr->id}}</td>
                <td>{{$pr->name}}</td>
                <td>{{number_format($pr->price)}} VND</td>
                <td>{{$pr->created_at}}</td>
                <td>Hiện</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('product.destroy',$pr->id) }}" data-method="delete" data-token="{{csrf_token()}}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('product.edit',$pr->id) }}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
