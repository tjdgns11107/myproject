@extends('header.header')

@section('content')

@if(session()->has('flash_message'))
    <div class="alert" role="alert">
        {{ session('flash_message') }}
    </div>
@endif

<aside>
    <div>
        사이드 바
    </div>
</aside>

<section>
    <article>
        <div>글1</div>
    </article>
    <article>
        <div>글2</div>
    </article>
</section>

    @include('partials.footer')

@stop
