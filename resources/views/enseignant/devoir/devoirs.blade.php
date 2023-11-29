{{-- search --}}
@extends('layouts.ensaignant')

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection


@section('body')
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .dropdown-toggle::after {
            display: none;
        }

        .search {
            border-radius: 15px;
            height: 40px;
            max-width: 250px;
            border: 1px solid rgb(95, 223, 255);
            background-color: rgb(255, 255, 255);
            background-image: url("{{ asset('image/search.png') }}");
            background-position: 3% 50%;
            background-repeat: no-repeat;
            background-size: auto 80%;
            padding-left: 40px;
        }
    </style>
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Cours </h2>
    </div>

    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    <!-- Search Input -->

    <div class="container-xl rounded-3 container-sm container-md p-0 mt-4 pt-2 pb-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <input type="text" id="searchInput" class="form-control search">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create
                    New</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create devoir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-x:scroll;">
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="dateFrom" class="col-form-label">Date From:</label>
                            <input type="text" class="form-control" id="dateFrom">
                        </div>
                        <div class="col">
                            <label for="dateTo" class="col-form-label">Date To:</label>
                            <input type="text" class="form-control" id="dateTo">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="filier" class="col-form-label">Select Filier:</label>
                        <select class="form-select" id="filier">
                            <option value="filier1">Filier 1</option>
                            <option value="filier2">Filier 2</option>
                            <option value="filier3">Filier 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anneScolaire" class="col-form-label">Select Anne Scolaire:</label>
                        <select class="form-select" id="anneScolaire">
                            <option value="anne1">Anne 1</option>
                            <option value="anne2">Anne 2</option>
                            <option value="anne3">Anne 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anneScolaire" class="col-form-label">Select Module:</label>
                        <select class="form-select" id="anneScolaire">
                            <option value="anne1">modul 1</option>
                            <option value="anne2">modul 2</option>
                            <option value="anne3">modul 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>



    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}



    <div class="container-xl rounded-3 container-sm container-md p-0 mt-4 pt-2 pb-3">
        <div class="row row-cols-1 row-cols-xxl-3 row-cols-xl-3 row-cols-md-2 row-cols-sm-1">
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            {{-- Cour Loop --}}
            <div class="col p-2 contan" data-statu="overdue" data-Filier="dsi" data-from="1/23/2023" data-to="1/30/2023"
                data-Title="Devoire titre nb3" data-module="jva">
                <a href="{{ route('Enseingant.devoirInfo', ['id' => '45678']) }}" class="card border-hover-primary bg-light"
                    style="text-decoration: none; border-radius:15px; cursor: pointer;" class="card">
                    <div class="row row-cols-1 div-cols-xl-2">
                        <div class="col-6 ">
                            <div class=" rounded p-4">
                                <i class='bx bxs-backpack bx-md' class="bg-white p-2 rounded"></i>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-content-center">
                            <div class=" bg-red-50 text-danger rounded p-4">
                                <span class="p-2 pt-1 pb-1"
                                    style="border-radius:7px; color:red; border:1px solid red; background-color:rgba(227, 107, 107, 0.352);">OverDue</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4 pb-0 pt-0 text-secondary m-0 p-0">
                        <div class="col-12 ">
                            <div class="fs-3 fw-bold text-dark">
                                Devoire titre
                            </div>
                        </div>
                        <div class=" text-secondary mb-4"><b>Date creation : </b> 12/23/2032</div>
                        <div class="row row-cols-2 m-2 mb-0 mt-0">
                            <div class="col mb-2"><b>Filier</b></div>
                            <div class="col mb-2">DSI</div>
                            <div class="col mb-2"><b>Annee scoler</b></div>
                            <div class="col mb-2">1 annee</div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0 pt-0">
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">From Date</div>
                            </div>
                        </div>
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">To Date</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-3 mb-4 border-2 border-primary" role="progressbar"
                        aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 25%"></div>
                    </div>
                </a>
            </div>
            <div class="col p-2 contan" data-statu="completed" data-Filier="dsi" data-from="9/23/2023"
                data-to="9/30/2023" data-Title="Devoire titre nb2" data-module="java">
                <a href="{{ route('Enseingant.courInfo', ['id' => '45678']) }}" class="card border-hover-primary bg-light"
                    style="text-decoration: none; border-radius:15px; cursor: pointer;" class="card">
                    <div class="row row-cols-1 div-cols-xl-2">
                        <div class="col-6 ">
                            <div class=" rounded p-4">
                                <i class='bx bxs-backpack bx-md' class="bg-white p-2 rounded"></i>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-content-center">
                            <div class=" bg-red-50 text-danger rounded p-4">
                                <span class="p-2 pt-1 pb-1"
                                    style="border-radius:7px; color:rgb(14, 173, 0); border:1px solid rgb(14, 173, 0); background-color:rgba(65, 188, 121, 0.352);">Completed</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4 pb-0 pt-0 text-secondary m-0 p-0">
                        <div class="col-12 ">
                            <div class="fs-3 fw-bold text-dark">
                                Devoire titre
                            </div>
                        </div>
                        <div class=" text-secondary mb-4"><b>Date creation : </b> 12/23/2032</div>
                        <div class="row row-cols-2 m-2 mb-0 mt-0">
                            <div class="col mb-2"><b>Filier</b></div>
                            <div class="col mb-2">DSI</div>
                            <div class="col mb-2"><b>Annee scoler</b></div>
                            <div class="col mb-2">1 annee</div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0 pt-0">
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">From Date</div>
                            </div>
                        </div>
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">To Date</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-3 mb-4 border-2 border-primary" role="progressbar"
                        aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 25%"></div>
                    </div>
                </a>
            </div>
            <div class="col p-2 contan" data-statu="pregress" data-Filier="dsi" data-from="12/23/2023"
                data-to="12/30/2023" data-Title="Devoire titre nb1" data-module="java">
                <a href="{{ route('Enseingant.courInfo', ['id' => '45678']) }}" class="card border-hover-primary bg-light"
                    style="text-decoration: none; border-radius:15px; cursor: pointer;" class="card">
                    <div class="row row-cols-1 div-cols-xl-2">
                        <div class="col-6 ">
                            <div class=" rounded p-4">
                                <i class='bx bxs-backpack bx-md' class="bg-white p-2 rounded"></i>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-content-center">
                            <div class=" bg-red-50 text-danger rounded p-4">
                                <span class="p-2 pt-1 pb-1"
                                    style="border-radius:7px; color:rgb(0, 89, 255); border:1px solid rgb(0, 89, 255); background-color:rgba(43, 165, 206, 0.352);">in
                                    Progress</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4 pb-0 pt-0 text-secondary m-0 p-0">
                        <div class="col-12 ">
                            <div class="fs-3 fw-bold text-dark">
                                Devoire titre
                            </div>
                        </div>
                        <div class=" text-secondary mb-4"><b>Date creation : </b> 12/23/2032</div>
                        <div class="row row-cols-2 m-2 mb-0 mt-0">
                            <div class="col mb-2"><b>Filier</b></div>
                            <div class="col mb-2">DSI</div>
                            <div class="col mb-2"><b>Annee scoler</b></div>
                            <div class="col mb-2">1 annee</div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0 pt-0">
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">From Date</div>
                            </div>
                        </div>
                        <div class="col">
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div class=" fw-bold">29 Jan, 2023</div>
                                </div>
                                <div class="fw-semibold fs-6 text-gray-400">To Date</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress m-3 mb-4 border-2 border-primary" role="progressbar"
                        aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-primary" style="width: 25%"></div>
                    </div>
                </a>
            </div>
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        </div>
    </div>
@endsection


@section('script_1')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            const searchInput = $('#searchInput');
            const elements = $('.contan');

            searchInput.on('input', function() {
                const searchValue = $(this).val().trim().toLowerCase();

                elements.each(function() {
                    const dataVals = $(this).data();
                    let found = false;

                    $.each(dataVals, function(key, value) {
                        if (String(value).toLowerCase().includes(searchValue)) {
                            found = true;
                            return false; // Exit the loop
                        }
                    });

                    if (found) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection
