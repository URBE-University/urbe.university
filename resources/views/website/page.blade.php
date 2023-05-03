@extends('layouts.website', ['settings' => $settings, 'page' => $page])

@section('content')
{!! eval("?>$page_content") !!}
@endsection
