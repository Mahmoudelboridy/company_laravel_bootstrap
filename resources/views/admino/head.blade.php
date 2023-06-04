@extends('admino.admino')
@section('content')
<h2 class="text-center">واجهه الموقع</h2>
<form action="{{route('he_ad')}}" method="post" enctype="multipart/form-data" class="mb-2">
    @csrf
    صورة الخلفية
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-1" name="image">
    </div>
    اسم الشركة بالعربى
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title1">
    </div>
شرح عن الشركة بالعربى
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text1">
    </div>
    اسم الشركة بالانجليزى
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="title2">
    </div>
شرح عن الشركة بالانجليزى
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text2">
    </div>

    <div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-2 bg-info" name="update">حفظ</button>
    </div>
</form>
</div>

@endsection