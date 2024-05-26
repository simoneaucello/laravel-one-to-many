@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('title')
    Dettaglio progetto:
@endsection

@section('content')
    <div class="container d-flex my-5 ">
        <div class="">
            <h1> {{ $project->title }} </h1>
            @if ($project->type)
                <p>Tipologia: <span class="badge text-bg-success"> {{ $project->type->name }} </span> </p>
            @endif
        </div>

        <div class="me-3 d-block">
            <a href="{{ route('admin.projects.edit', $project) }}" class=" btn bg-warning text-dark m-1"><i
                    class="fa-solid fa-pen"></i></a>
            {{-- DELETE FORM  --}}
            @include('admin.partials.formdelete')
        </div>

        <div class="mx-5">
            <h2>{{ $project->title }}</h2>
            <p class="mt-5">
                {{ $project->description }} </p>
            <p class="mt-3 fw-bold"> {{ $project->prog_lang }} </p>

            <img class="img-fluid img-show" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                onerror="this.src='/img/no-image.png'">
        </div>

    </div>
@endsection
