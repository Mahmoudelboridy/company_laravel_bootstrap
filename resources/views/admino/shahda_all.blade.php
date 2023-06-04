@extends('admino.admino')
@section('content')
<table style="color:black" class="w-75 ml-auto mr-auto my-4 table">
  <thead>
    <tr>
    <th scope="col">حذف</th>
      <th scope="col">الكود</th>
      <th scope="col">الاسم</th>
      <th scope="col">صورة الشهادة</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shahdas as $shahda )
    <tr>
      <td>
        <form action="{{ route('deleteon',$shahda->id ) }}" method="POST">
          @csrf
          <button class="btn btn-primary" name="delete">delete</button>
        </form>
      </td>
      <td>{{$shahda->code}}</td>
      <td>{{ $shahda->title }}</td>
      <td><img src="{{$shahda->image}}" style="width:150px;height:150px" /></td>
      <th scope="row">{{ $n++ }}</th>
    </tr>  
    @endforeach
  </tbody>
</table>
@endsection