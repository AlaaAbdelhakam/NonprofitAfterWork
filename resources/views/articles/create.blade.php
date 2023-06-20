@extends('layouts.admin')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> المقالات </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">المقالات
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="card">
    <div class="card-header">انشاء الخبر</div>

    <div class="card-body">
        <form action="{{route('articles.insert')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">عنوان الخبر</label>
                <input type="text" name="title" class="form-control" placeholder="ادخل عنوان الخبر">
            </div>
            <div class="form-group">
                <label for="">محتوى الخبر</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">الصورة المرفقة</label>
                <input type="file" name="img" class="form-control" placeholder="ارفق صورة">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">اختر القسم</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <option selected disabled>اخر القسم</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" placeholder="Enter articles Name">
            </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection