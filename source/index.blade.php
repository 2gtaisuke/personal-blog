---
pagination:
    collection: articles
    perPage: 10
---
@extends('_layouts.master')

@section('body')
    @foreach($pagination->items as $article)
        <div class="row article-index">
            <div class="col-lg-10">
                <h1>{{ $article->title }}</h1>
            </div>
            <div class="col-lg-2">
                <div class="info">{{ $page->format_date($article->date) }}</div>
            </div>
            <a href="{{ $article->getPath() }}"></a>
        </div>
    @endforeach
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            @if($previous = $pagination->previous)
                <li class="page-item"><a class="page-link" href="{{ $page->baseUrl }}{{ $pagination->previous }}">Previous</a></li>
            @else
                <li class="page-item disabled"><a class="page-link" href="">Previous</a></li>
            @endif

            @foreach($pagination->pages as $page_number => $path)
                    @if($pagination->currentPage == $page_number)
                        <li class="page-item disabled"><a class="page-link" href="">{{ $page_number }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $page->baseUrl }}{{ $path }}">{{ $page_number }}</a></li>
                    @endif
                @endforeach

            @if($next = $pagination->next)
                <li class="page-item"><a class="page-link" href="{{ $page->baseUrl }}{{ $pagination->next }}">Next</a></li>
            @else
                <li class="page-item disabled"><a class="page-link" href="">Next</a></li>
            @endif
        </ul>
    </nav>
@endsection