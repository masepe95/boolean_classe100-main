@extends('layouts.main')


@section('main')
    <div class="container mt-4">

        <h2 class="mb-3">Create Student</h2>

        <form method="POST" action="">
            @csrf
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-7">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                    </div>
                </div>
                <div class="col-12">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    <button class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>

    </div>
@endsection
