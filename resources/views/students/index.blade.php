@extends('layouts.main')


@section('main')
    <div class="container">

<<<<<<< HEAD
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
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary me-1">View</a>
                        <a href="" class="btn btn-warning me-1">Edit</a>
                        <form action="" method="POST">
                            <button href="" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
=======

   <a href="{{route('students.create')}}" class="btn btn-success mt-5">Create</a>
    <table class="table mt-5">
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
              <th scope="row">{{$student['id']}}</th>
              <td>{{$student['name']}}</td>
              <td>{{$student['surname']}}</td>
              <td>100</td>
              <td class="d-flex">
                   <a href="" class="btn btn-primary me-1">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning me-1">Edit</a>
                  <form action="" method="POST">
                      <button href="" class="btn btn-danger">Delete</button>
                  </form>
              </td>
            </tr>
                
            @empty
                <h3>No Students Available</h3>
            @endforelse
        </tbody>
      </table>

>>>>>>> aa4d8cfc1ebeb130db8aaa8dbed0373fd62b7428

    </div>
@endsection
