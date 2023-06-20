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
                            <li class="breadcrumb-item active">الاقسام
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <main class="py-4">
                <div class="container">
                    <div class="row">
                        @auth
    
                            <div class="col-lg-3">
                                <ul class="list-group list-group-flush">
    
                                    <li class="list-group-item"><a href="{{ route('category.create') }}">انشاء قسم جديد</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('category.trashed') }}">الاقسام المحذوفة</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('category.index') }}">عرض كل الاقسام</a></li>
{{--     
                                    <li class="list-group-item"><a href="{{ route('articles.create') }}">Create articles</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('articles.trashed') }}">Trashed articles</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('articles.index') }}">articles</a></li> --}}
                                    {{-- <li class="list-group-item"><a class="btn btn-primary" href="{{ route('index') }}">Retun to
                                            Front Page</a></li> --}}
                                    {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                                </ul>
                            </div>
    
    
                        @endauth
                        <div class="col-lg-9">
<div class="card">
    <div class="card-header">الاقسام</div>
    
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم القسم</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><a href="{{route('category.edit',['id' => $category->id])}}">تعديل</a></td>
                <td><a href="{{route('category.trash',['id' => $category->id])}}">حذف</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
</div>
</main>
</div>
</div>
</div>
</div>
@endsection