@extends('layout')
@section('content')

<div id="upload">
    <div class="row">
       <x-validation-error>
        
       </x-validation-error>
        <!-- upload -->
        <div class="col-md-8">
            <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
            <form action="{{route('videos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>@lang('videos.name')</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" placeholder="@lang('videos.name')">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.length')</label>
                        <input type="text" name="length" value="{{old('length')}}"  class="form-control" placeholder="@lang('videos.length')">
                    </div>
                    <div class="col-md-6">
                        <label>نام یکتا</label>
                        <input type="text" name="slug" value="{{old('slug')}}"  class="form-control" placeholder="نام یکتا">
                    </div>
                    <div class="col-md-6">
                        <label>آدرس ویدیو</label>
                        <input type="file" name="file" id="">
                    </div>
                    <div class="col-md-6">
                        <label>تصویر بند‌انگشتی</label>
                        <input type="text" name="thumnail" value="{{old('thumnail')}}"  class="form-control" placeholder="تصویر بند انگشتی">
                    </div>
                    <div class="col-md-6">
                        <label>دسته بندی</label>
                        <select class="form-control" name="category_id" id="category">
                            @foreach($categories as $categori)
                            <option value="{{ $categori->id }}">{{ $categori->name }}</option>
                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>توضیحات</label>
                        <textarea class="form-control" name="description" rows="4" placeholder="توضیح"></textarea>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                    </div>
                </div>

            </form>
        </div><!-- // col-md-8 -->

        <div class="col-md-4">
            <a href="#"><img src="{{asset('/img/upload-adv.png')}}" alt=""></a>
        </div><!-- // col-md-8 -->
        <!-- // upload -->
    </div><!-- // row -->
</div><!-- // upload -->

@endsection