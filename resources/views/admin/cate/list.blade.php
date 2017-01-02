@extends('master')
@section('title','Danh Sach Category')
@section('cate','Thêm Category')
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
         <th>Category Parent</th>
         <th>Status</th>
         <th>Delete</th>
         <th>Edit</th>
      </tr>
   </thead>
   <tbody>
      @foreach($m as $v)
      @if (!$v->parent_id == 0)
      <tr class="gradeX" align="center">
         <td>{{$v->id}}</td>
         <td>{{$v->name}}</td>
         <td>
            @php
                $kq=DB::table('cates')->select('name')->where('id',$v->parent_id)->first();
            @endphp
            {{ $kq->name }}
         </td>
         <td>Hiện</td>
         <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('cate.destroy',$v->id)}}" data-method="delete" data-token="{{csrf_token()}}" >Delete</a></td>
         <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('cate.edit',$v->id) }}">Edit</a></td>
      </tr>
      @endif
      @endforeach
   </tbody>
</table>
<div class="text-center">
   {{ $m->links() }}
</div>
@endsection