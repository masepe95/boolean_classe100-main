@extends('layouts.main')

@section('main')
    <div class="container">

        <h2 class="mb-3">Update Student</h2>

        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $student->name }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname"
                            value="{{ $student->surname }}">
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-warning">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
        <hr>

    </div>
@endsection
