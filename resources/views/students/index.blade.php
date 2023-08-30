@extends('layouts.main')


@section('main')
    <div class="container">

        <a href="" class="btn btn-success mt-5">Create</a>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="d-flex">
                        <a href="" class="btn btn-primary me-1">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning me-1">Edit</a>
                        <form action="" method="POST">
                            <button href="" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
