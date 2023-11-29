@extends('layouts.ensaignant')


@section('style')
    <style>
        .square-container {
            position: relative;
            padding-bottom: 100%;
            /* Set the height of the container to maintain a square aspect ratio */
            overflow: hidden;
        }

        .square-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .tmpTest_hover {
            all: unset;
            transition: all 0.2s ease-out;
        }

        .tmpTest_hover:hover {
            color: blue;
        }

        #form-control {
            border-radius: 15px;
            height: 40px;
            min-width: 200px;
            border: 1px solid rgb(95, 223, 255);
            background-color: rgb(255, 255, 255);
            background-image: url("{{ asset('image/search.png') }}");
            background-position: 3% 50%;
            background-repeat: no-repeat;
            background-size: auto 80%;
            padding-left: 50px;
            margin-right: 10px
        }
    </style>
@endsection


@section('body')
    <div class="container-xl container-xxl container-sm container-md p-0 pt-5 pb-3">
        <h2>Etudient </h2>
    </div>
    <div class="card container-xl container-xxl container-sm container-md bg-light rounded-3">
        <div class=" card-body row row-cols-1 row-cols-xl-2 row-cols-sm-1 row-cols-md-2 ">
            <div class="col-3 col-sm-3 col-xl-2 col-md-2">
                <div class="square-container rounded-3 shadow">
                    <img src="{{ asset('image/profile.jpg') }}" class="square-img" alt="Square Image">
                </div>
            </div>
            <div class="col col-xl-10 col-md-10">
                <div class="row row-cols-1 row-cols-xl-3 row-cols-sm-1 row-cols-md-1 m-0 mt-4 mt-sm-4 mt-xl-0 mt-md-0">
                    <div class="col col-12 col-xl-12 col-sm-12 col-md-12 mb-4 ">
                        <h3>Nom Prenom</h3>
                    </div>
                    <div class="col text-secondary mb-4">
                        <b>CM </b>
                        F123456789
                    </div>
                    <div class="col text-secondary mb-4">
                        <i class='bx bxs-envelope '></i>
                        <span>Taoudiabdelbasset@gmail.com</span>
                    </div>
                    <div class="col text-secondary mb-4">
                        <i class='bx bxs-phone'></i>
                        +212 689-381605
                    </div>
                    <div class="col text-secondary mb-4">
                        <i class='bx bxs-cake'></i>
                        27 / 12 / 2023
                    </div>
                    <div class="col text-secondary mb-4">
                        <i class='bx bxs-map'></i>
                        settate ,casablanaca
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer m-0 p-0 pt-2" style="all:unset;">
            <div class="container d-flex">
                <a href="{{ route('Enseingant.student', ['idm' => 'hasan']) }}" style="all:unset; cursor: pointer;"
                    class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">OverView</a>
                <a href="{{ route('Enseingant.student.doc', ['idm' => 'hasan']) }}" style="all:unset; cursor: pointer;"
                    class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">Documents</a>
                <a href="{{ route('Enseingant.student.devoir', ['idm' => 'hasan']) }}" style="all:unset; cursor: pointer;"
                    class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">Devoire</a>
            </div>
        </div>
    </div>

    <div
        class="container-xl container-xxl container-sm container-md p-0 pt-5 pb-3">
        <div class="row justify-content-between row-cols-1 row-cols-xl-2 row-cols-md-2 row-cols-sm-1">
            <div class="col-4 ">
                <div>
                    <h3>Documents </h3>
                    <div class="text-secondary">
                        <span> + 3087</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <form class="d-flex" action="{{ route('Enseingant.student.devoir', ['idm' => 'jially']) }}"
                        method="GET">
                        <input class="form-control pl-3" id="form-control" type="search" name="search"
                            placeholder="Search">
                        <button class="btn btn-primary rounded-4" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl container-xxl container-sm container-md  rounded-3 mb-4">
        <div class="row row-cols-1 row-cols-xxl-4 row-cols-xl-4 row-cols-md-2 row-cols-sm-1">
            <div class="col p-2">
                <div class="card h-100 ">
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <a href="?hasan/jilaly/abd9ader/doc/pdf" style=" cursor: pointer; " class="tmpTest_hover"
                            class="text-gray-800 text-hover-primary  d-flex flex-column">
                            <div class="symbol symbol-75px mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="m-4" width="60" height="60"
                                    fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                </svg>
                            </div>
                            <div class=" mb-2" style="font-weight:bold;">
                                CRM Project
                            </div>
                        </a>
                        <div class="text-secondary">
                            25 files
                        </div>
                    </div>
                </div>
            </div>
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            <div class="col p-2">
                <div class="card h-100 ">
                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                        <a href="#####" style="cursor: pointer; " class="tmpTest_hover"
                            class="text-gray-800 text-hover-primary  d-flex flex-column">
                            <div class="symbol symbol-75px mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="m-4 " width="50" height="50"
                                    fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                                </svg>
                            </div>
                            <div class=" mb-2" style="font-weight:bold;">
                                logo.png
                            </div>

                        </a>
                        <div class="text-secondary">
                            23.5 MB
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('script_2')
@endsection
