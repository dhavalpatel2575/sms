@extends('layouts.app')
@section('title','Page Title')
@section('sidebar')
@parent
<p>this is master sidebar</p>
@endsection

@section('content')
<p> this is my body content</p>
@endsection