@extends('_layouts.master')

@section('body')

@include('_components.post', ['post' => $page])

<article class="my-8">
    @yield('content')
</article>

@include('_components.post-footer', ['page' => $page])

@endsection
