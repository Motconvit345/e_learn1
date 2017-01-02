@extends('master')
@section('title','danh sach User')
@section('cate','danh sach User')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
   <thead>
      <tr align="center">
         <th>ID</th>
         <th>Username</th>
         <th>Level</th>
         <th>Status</th>
         @if (Auth::user()->role ==1 )
         <th>Delete</th>
         @endif
         <th>Edit</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($kq as $v)
      @if ($v->id != Auth::user()->id)
        <tr class="odd gradeX" align="center">
         <td>{{ $v->id }}</td>
         <td>{{ $v->name }}</td>
         <td>
            @if ($v->role == 1)
            Super ADmin
            @elseif ($v->role == 2)
            Editor
            @else
            Member
            @endif
         </td>
         <td>Hiện</td>
         @if (Auth::user()->role ==1 )
         <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('user.destroy',$v->id) }}" data-confirm="Are you sure?" data-method="delete" data-token="{{csrf_token()}}"> Delete</a></td>
         @endif
         <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('user.edit',$v->id) }}">Edit</a></td>
      </tr>
      @endif

      @endforeach
   </tbody>
</table>
<div class="text-center">
   {{ $kq->links() }}
</div>
@endsection