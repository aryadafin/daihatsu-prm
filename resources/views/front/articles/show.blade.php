@extends('layout.app')

@section('title', $articleNews->name)

@section('content')

<div class="max-w-5xl mx-auto px-4 py-20">

    <img
        src="{{ Storage::url($articleNews->thumbnail) }}"
        alt="{{ $articleNews->name }}"
        class="w-full h-[500px] rounded-3xl object-cover">

    <div class="mt-10">

        <div class="flex gap-3 text-gray-500 text-sm">

            <span>{{ $articleNews->author?->name }}</span>

            <span>•</span>

            <span>{{ $articleNews->created_at->format('d M Y') }}</span>

        </div>
        

        <h1 class="text-5xl font-bold mt-4">

            {{ $articleNews->name }}

        </h1>

    </div>

    <div class="prose max-w-none mt-10
            prose-headings:text-black
            prose-p:text-black
            prose-strong:text-black text-justify">
    {!! $articleNews->content !!}
</div>

</div>


@endsection