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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Coure</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title">
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
        <div class="row row-cols-1 row-cols-xxl-4 row-cols-xl-4 row-cols-md-2 row-cols-sm-1">
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            {{-- Cour Loop --}}
            <div class="col p-2 contan" data-Filier="dsi" data-Title="Courenbwjhwc titre nb1" data-module="java">
                <a href="{{ route('Enseingant.courInfo', ['id' => '45678']) }}" class="card border-hover-primary bg-light"
                    style="text-decoration: none; border-radius:15px; cursor: pointer;" class="card">
                    <div class="row row-cols-1 div-cols-xl-2">
                        <div class="col-3 ">
                            <div class=" rounded p-4">
                                <i class='bx bxs-book-alt bx-md'></i>
                            </div>
                        </div>
                        <div class="col-9 p-3">
                            <div class="fs-3 fw-bold text-dark">
                                Cour titre
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-3">
                        <div class=" text-secondary mb-4"><b>Date creation : </b> 12/23/2032</div>
                        <div class="row row-cols-2 m-2 mb-0 mt-0">
                            <div class="col mb-2">Filier</div>
                            <div class="col mb-2">DSI</div>
                            <div class="col mb-2">Annee scoler</div>
                            <div class="col mb-2">1 annee</div>
                        </div>
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
            $('#example').DataTable();
        });
    </script>
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
