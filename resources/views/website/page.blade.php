@extends('layouts.website', ['settings' => $settings, 'page' => $page])

@section('content')
{!! $page->content !!}
@endsection
