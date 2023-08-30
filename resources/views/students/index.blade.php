@extends('layouts.main')


@section('main')
    <div class="container mt-5">

        {{-- Index Controls --}}
        <div class="d-flex justify-content-between align-items-center mb-5">

            {{-- Create --}}
            <a href="{{ route('students.create') }}" class="btn btn-success">Create</a>

            {{-- Search Form --}}
            <form method="GET" action="">
                <div class="input-group">
                    <input type="text" class="form-control" name="filter" placeholder="Name..." aria-label="Filter"
                        value="{{ $filter ?? '' }}">
                    <button type="submit" class="btn btn-outline-success" type="button">Search</button>
                </div>
            </form>
        </div>

        {{-- Students Table --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <th scope="row">{{ $student['id'] }}</th>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['surname'] }}</td>
                        <td>100</td>
                        <td class="d-flex">
                            <a href="" class="btn btn-primary me-1">View</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning me-1">Edit</a>
                            {{-- Delete Button --}}
                            <form action="{{ route('students.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <h3>No Students Available</h3>
                @endforelse

            </tbody>
        </table>

    </div>
@endsection
