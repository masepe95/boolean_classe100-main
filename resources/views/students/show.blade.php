@extends('layouts.main')


@section('main')
    <div class="container mt-5">

        <button class="btn btn-dark"><a class="text-white" href="{{ route('students.index') }}">
                <- Torna a students</a></button>

        <h1 class="mt-3 pb-3">Student info:</h1>

        <div class="card w-75 p-3">
            <h3>Name:</h3>
            <span class="pb-3">{{ $student->name }}</span>
            <h3>Surname:</h3>
            <span class="pb-3">{{ $student->surname }}</span>
        </div>

    </div>
@endsection
