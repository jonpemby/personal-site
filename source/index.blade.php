@extends('_layouts.master')

@section('body')

@each('_components.post', $posts, 'post', '_components.post-empty')

@endsection
