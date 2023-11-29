{{-- search --}}
@extends('layouts.ensaignant')

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        .square-container {
            position: relative;
            padding-bottom: 100%;
            /* Set the height of the container to maintain a square aspect ratio */
            overflow: hidden;
        }
    </style>
@endsection


@section('body')
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Devoir </h2>
        <span class="text-secondary">index</span>
    </div>


    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <div class="card container-xl container-xxl container-sm container-md bg-light rounded-3">
            <div class=" card-body row row-cols-1 row-cols-xl-2 row-cols-sm-1 row-cols-md-1 ">

                <div class="col-3 col-sm-3 col-xl-2 col-md-12">
                    <div class=" rounded-3 shadow p-4"
                        style="background-image:url({{ asset('image/tasks.png') }}); background-size: 70%; background-repeat:no-repeat; background-position:50% 50%; width:150px; height:150px;">
                    </div>
                </div>
                <div class="col col-xl-10 col-md-12  mt-md-4">
                    <div class="row row-cols-1 row-cols-xl-4 row-cols-sm-1 row-cols-md-2 m-0 mt-4 mt-sm-4 mt-xl-0 mt-md-0">
                        <div class="col col-12 col-xl-12 col-sm-12 col-md-12 mb-4 ">
                            <div class="row row-cols-1 row-cols-xl-2 row-cols-md-2 row-cols-sm-1">
                                <h3>Nom de Devoir</h3>
                                <div class="col-12 d-flex  justify-content-end">
                                    <a href="{{ route('Enseingant.updateDevoir', ['id' => $id]) }}"
                                        class="btn text-center btn-outline-primary" style="border-radius: 100px;">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-xl-3 col-sm-12 col-md-3 mb-2 text-secondary ">
                            <b>Statu </b>
                        </div>
                        <div class="col col-12 col-xl-9 col-sm-12 col-md-9 text-secondary mb-4">
                            <span class="p-2 pt-1 pb-1"
                                style="border-radius:7px; color:red; border:1px solid red; background-color:rgba(227, 107, 107, 0.352);">OverDue</span>
                        </div>
                        <div class="col col-12 col-xl-3 col-sm-12 col-md-3 mb-2 text-secondary ">
                            <b>Module </b>
                        </div>
                        <div class="col col-12 col-xl-9 col-sm-12 col-md-9 text-secondary mb-4">
                            <span>Gestion de Projet</span>
                        </div>
                        <div class="col col-12 col-xl-3 col-sm-12 col-md-3 mb-2 text-secondary ">
                            <b>Filiers </b>
                        </div>
                        <div class="col col-12 col-xl-9 col-sm-12 col-md-9 text-secondary mb-4">
                            <span>DSI_2</span>
                        </div>
                        <div class="col col-12 col-xl-3 col-sm-12 col-md-3 mb-2 text-secondary ">
                            <b>Anne Scroller </b>
                        </div>
                        <div class="col col-12 col-xl-9 col-sm-12 col-md-9 text-secondary mb-4">
                            <span>2 annee</span>
                        </div>

                    </div>
                    <div class="row row-cols-1 row-cols-xl-2 row-cols-md-1 row-cols-sm-1 m-0 mt-4 mt-sm-4 mt-xl-0 mt-md-0">

                        <div class="col col-12 col-xl-3 col-sm-12 col-md-3 mb-4  text-secondary mb-4">
                            <b>Description </b>
                        </div>
                        <div class="col col-12 col-xl-9 col-sm-12 col-md-9 mb-4  text-secondary mb-4">
                            somthing iscuCSCSCISCASOC
                        </div>
                    </div>
                </div>


            </div>
            <div class="progress m-3 mb-4 border-2 border-primary" role="progressbar" aria-label="Example with label"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 25%"></div>
            </div>

            <div class="card-footer m-0 p-0 bg-light" style="border:none;">
                <div class="container d-flex">
                    <a href="{{ route('Enseingant.devoirInfo', ['id' => $id]) }}" style="all:unset; cursor: pointer;"
                        class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">OverView</a>
                    <a href="{{ route('Enseingant.devoirInfo.repons', ['id' => $id]) }}" style="all:unset; cursor: pointer;"
                        class=" rounded-top text-secondary border p-4 m-0 pt-2 pb-2">Reponses</a>
                </div>
            </div>
        </div>
    </div>


    {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
    {{-- document asiign to cour --}}
    {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}

    <div class="container-xl container-sm container-md p-0 pt-3 pb-3">
        <div class="card container-xl container-xxl container-sm container-md bg-light rounded-3">
            <div class="card-body m-0 p-0 mt-4">
                <div class="row">
                    <div class="col-6">
                        <h4>Files</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end addRowButton">
                        <img width="40px" class="addRowButton" data-toggle="modal" data-target="#addRowModal"
                            data-card-id="1" style="cursor: pointer" height="40px" src="{{ asset('image/add (1).png') }}"
                            alt="">
                    </div>
                </div>
                <div class="card-body m-0 p-0 mt-2">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th class="p-3 min-w-30px text-center" style="max-width: 10px"></th>
                                <th class="p-3 min-w-140px text-center">Name</th>
                                <th class="p-3 min-w-40px text-center">Size</th>
                                <th class="p-3 min-w-150px text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="p-3">
                                <td class="text-center">
                                    <i class="bx bx-file-blank bx-sm"></i>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-hover-primary mb-1 fs-6">
                                        index.html
                                    </a>
                                </td>
                                <td class="text-center text-dark fw-bold fs-6 pe-0">
                                    5.4MB
                                </td>
                                <td class="text-center">
                                    <div class="btn btn-danger">Remove</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRowModalLabel">Select a File</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- File selection form -->
                    <form>
                        <div class="mb-3">
                            <label for="fileInput" class="form-label">Choose a file:</label>
                            <input type="file" class="form-control" id="fileInput">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script_1')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
