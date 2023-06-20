@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الاقسام </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل القسم
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="card">
    <div class="card-header">تعديل القسم</div>

    <div class="card-body">
        <form action="{{route('category.update',['id' => $category->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">اسم القسم</label>
                <input type="text" value="{{$category->name}}" name="name" class="form-control" placeholder="ادخل الاسم">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" placeholder="Enter Category Name">
            </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection