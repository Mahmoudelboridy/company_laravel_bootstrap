@extends('admino.admino')
@section('content')
<h2 class="text-center">جزء رؤيتنا فى الموقع</h2>
<form action="{{route('ro_ayt')}}" method="post" enctype="multipart/form-data" class="mb-2">
    @csrf
 الصورة 1
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image1">
    </div>
      1العنوان 
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title1">
    </div>
1شرح عن  العنوان
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text1">
    </div>
    عنوان2  
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title2">
    </div>
    الصورة 2
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image2">
    </div>

    <div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-3 bg-info" name="update">حفظ</button>
    </div>
</form>
</div>


@endsection