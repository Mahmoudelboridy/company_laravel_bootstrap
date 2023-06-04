@extends('admino.admino')
@section('content')
<h2 class="text-center">لوجو الموقع</h2>
<form action="{{ route('nav_logo') }}" method="post" enctype="multipart/form-data" class="mb-2">
    @csrf
    <div class="input-group mb-2">
        <input type="file" class="ml-auto mr-auto my-5" name="logo_image">
    </div>
    <div class="input-group w-10 mb-2 ">
        <button style="width:20% ;" class="p-1 mx-auto my-2 bg-info" name="update">ادخل اللوجو</button>
    </div>
</form>
</div>
@endsection