@extends('layouts.admin')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الاخبار </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">الاخبار
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
{{--     
                                    <li class="list-group-item"><a href="{{ route('category.create') }}">Create Category</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('category.trashed') }}">Trashed Category</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('category.index') }}">Category</a></li>
     --}}
                                    <li class="list-group-item"><a href="{{ route('articles.create') }}">انشاء الخبر الجديد</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('articles.trashed') }}">الاخبار المحذوفة</a>
                                    </li>
                                    <li class="list-group-item"><a href="{{ route('articles.index') }}">عرض جميع الاخبار</a></li>
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
    <div class="card-header">الاخبار</div>
    <div class="card-body">
        <div class="mb-3">
        <form class="form-inline my-2 my-lg-0 " action="{{ route('search') }}" method="POST">
            @csrf
            <input class="form-control mr-sm-2 " name="find" type="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit">بحث</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان الخبر</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td><a href="{{route('articles.edit',['id' => $article->id])}}">تعديل</a></td>
                <td><a href="{{route('articles.trash',['id' => $article->id])}}">حذف</a></td>
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