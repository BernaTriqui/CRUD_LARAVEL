@extends('dashboard.master')

@section('content')


@include('dashboard.partials.validation-error')

<form action="{{ route("category.update", $category->id) }}" method="POST">
    @method('put')

@include('dashboard.category._form')
</form>
@endsection