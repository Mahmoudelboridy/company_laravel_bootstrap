@extends('admino.admino')
@section('content')
<table style="color:black" class="w-75 ml-auto mr-auto my-4 table">
  <thead>
    <tr>
      <th scope="col">حذف</th>
      <th scope="col">المقال</th>
      <th scope="col">الصورة</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($sabkas as $sabka )
    <tr>
      <td>
        <form action="{{ route('delete',$sabka->id ) }}" method="POST">
          @csrf
          <button class="btn btn-primary" name="delete">delete</button>
        </form>
      </td>
      <td>{{ $sabka->text }}</td>
      <td><img src="{{ $sabka->image }}" style="width:150px;height:150px" /></td>
      <th scope="row">{{ $n++ }}</th>
    </tr>  
    @endforeach
  </tbody>
</table>
@endsection