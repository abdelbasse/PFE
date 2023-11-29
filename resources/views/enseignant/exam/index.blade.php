{{-- search --}}
@extends('layouts.ensaignant')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection


@section('body')
    <style>
        .mybg-danger {
            background-color: #e33f2d9e;
            color: white;
        }

        .mybg-success {
            background-color: rgba(0, 207, 0, 0.386);
        }

        #alertsContainer {
            z-index: 3;
            max-height: 300px;
            overflow: hidden;
            position: fixed;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column-reverse;
            align-items: flex-end;
        }
    </style>
    <div class="container-xl container-sm container-md p-0 pt-5 pb-3">
        <h2>Les Note </h2>
    </div>

    <div id="alertsContainer"></div>

    <div class="container-xl card rounded-3 container-sm container-md p-0 mt-1 pt-2 pb-3">
        <h3 class="p-3 pb-0">Search </h3>
        <div class="card-body  rounded-3 row row-cols-1 row-cols-xl-4 row-cols-sm-1 p-4 row-cols-md-1">

            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Module </div>
                    <div class="col">
                        <select class="form-select inputData_3" name="" id="inputData_1">
                            <option value=""></option>
                            <option value="Module1">Module1</option>
                            <option value="Module2">Module2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Semestre </div>
                    <div class="col">
                        <select class="form-select inputData_3" name="" id="inputData_2">
                            <option value=""></option>
                            <option value="Semester Nb_1">Semester Nb_1</option>
                            <option value="Semester Nb_2">Semester Nb_2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Numero Controle </div>
                    <div class="col">
                        <select class="form-select inputData_3" name="" id="inputData_3">
                            <option value=""></option>
                            <option value="Controle Nb_1">Controle Nb_1</option>
                            <option value="Controle Nb_2">Controle Nb_2</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col p-1">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xl-1 row-cols-md-2">
                    <div class="col">Classe </div>
                    <div class="col">
                        <select class="form-select inputData_3" name="" id="inputData_4">
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
                    <button class="btn btn-primary  pb-1 pt-1" id="load-button" type="button">Load Table</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-xl container-sm container-md p-0 mt-1 pt-2 pb-3">
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        <div class="card p-4">
            <div class="row d-flex pt02 pb-4">
                <div class="col d-flex align-items-end">
                    <h4>List des Etudiant</h4>
                </div>
                <div class="col d-flex justify-content-end ">
                    <button class="btn btn-success p-3 pb-0 pt-0" id="btn-saveData"
                        style="border-radius: 100px;">Save</button>
                </div>
            </div>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th></th>
                        <th>Full Name</th>
                        <th>Code Masar</th>
                        <th>
                            <div class="row d-flex jus">
                                <div class="col d-flex align-items-end">
                                    Grade</div>
                                <div class="col d-flex justify-content-end ">
                                    <button id="clear-grades-btn" class="btn btn-primary">Clear Grades</button>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="student-row">
                        <td>
                            <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center"
                                style="width:60px; height:60px; overflow:hidden;">
                                <img class="" src="{{ asset('image/profile.jpg') }}" width="auto" height="60px"
                                    alt="">
                            </div>
                        </td>
                        <td>John Doe</td>
                        <td>1234</td>
                        <td><input type="number" min="0" max="20" class="form-control grade-input" /></td>
                    </tr>
                    <tr class="student-row">
                        <td>
                            <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center"
                                style="width:60px; height:60px; overflow:hidden;">
                                <img class="" src="{{ asset('image/profile.jpg') }}" width="auto" height="60px"
                                    alt="">
                            </div>
                        </td>
                        <td>John Doe</td>
                        <td>1234</td>
                        <td><input type="number" min="0" max="20" class="form-control grade-input" /></td>
                    </tr>

                    <!-- Add more student rows here -->
                </tbody>
            </table>
        </div>



        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
    </div>
@endsection



