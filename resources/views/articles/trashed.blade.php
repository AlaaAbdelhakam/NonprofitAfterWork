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
                            <li class="breadcrumb-item active">المقالات المحذوفة
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="card">
    <div class="card-header">الاخبار المحذوفة</div>

    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان الخبر</th>
                <th scope="col">Restore</th>
                <th scope="col">حذف نهائي</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td><a href="{{route('articles.restore',['id' => $article->id])}}">Restore</a></td>
                <td><a href="{{route('articles.remove',['id' => $article->id])}}">حذف نهائي</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection