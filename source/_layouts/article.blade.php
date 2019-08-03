@extends('_layouts.master')

@section('body')
<article class="main-content">
    <div class="content-info">
        <h1>{{ $page->title }}</h1>
        <time>{{ $page->format_date($page->date) }}</time>
    </div>
    @yield('content')
</article>
@endsection