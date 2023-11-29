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
        <h2>Cour </h2>
        <span class="text-secondary">Update</span>
    </div>

    <div class=" card container-xl container-sm container-md p-0 pt-3 pb-3">
        <div class="card-body m-0 p-0 mt-4 p-4 pt-0 pb-0">
            <form method="POST" action="{{ route('Enseingant.update', ['id' => $id]) }}">
                @csrf
                <div class="mb-3 row">
                    <label for="title" class="col-md-4 col-form-label">Title:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="title" name="title" value="" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="class" class="col-md-4 col-form-label">Class:</label>
                    <div class="col-md-8">
                        <select class="form-select" id="class" name="class">
                            <!-- Options for class select -->
                            <option value="class1">Class 1</option>
                            <option value="class2">Class 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="annescoller" class="col-md-4 col-form-label">Annescoler:</label>
                    <div class="col-md-8">
                        <select class="form-select" id="annescoller" name="annescoller">
                            <!-- Options for annescoller select -->
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="modul" class="col-md-4 col-form-label">Modul:</label>
                    <div class="col-md-8">
                        <select class="form-select" id="modul" name="modul">
                            <!-- Options for modul select -->
                            <option value="modul1">Modul 1</option>
                            <option value="modul2">Modul 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="description" class="col-md-4 col-form-label">Description:</label>
                    <textarea class="form-control" id="description" id="modul" ></textarea>
                </div>


                <div class="mb-3 row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
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
