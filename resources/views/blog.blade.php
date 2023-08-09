<x-layout>
    <x-slot name="title">
        <title>Blog</title>
    </x-slot>
    <h1>{{$blog->title }}</h1>
    <p>{{ $blog->intro }}</p>
    <a href="/">Go back</a>
</x-layout>
