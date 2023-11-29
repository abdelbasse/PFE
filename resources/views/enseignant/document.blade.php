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
    </style>
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Documents </h2>
    </div>

    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}



    <div class="container-xl rounded-3 container-sm container-md p-0 mt-4 pt-2 pb-3">
        <div class="card">
            <div class="card-header p-1" style="all:unset;">
                <div class="d-flex m-0 p-0 align-content-center justify-content-between">
                    <div class="badge badge-lg badge-light-primary m-2">
                        <div class="d-flex align-items-center rounded flex-wrap p-3 pb-1 pt-1 m-0"
                            style="background-color: rgba(70, 180, 235, 0.481); ">
                            <i class='bx bx-aperture bx-sm'></i>
                            {{-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                            {{-- Path Start  --}}
                            <i class='bx bx-chevron-right bx-sm'></i> <a href="#">themes</a>
                            <i class='bx bx-chevron-right bx-sm'></i> <a href="#">html</a>
                            <i class='bx bx-chevron-right bx-sm'></i> demo1
                            {{-- PAth End --}}
                            {{-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-end row-cols-4 mb-3">
                            <div class="col-4 d-flex justify-content-end m-2">
                                <button type="button"
                                    class="btn-primary btn rounded-full d-flex justify-content-between align-content-center"
                                    style="margin-left:15px; border-radius:100px;" data-bs-toggle="modal"
                                    data-bs-target="#createModal">
                                    <i class='bx bx-folder-plus bx-sm'></i>
                                    Create
                                </button>
                                <button type="button"
                                    class="btn-primary btn rounded-full d-flex justify-content-between align-content-center"
                                    style="margin-left:15px; border-radius:100px;" data-bs-toggle="modal"
                                    data-bs-target="#uploadModal">
                                    <i class='bx bx-upload bx-sm'></i>
                                    Upload
                                </button>
                            </div>
                        </div>

                        <!-- Create Modal -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createModalLabel">Create Folder</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your form inputs or content for creating a document -->
                                        <form>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class=" rounded-3 text-center mt-4">
                                                            <i class='bx bx-folder-plus bx-md' ></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <label for="documentName" class="form-label">Folder Name</label>
                                                        <input type="text" class="form-control" id="documentName"
                                                            placeholder="Enter document name">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Modal -->
                        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your form inputs or content for uploading a file -->
                                        <form>
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class=" rounded-3 text-center mt-4">
                                                        <i class='bx bxs-file-plus bx-md'></i>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <label for="documentName" class="form-label">File</label>
                                                    <input type="file" class="form-control" id="file"
                                                        placeholder="Enter document name">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <table id="example" class="table table-striped m-0 mt-2 ">
                    <thead class=" text-secondary text-center ">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Date Creation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        {{-- Elements that will repit every time --}}
                        <tr class="">
                            <td style="width: 60px">
                                <div class=" rounded-3 text-center">
                                    <i class='bx bxs-folder bx-md'></i>
                                </div>
                            </td>
                            <td>hasan</td>
                            <td></td>
                            <td>12 jun 2031 2:40 pm</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <div>
                                        <a class="btn dropdown-toggle p-0 m-2 mb-0 mt-0 " href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">

                                            <div class="p-1 rounded" style="background-color:rgba(70, 167, 223, 0.201);">
                                                <i class='bx bx-link bx-sm'></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle p-0 m-2 mb-0 mt-0" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="p-1 rounded" style="background-color:rgba(70, 167, 223, 0.201);">
                                                <i class='bx bx-dots-horizontal-rounded bx-sm'></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu shadow rounded-bottom" style="position: absolute">
                                            <li><a class="dropdown-item" href="#">Install</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- Elements that will repit every time --}}
                        <tr class="">
                            <td style="width: 60px">
                                <div class=" rounded-3 text-center">
                                    <i class='bx bxs-file-blank bx-md'></i>
                                </div>
                            </td>
                            <td>Logo.pdf</td>
                            <td>23.12 KB</td>
                            <td>12 jun 2031 2:40 pm</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <div>
                                        <a class="btn dropdown-toggle p-0 m-2 mb-0 mt-0 " href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">

                                            <div class="p-1 rounded" style="background-color:rgba(70, 167, 223, 0.201);">
                                                <i class='bx bx-link bx-sm'></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle p-0 m-2 mb-0 mt-0" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="p-1 rounded" style="background-color:rgba(70, 167, 223, 0.201);">
                                                <i class='bx bx-dots-horizontal-rounded bx-sm'></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu shadow rounded-bottom" style="position: absolute">
                                            <li><a class="dropdown-item" href="#">Install</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                    </tbody>

                </table>
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

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
