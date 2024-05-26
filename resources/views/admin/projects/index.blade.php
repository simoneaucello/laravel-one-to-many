@extends('layouts.admin')

@section('content')
    <div class="container my-5">

        <h1>Progetti:</h1>

        <table class="table crud-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Linguaggi utilizzati</th>
                    <th scope="col">Azioni</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td><img class="cover-img" src="{{ asset('storage/' . $project->image) }}  "
                                alt="{{ $project->title }}" onerror="this.src='/img/no-image.png'">
                        </td>
                        <td class="fw-bold">{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->prog_lang }}</td>
                        <td>
                            <div class="d-flex ">
                                <a href="{{ route('admin.projects.show', $project) }}"
                                    class=" btn bg-success text-white m-1"> <i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning m-1"><i
                                        class="fa-solid fa-pencil"></i></a>
                                @include('admin.partials.formdelete')
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
