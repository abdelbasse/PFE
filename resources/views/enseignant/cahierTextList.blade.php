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
    </style>
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Cahier Texte </h2>
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
                    <div class="col">Classe</div>
                    <div class="col">
                        <select class="form-select" name="" id="">
                            @foreach ($classes as $classe)
                                <option value="{{ $classe->id }}">{{ $classe->filier->nomFilier }}-{{ $classe->niveau }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end row-cols-1 row-cols-xl-3 row-cols-sm-1 p-4 row-cols-md-2">
            <div class="col p-1">
                <div class=" d-flex justify-content-end">
                    <button class="btn btn-primary rounded-4" type="submit">Search</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl container-sm container-md p-0 pt-5">
        <div class="row justify-content-end row-cols-4">
            <div class="col-4 d-flex justify-content-end">

                @if ($cahierTextes->count() != 0)
                    <div class="btn btn-success rounded-full m-2 mb-0 mt-0 min-w-200px d-flex align-content-center justify-content-between shadow"
                        style="border-radius: 40px;"><img style="margin-right: 10px; "
                            src="{{ asset('image/xls-file.png') }}" width="25px" height="25px"> Save</div>
                @endif

                <div class="btn btn-primary rounded-full m-2 mb-0 mt-0 min-w-200px d-flex align-content-center justify-content-between shadow"
                    class="addNewButton" data-toggle="modal" data-target="#addNewModal" style="border-radius: 40px;"><img
                        style="margin-right: 10px; " src="{{ asset('image/add.png') }}" width="25px"
                        height="25px"style="cursor: pointer" height="40px">Create</div>
            </div>
        </div>
    </div>

    <div class="container-xl container-sm container-md p-0 mt-1 pt-2 pb-3">
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        @php
            $i = 0;
            function convertStringToTable($string)
            {
                $dataArray = json_decode(stripslashes($string), true);
                return $dataArray;
            }
        @endphp
        @foreach ($cahierTextes as $cahierTexte)
            <div class="pb-3 container p-3">
                <div class="row bg-light rounded shadow row-cols-1 row-cols-xl-2 row-cols-md-1 row-cols-sm-1">
                    <div class="col-2 col-xl-2 col-md-12 col-sm-12">
                        <div class="text-center pt-4">
                            <img class="mb-4" src="{{ asset('image/calendar.png') }}" width="120px" height="120px"
                                alt="">
                            <h6>{{ $cahierTexte->date }}</h6>
                            <h5>{{ $cahierTexte->heurDebut }} ~ {{ $cahierTexte->heurFin }}</h5>
                        </div>
                    </div>
                    <div class="col-12 card col-xl-10 col-md-12 col-sm-12 p-3 pt-2 rounded"
                        style="padding-right:50px; border-left:2px solid gray;">
                        <div class="card-body m-0 p-0">
                            <div class="row">
                                <div class="col">
                                    <h4>Activity</h4>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <div class="btn btn-secondary moreInfoButton" data-card-id="{{ ++$i }}"
                                        data-bs-toggle="collapse" {{-- increment or use id                                   ^^^^^^                                       --}}
                                        data-bs-target="#moreInfoCard{{ $i }}" aria-expanded="false"
                                        {{--                      ^^^^                                          --}} aria-controls="moreInfoCard{{ $i }}">
                                        {{-- increment or use id ^^^^^^                                             ^^^^^^^^                   --}}
                                        More Info</div>
                                </div>
                            </div>
                            <div class="card-body m-0 p-0 mt-2">
                                <table class="table" id="cardTable{{ $i }}" style="display: none;">
                                    {{-- increment or use id ^^^^^^ --}}
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Duree</th>
                                            <td>Description</td>
                                            <td>Option</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (convertStringToTable($cahierTexte->texte) as $row)
                                            <tr>
                                                <td>{{$row['duration']}}</td>
                                                <td>{{$row['action']}}</td>
                                                <td>
                                                    <div class="btn btn-danger" data-idAction={{$row['id']}}>Remove</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-between row-cols-1">
                                <div class="col-12 d-flex justify-content-end addRowButton">
                                    <img width="40px" class="addRowButton" data-toggle="modal" data-target="#addRowModal"
                                        data-card-id="{{ $i }}" style="cursor: pointer" height="40px"
                                        {{-- id inc    ^^^^^^ --}} src="{{ asset('image/add (1).png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    </div>


    <!-- Add Row Modal -->
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="addRowModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRowModalLabel">Add New Activite a Cahier </h5>
                    <button type="button" class="btn-close close" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputData1">Duree :</label>
                        <input class="form-control  inputData1" type="number" min="0" name=""
                            id="inputData1">
                    </div>
                    <div class="form-group">
                        <label for="inputData3">Action :</label>
                        <input class="form-control  inputData2" type="text" min="0" name=""
                            id="inputData2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addRowModalButton">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create new Cahier Text-->
    <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewModalLabel">Create New Cahier Text</h5>
                    <button type="button" class="btn-close close" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputData1">Data :</label>
                        <input class="form-control  inputData_1" type="date" name="" id="inputData_1">
                    </div>
                    <div class="form-group">
                        <label for="inputData3">Sesion :</label>
                        <select class="form-select inputData_2_1" name="" id="inputData_2_1">
                            <option value="0">8:30</option>
                            <option value="1">10:30</option>
                            <option value="2">2:30</option>
                            <option value="3">4:30</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputData3">Heure Debut :</label>
                        <select class="form-select inputData_2_2" name="" id="inputData_2_2">
                            <option value="0">10:30</option>
                            <option value="1">12:30</option>
                            <option value="2">4:30</option>
                            <option value="3">6:30</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputData2">Heure Fin :</label>
                        <select class="form-select inputData_3" name="" id="inputData_3">
                            <option value="DSI_2">DSI_2</option>
                            <option value="DSI_1">DSI_1</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addNewModalButton"
                        id="addNewModalButton">Create</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


@section('script_2')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".addRowButton").click(function() {
                var cardId = $(this).data("card-id");
                $("#addRowModal").data("card-id", cardId);
            });

            $(".addRowModalButton").click(function() {
                // |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                // function that add a new action or task or work did in the Cahier text
                // |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                var cardId = $("#addRowModal").data("card-id");
                var data1 = document.getElementById('inputData1').value;
                var data2 = document.getElementById('inputData2').value;
                $('#addRowModal').modal('hide');
                var alertText = "Card ID: " + cardId + "\n" +
                    "Input 1: " + data1 + "\n" +
                    "Input 2: " + data2 + "\n";
                alert(alertText);
            });

            $("#addNewModalButton").click(function() {
                // |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                // Function that craete a new Cahier Text
                // |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                var data_1 = document.getElementById('inputData_1').value;
                var data_2_1 = document.getElementById('inputData_2_1').value;
                var data_2_2 = document.getElementById('inputData_2_2').value;
                var data_3 = document.getElementById('inputData_3').value;
                $('#addNewModal').modal('hide');
                var alertText = "Input 1: " + data_1 + "\n" +
                    "Input 2-1: " + data_2_1 + "\n" +
                    "Input 2-2: " + data_2_2 + "\n" +
                    "Input 3: " + data_3 + "\n";
                alert(alertText);
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $(".moreInfoButton").click(function() {
                var cardId = $(this).data("card-id");
                $("#cardTable" + cardId).toggle();
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
