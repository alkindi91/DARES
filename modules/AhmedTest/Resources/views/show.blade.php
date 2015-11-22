@extends('layouts.master')

@section('content')
<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>
@stop