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

        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .square-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
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
    {{-- Reponse des etudient  --}}
    {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}

    <div class="container-xl container-sm container-md p-0 pt-3 pb-3">
        <div class="row row-cols-1 row-cols-xl-2 row-cols-md-2 row-cols-sm-1">
            <div class="col col-12 col-xl-8 col-md-8 pt-3 col-sm-12">
                <div style="min-height: 35pc;">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center">
                            <div class=" rounded  shadow m-3" style="width: 60px; height:60px; background-image:url('{{asset('image/profile.jpg')}}'); background-size:cover; background-position:center;"></div>
                            <div class="mt-2">
                                <h5 class="card-title">John Doe</h5>
                                <p class="ml-auto">Responded: May 29, 2023</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Response text goes here...</p>
                            <button class="btn btn-primary mb-3" data-toggle="collapse" data-target="#fileTable{{-- Auto increments--}}" aria-expanded="false">
                                Show Files
                            </button>
                            <div class="collapse" id="fileTable{{-- Auto increments--}}">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr >
                                            <th></th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add more rows as needed -->
                                        <tr>
                                            <td>
                                                <i class='bx bx-file-blank bx-sm'></i>
                                            </td>
                                            <td>File 1</td>
                                            <td>10 KB</td>
                                            <td><button class="btn btn-success">Install</button></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center">
                            <div class=" rounded  shadow m-3" style="width: 60px; height:60px; background-image:url('{{asset('image/profile.jpg')}}'); background-size:cover; background-position:center;"></div>
                            <div class="mt-2">
                                <h5 class="card-title">John Doe</h5>
                                <p class="ml-auto">Responded: May 29, 2023</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Response text goes here...</p>
                            <button class="btn btn-primary mb-3" data-toggle="collapse" data-target="#fileTable1{{-- Auto increments--}}" aria-expanded="false">
                                Show Files
                            </button>
                            <div class="collapse" id="fileTable1{{-- Auto increments--}}">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr >
                                            <th></th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add more rows as needed -->
                                        <tr>
                                            <td>
                                                <i class='bx bx-file-blank bx-sm'></i>
                                            </td>
                                            <td>File 1</td>
                                            <td>10 KB</td>
                                            <td><button class="btn btn-success">Install</button></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center">
                            <div class=" rounded  shadow m-3" style="width: 60px; height:60px; background-image:url('{{asset('image/profile.jpg')}}'); background-size:cover; background-position:center;"></div>
                            <div class="mt-2">
                                <h5 class="card-title">John Doe</h5>
                                <p class="ml-auto">Responded: May 29, 2023</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Response text goes here...</p>
                            <button class="btn btn-primary mb-3" data-toggle="collapse" data-target="#fileTable3{{-- Auto increments--}}" aria-expanded="false">
                                Show Files
                            </button>
                            <div class="collapse" id="fileTable3{{-- Auto increments--}}">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr >
                                            <th></th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add more rows as needed -->
                                        <tr>
                                            <td>
                                                <i class='bx bx-file-blank bx-sm'></i>
                                            </td>
                                            <td>File 1</td>
                                            <td>10 KB</td>
                                            <td><button class="btn btn-success">Install</button></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center">
                            <div class=" rounded  shadow m-3" style="width: 60px; height:60px; background-image:url('{{asset('image/profile.jpg')}}'); background-size:cover; background-position:center;"></div>
                            <div class="mt-2">
                                <h5 class="card-title">John Doe</h5>
                                <p class="ml-auto">Responded: May 29, 2023</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Response text goes here...</p>
                            <button class="btn btn-primary mb-3" data-toggle="collapse" data-target="#fileTable4{{-- Auto increments--}}" aria-expanded="false">
                                Show Files
                            </button>
                            <div class="collapse" id="fileTable4{{-- Auto increments--}}">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr >
                                            <th></th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add more rows as needed -->
                                        <tr>
                                            <td>
                                                <i class='bx bx-file-blank bx-sm'></i>
                                            </td>
                                            <td>File 1</td>
                                            <td>10 KB</td>
                                            <td><button class="btn btn-success">Install</button></td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col col-12 col-xl-4 col-md-4 pt-3 col-sm-12 sticky" style="height: 50px;">
                <div class="mb-5 mb-xl-8 pb-4 sticky-top">
                    <div class="card  card-flush bg-light h-md-50 mb-5 mb-xl-10" style="border: none;">
                        <div class="card-header p-4 ">
                            <div>
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Statistics</span>
                            </div>
                            <span class="text-gray-400 pt-1 fw-semibold fs-6">les reponse des Etudient Class :
                                DSI-2</span>
                        </div>
                        <div class="container p-4">
                            <div class="container" style="width: 300px; height: 300px;">
                                <canvas id="myChart"></canvas>
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
                                <script>
                                    const ctx = document.getElementById('myChart');
                                    new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            datasets: [{
                                                label: 'Number of students',
                                                data: [12, 5, 1],
                                                backgroundColor: [
                                                    'rgb(41, 223, 41)',
                                                    'rgb(239, 82, 82)',
                                                    'rgb(198, 190, 190)'
                                                ],
                                                hoverOffset: 15
                                            }]

                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    ticks: {
                                                        // Include a dollar sign in the ticks
                                                        callback: function(value, index, ticks) {
                                                            return '';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    });
                                </script>
                                <br><br>
                            </div>

                            <div class="container">
                                <div>
                                    <table style="width: 100%;">
                                        <tr style="padding-bottom: 10px;">
                                            <td>
                                                <div style="background-color: rgb(41, 223, 41); width: 30px; height: 20px;">
                                                </div>
                                            </td>
                                            <td>Replaied to Assignment
                                            </td>
                                        </tr>
                                        <tr style="padding-bottom: 10px;">
                                            <td>
                                                <div style="background-color: rgb(239, 82, 82); width: 30px; height: 20px;">
                                                </div>
                                            </td>
                                            <td>See the Assignment but didn't reply</td>
                                        </tr>
                                        <tr style="padding-bottom: 10px;">
                                            <td>
                                                <div
                                                    style="background-color: rgb(198, 190, 190); width: 30px; height: 20px;">
                                                </div>
                                            </td>
                                            <td>Didn't see the Assignment</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
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
