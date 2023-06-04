@extends('admino.admino')
@section('content')
<h2 class="text-center">جزء اتصل بنا فى الموقع واختيار الالوان فى الموقع</h2>
<form action="{{route('cont_act')}}" method="post" class="mb-2">
    @csrf
      العنوان
    <div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="location">
    </div>
 رقم تليفون
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="number">
    </div>
     الايميل
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="email">
    </div>
     عن شركتنا
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="text">
    </div>
     لينك الفيس بوك
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="facebook">
    </div>
    لينك التويتر 
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="twitter">
    </div>
    لينك الانستجرام 
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="instgram">
    </div>
    لينك اليوتيوب 
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="youtube">
    </div>
     الالوان 
<div class="input-group mb-2">
        <input type="text" style="height:50px" class="w-50 ml-auto mr-auto my-1" name="color">
    </div>
    <div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-2 bg-info" name="update">حفظ</button>
    </div>
</form>
</div>

@endsection