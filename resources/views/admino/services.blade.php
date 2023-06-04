@extends('admino.admino')
@section('content')
<h2 class="text-center">جزء الخدمات فى الموقع</h2>
<form action="{{route('ser_vices')}}" method="post" enctype="multipart/form-data" class="mb-2">
    @csrf
    صورة الخلفية 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image">
    </div>
     مقال 
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text">
    </div>

    صورة الخدمة 1 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image1">
    </div>
      عنوان الخدمة 1
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title1">
    </div>
    شرح الخدمة 1
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text1">
    </div>

    صورة الخدمة 2 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image2">
    </div>
      عنوان الخدمة 2
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title2">
    </div>
    شرح الخدمة 2
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text2">
    </div>

    صورة الخدمة 3 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image3">
    </div>
      عنوان الخدمة 3
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title3">
    </div>
    شرح الخدمة 3
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text3">
    </div>

    صورة الخدمة 4 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image4">
    </div>
      عنوان الخدمة 4
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title4">
    </div>
    شرح الخدمة 4
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text4">
    </div>

    صورة الخدمة 5 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image5">
    </div>
      عنوان الخدمة 5
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title5">
    </div>
    شرح الخدمة 5
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text5">
    </div>

    صورة الخدمة 6 
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image6">
    </div>
      عنوان الخدمة 6
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title6">
    </div>
    شرح الخدمة 6
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text6">
    </div>

    <div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-2 bg-info" name="update">حفظ</button>
    </div>
</form>
</div>


@endsection