@section('script_2')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // load the table of the studends
            $('#load-button').click(function() {

                const module = $('#inputData_1').val();
                const semester = $('#inputData_2').val();
                const controle = $('#inputData_3').val();
                const classe = $('#inputData_4').val();

                const selectInputs = $('.inputData_3');
                let isAnySelected = true;
                selectInputs.each(function() {
                    isAnySelected = isAnySelected && ($(this).val() !== '');
                });

                if (!isAnySelected) {
                    showAlertD("Please check the inputs");
                } else {
                    showAlertS("Loading the Table of students");
                    $.ajax({
                        url: '{{ route('Enseingant.exam') }}',
                        method: 'POST',
                        data: {
                            module: module,
                            semester: semester,
                            controle: controle,
                            classe: classe,
                            isForm: 1,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            showAlertS("Loading Table students Succesfuly !");
                            showAlertS(module + " | " + semester + " | " + controle + " | " +
                                classe);
                        },
                        error: function(xhr, status, error) {
                            showAlertS("Somthing went wrong will loading data !");
                            console.log(error);
                        }
                    });
                }
            });


            // Get all grade inputs
            const gradeInputs = $('.grade-input');
            $('#btn-saveData').click(function() {
                const allFilled = $('.grade-input').filter(function() {
                    return $(this).val() === '';
                }).length === 0;
                var condition = true;
                gradeInputs.each(function() {
                    if ($(this).val() < 0 || $(this).val() > 20) {
                        condition = false;
                    }
                });
                if (allFilled && condition) {
                    showAlertS("The Data is Sending Right now . . .    ");
                    var studentData = [];

                    $('.student-row').each(function() {
                        var studentId = $(this).find('td:nth-child(3)').text();
                        var grade = $(this).find('.grade-input').val();

                        var data = {
                            studentId: studentId,
                            grade: grade
                        };

                        studentData.push(data);
                    });

                    $.ajax({
                        url: '{{ route('Enseingant.exam') }}',
                        method: 'POST',
                        data: {
                            students: studentData,
                            isForm: 2003,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log(studentData);
                        },
                        error: function(xhr, status, error) {
                            showAlertD('Error:', error);
                        }
                    });
                } else {
                    showAlertD(
                        "Please check the inputs , one of the input may be empty or over the range ");
                }
            });

            // Add event listener to each grade input
            gradeInputs.on('input', function() {
                const studentRows = $('.student-row');
                const isEmpty = gradeInputs.toArray().every(input => input.value === '');

                var condition = false;
                gradeInputs.each(function() {
                    if ($(this).val()) {
                        condition = true;
                    }
                });
                // Remove existing classes
                studentRows.removeClass('bg-light-gray mybg-success mybg-danger');
                if (condition) {
                    // Apply background color based on input values
                    if (isEmpty) {
                        studentRows.addClass('bg-light-gray');
                    } else {
                        studentRows.addClass('mybg-success');
                    }
                    gradeInputs.each(function() {
                        const input = $(this);
                        if (input.val() === '' || input.val() < 0 || input.val() > 20) {
                            input.closest('.student-row').removeClass('mybg-success');
                            input.closest('.student-row').addClass('mybg-danger');
                        }
                    });
                }

            });
            gradeInputs.trigger('input');

            $('#clear-grades-btn').click(function() {
                gradeInputs.val(''); // Clear all grade inputs
                gradeInputs.trigger('input');
            });
        });
    </script>
    <script>
        var alertsContainer = document.getElementById('alertsContainer');

        function showAlertS(message) {
            alertsContainer.innerHTML += `<div class="alert d-flex justify-content-between alert-success bg-success text-white alert-dismissible" style="opacity:0.65;" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" role="img" style="width:20px; height:20px;" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        <div>${message}</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`;

        }

        function showAlertD(message) {
            alertsContainer.innerHTML += `<div class="alert d-flex justify-content-between alert-danger bg-danger text-white  alert-dismissible" style="opacity:0.65;" role="alert">
            <svg class="bi flex-shrink-0 me-1" role="img" style="width:20px; height:20px;" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
    <div>${message}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`;
        }
    </script>
@endsection
