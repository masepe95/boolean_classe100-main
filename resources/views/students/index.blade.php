@extends('layouts.main')


@section('main')
    <div class="container">


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
                     {{-- Delete Button --}}
                <form id="delete-form" action="{{ route('students.destroy', $student) }}" method="POST">
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
    <script>
        const deleteForm = document.getElementById('delete-form');
        deleteForm.addEventListener('submit', e => {
            e.preventDefault();
            const hasConfirmed = confirm('Are you sure you want to delete this student?');
            if (hasConfirmed) deleteForm.submit()
        })
    </script>
@endsection
