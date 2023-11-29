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
                <a href="{{ route('Enseingant.student.devoir', ['idm' => 'jially']) }}" style="all:unset; cursor: pointer;"
                    class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">Devoire</a>
            </div>
        </div>
    </div>

    <div class="container-xl container-xxl container-sm container-md p-0 pt-5 pb-3">

        <div class="row justify-content-between row-cols-1 row-cols-xl-2 row-cols-md-2 row-cols-sm-1">
            <div class="col-4 ">
                <div>
                    <h3>Devoire </h3>
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
    <div class="container-xl container-xxl container-sm container-md p-0 rounded-3 mb-4">

        <div class="row row-cols-1 rounded-3 m-0 mt-4 p-4 bg-light">
            <div class="itemHeader">
                <div class="col p-0 m-0">
                    <div class="h-25">
                        <div class="row row-cols-1 row-cols-xl-2 row-cols-sm-1">
                            <div class="col-12 col-xl-1 col-md-2">
                                <div>
                                    <div class="d-flex justify-content-center align-content-center"
                                        style="width: 80px; background-color:rgb(76, 162, 224); border-radius:12px; height:80px;">
                                        <img src="{{ asset('image/task.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-9 col-md-9 p-4">
                                <h4>Labelle Title de Devoir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-0 m-0 pt-4">
                    <div class="d-flex flex-wrap justify-content-start">
                        <div class="m-2">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">From Date</div>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="border border-gray-300 rounded py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">31 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">To Date</div>
                            </div>
                        </div>
                    </div>

                    <div class=" m-2">
                        <button style="min-width: 80px;" class="btn btn-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#moreInfoContent" aria-expanded="false"
                            aria-controls="moreInfoContent">More Info</button>
                    </div>
                </div>
            </div>
            <div class="collapse" id="moreInfoContent" class=" card m-2 p-0 border-b rounded">
                <div class="card-header">
                    <h5><b>Response Text:</b></h5>
                    <p>Response & Description</p>
                    <br>
                    <h5><b>Files:</b></h5>
                </div>
                <div class="card-body bg-secondary p-0 p-xl-4 p-md-4 rounded-bottom">
                    <div class="container p-0 m-0">
                        <div class="card card-xl-stretch mb-xl-8" style="overflow:scroll;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="p-3 min-w-30px text-center"></th>
                                        <th class="p-3 min-w-140px text-center">Name</th>
                                        <th class="p-3 min-w-120px text-center">Extension</th>
                                        <th class="p-3 min-w-40px text-center">Size</th>
                                        <th class="p-3 min-w-150px text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="p-3">
                                        <td class="text-center">
                                            <i class='bx bx-file-blank bx-sm'></i>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-hover-primary mb-1 fs-6">
                                                index.html
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            HTML
                                        </td>
                                        <td class="text-center text-dark fw-bold fs-6 pe-0">
                                            5.4MB
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success">
                                                Install
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 rounded-3 m-0 mt-4 p-4 bg-light">
            <div class="itemHeader">
                <div class="col p-0 m-0">
                    <div class="h-25">
                        <div class="row row-cols-1 row-cols-xl-2 row-cols-sm-1">
                            <div class="col-12 col-xl-1 col-md-2">
                                <div>
                                    <div class="d-flex justify-content-center align-content-center"
                                        style="width: 80px; background-color:rgb(76, 162, 224); border-radius:12px; height:80px;">
                                        <img src="{{ asset('image/task.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-9 col-md-9 p-4">
                                <h4>Labelle Title de Devoir</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-0 m-0 pt-4">
                    <div class="d-flex flex-wrap justify-content-start">
                        <div class="m-2">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">From Date</div>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="border border-gray-300 rounded py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">31 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">To Date</div>
                            </div>
                        </div>
                    </div>

                    <div class=" m-2">
                        <button style="min-width: 80px;" class="btn btn-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#moreInfoContent2" aria-expanded="false"
                            {{-- kfpojjv increee                         ^^^^^^     --}}
                            aria-controls="moreInfoContent2">More Info</button>
                            {{-- incressssss i ++ --}}
                    </div>
                </div>
            </div>
            <div class="collapse" id="moreInfoContent2" class=" card m-2 p-0 border-b rounded">
                {{--                         ^^^     --}}
                <div class="card-header">
                    <h5><b>Response Text:</b></h5>
                    <p>Response & Description</p>
                    <br>
                    <h5><b>Files:</b></h5>
                </div>
                <div class="card-body bg-secondary p-0 p-xl-4 p-md-4 rounded-bottom">
                    <div class="container p-0 m-0">
                        <div class="mb-xl-8" style="overflow:scroll;">
                            <div class="d-flex justify-content-center align-content-center">
                                <div class="text-center m-5">
                                    <img src="{{asset('image/fileEmpty.png')}}" width="100px" height="auto" alt="">
                                    <br>
                                    <div class="text-white"><b>No File Hase Been Assigne to the Devoir</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script_2')
@endsection
