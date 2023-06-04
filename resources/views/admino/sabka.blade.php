@extends('admino.admino')
@section('content')
<h2 class="text-center">جزء سابقة الاعمال والمشاريع فى الموقع</h2>
<form action="{{route('sab_ka')}}" method="post" enctype="multipart/form-data" class="mb-2">
    @csrf
    الصورة 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image">
    </div>
     مقال 
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text">
</div>
<div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-2 bg-info" name="update">حفظ</button>
    </div>

</form>
</div>

@endsection