@extends('layouts.main')


@section('main')
    <div class="container-md">
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg bg-light rounded-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="img-fluid"
                        src="https://yt3.googleusercontent.com/UXFC9eFKxjbOcUeEiIFqpywdInXJijIrh5bkfUMPlKhCLKaO6rrTfh5O5IzNTS_2Wap2yBk1J44=s900-c-k-c0x00ffffff-no-rj"
                        alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="fw-bold nav-link" aria-current="page"
                                href="{{ route('students.index') }}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--MAIN-CONTENT-->
        <main class="home_content bg-light pb-3">
            <h1 class="text-center pt-3 fw-bold">WELCOME!</h1>
            <img class="flex-start" src="https://cdn.pixabay.com/photo/2013/07/12/18/03/pointer-152868_1280.png"
                alt="content">
            <h2 class="ps-3 d-inline fw-bold">Come and discover our students!</h2>
        </main>


    </div>
@endsection
