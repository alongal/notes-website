@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        Hi, my name is Alon Gal. Alon is a tree-a very solid one. The best tree in the forest! <br>
        I am the lead developer at <a href="https://stampme.com">Stamp Media</a>, a digital loyalty platform for merchants.<br>
        I used to develop mobile apps (iOS, Android) but now manage all the projects and also work as a backend developer using mainly Laravel.
        <br><br>
        The content on this site consists of code snippets that I find useful.
        I originally had all of them on my Evernote, and decided to move them onto a public website.
    </p>
    <p class="mb-6">
        If you know of better ways to write any of the content here or want to ask me a question
        feel free to <a href="mailto:alondagal@gmail.com" target="_top">email me</a>
        or message me on <a href="https://twitter.com/galalon2" target="_blank">twitter</a>
    </p>
@endsection
