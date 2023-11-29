{{-- search --}}
@extends('layouts.ensaignant')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection


@section('body')
    <style>
        .form-control2 {
            border-radius: 15px;
            height: 40px;
            min-width: 250px;
            border: 1px solid rgb(95, 223, 255);
            background-color: rgb(255, 255, 255);
            background-image: url("{{ asset('image/search.png') }}");
            background-position: 3% 50%;
            background-repeat: no-repeat;
            background-size: auto 80%;
        }

        .bg-danger {
            background-color: rgba(59, 237, 35, 0.625);
            color: white;
        }

        tbody td:first-child {
            width: 100px;
        }

        .theTmpHoverer:hover {
            background-color: rgb(227, 227, 227);
            transition: all 0.3s ease;
        }
    </style>
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Absece </h2>
    </div>

    <div class="container-xl card rounded-3 container-sm container-md p-0 mt-1 pt-2 pb-3">
        <h3 class="p-3 pb-0">Search </h3>
        <div class="card-body  rounded-3 row row-cols-1 row-cols-xl-4 row-cols-sm-1 p-4 row-cols-md-1">
            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Date</div>
                    <div class="col">
                        <input class="form-control" type="date" id="date-input" name="">
                    </div>
                </div>
            </div>
            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Heure Debut</div>
                    <div class="col">
                        <select class="form-select" id="heure-debut-select" name="">
                            <option>8:30</option>
                            <option>10:30</option>
                            <option>2:30</option>
                            <option>4:30</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Heure Fin</div>
                    <div class="col">
                        <select class="form-select" id="heure-fin-select" name="">
                            <option>10:30</option>
                            <option>12:30</option>
                            <option>4:30</option>
                            <option>6:30</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Classe </div>
                    <div class="col">
                        <select class="form-select inputData_3" name="" id="inputData_3">
                            <option value=""></option>
                            <option value="DSI_2">DSI_2</option>
                            <option value="DSI_1">DSI_1</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end row-cols-1 row-cols-xl-3 row-cols-sm-1 p-4 row-cols-md-2">
            <div class="col p-1">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary rounded-4" id="load-button" type="button">Load</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-xl container-sm container-md p-0 mt-1 pt-2 pb-3">
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        <div class="card p-4">
            <div class="pt-2 pb-2">
                <h4>List des Etudiant</h4>
            </div>
            <div class="container m-0 p-0">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th></th>
                            <th>Full Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        <tr style="cursor: pointer;" class="theTmpHoverer">
                            <td>
                                <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center"
                                    style="width:70px; height:70px; overflow:hidden;">
                                    <img class="" src="{{ asset('image/profile.jpg') }}" width="auto" height="70px"
                                        alt="">
                                </div>
                            </td>
                            <td>John Doe</td>
                            <td hidden>

                                <input class="form-check-input" type="checkbox" role="switch" id="absent-checkbox-1">
                                {{--                             Counteur                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}
                            </td>
                            <td id="status-1" style="font-weight: bold;">Present</td>
                            {{--   Counteur   ^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}
                        </tr>
                        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        <!-- Add more rows here -->{{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        <tr style="cursor: pointer;" class="theTmpHoverer">
                            <td>
                                <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center"
                                    style="width:70px; height:70px; overflow:hidden;">
                                    <img class="" src="{{ asset('image/profile.jpg') }}" width="auto" height="70px"
                                        alt="">
                                </div>
                            </td>
                            <td>John Doe</td>
                            <td hidden>

                                <input class="form-check-input" type="checkbox" role="switch" id="absent-checkbox-1">
                                {{--                             Counteur                 ^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}
                            </td>
                            <td id="status-1" style="font-weight: bold;">Present</td>
                            {{--   Counteur   ^^^^^^^^^^^^^^^^^^^^^^^^^^^ --}}
                        </tr>
                        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                        <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>


        </div>



        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    </div>
@endsection



@section('script_2')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    <script>
        // function that load the list of etudient
        $(document).ready(function() {
            $('#load-button').click(function() {
                var date = $('#date-input').val();
                var heureDebut = $('#heure-debut-select').val();
                var heureFin = $('#heure-fin-select').val();
                var classe = $('#inputData_3').val();
                alert('hello id');
                // here the funcction that load hes table

            });
        });
    </script>
    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    <script>
        $(document).ready(function() {
            $('tbody').on('change', 'input[type="checkbox"]', function() {
                var checkboxId = $(this).attr('id');
                var rowId = checkboxId.split('-')[2];
                var statusElement = $('#status-' + rowId);

                if ($(this).is(':checked')) {
                    statusElement.text('Absent');
                    $(this).closest('tr').addClass('bg-danger');
                } else {
                    statusElement.text('Present');
                    $(this).closest('tr').removeClass('bg-danger');
                }
            });

            $('tbody tr ').click(function() {
                var checkbox = $(this).find('input[type="checkbox"]');
                checkbox.prop('checked', !checkbox.prop('checked')).trigger('change');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentTime = new Date();
            var currentHour = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();


            var currentDate = new Date();
            var year = currentDate.getFullYear();
            var month = String(currentDate.getMonth() + 1).padStart(2, '0');
            var day = String(currentDate.getDate()).padStart(2, '0');
            var formattedDate = year + '-' + month + '-' + day;

            var dateInput = document.getElementById('date-input');
            dateInput.value = formattedDate;


            var heureDebutSelect = document.getElementById('heure-debut-select');
            var heureFinSelect = document.getElementById('heure-fin-select');

            if ((currentHour >= 8 && currentHour < 10) || (currentHour === 10 && currentMinutes < 30)) {
                heureDebutSelect.selectedIndex = 0;
                heureFinSelect.selectedIndex = 0;
            } else if ((currentHour >= 10 && currentHour < 12) || (currentHour === 12 && currentMinutes < 30)) {
                heureDebutSelect.selectedIndex = 1;
                heureFinSelect.selectedIndex = 1;
            } else if ((currentHour >= 14 && currentHour < 16) || (currentHour === 16 && currentMinutes < 30)) {
                heureDebutSelect.selectedIndex = 2;
                heureFinSelect.selectedIndex = 2;
            } else if ((currentHour >= 16 && currentHour < 18) || (currentHour === 18 && currentMinutes < 30)) {
                heureDebutSelect.selectedIndex = 3;
                heureFinSelect.selectedIndex = 3;
            }
        });
    </script>
@endsection
