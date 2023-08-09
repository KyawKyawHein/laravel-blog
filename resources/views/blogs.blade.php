<!-- <x-layout>
    <x-slot name="title">
        <title>Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
        <p>Author - <a href="/authors/{{ $blog->author->name }}">{{ $blog->author->name }}</a></p>
        <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a><br>
        <small>published at {{$blog->created_at}}</small>
        <p>{{$blog->intro}}</p>
    @endforeach
</x-layout> -->

<x-layout>
    <x-hero/>
    <x-blogs-section :blogs="$blogs" />
    <x-subscribe/>
</x-layout>
