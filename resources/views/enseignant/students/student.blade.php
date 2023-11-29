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

    <div class="conatiner -xl container-xxl  container-sm container-md rounded-3 mt-5 p-0">
        <div class="row  m-0 p-0 ">
            <div class="col-12 col-xl-4 col-sm-12 col-md-4 p-0 p-xl-2 mb-2" style="padding-left: 0;">
                <div class="container bg-primary rounded p-4">
                    <div class="row" style="height: 80px">
                        <div class="col-2">
                            <i class='bx bx-calendar bx-md'></i>
                        </div>
                        <div class="col-10 ">
                                <div class="text-white mb-2"><b>Totale Absence :</b><br></div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-10">

                            <div class=" number-div text-white">150</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-12 col-md-4 p-0 p-xl-2  mb-2 ">
                <div class="container bg-warning rounded p-4">
                    <div class="row" style="height: 80px">
                        <div class="col-2">
                            <i class='bx bx-task bx-md'></i>
                        </div>
                        <div class="col-10 ">
                            <div class="text-white mb-2"><b>Totale Devoir Complete :</b><br></div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-10">

                            <div class=" number-div text-white">150</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- idont kow what the fuck i shoul ut there but fuck it --}}
            <div class="col-12 col-xl-4 col-sm-12 col-md-4 p-0 p-xl-2  mb-2 ">
                <div class="container bg-danger rounded p-4">
                    <div class="row " style="height: 80px">
                        <div class="col-2">
                            <i class='bx bx-calendar bx-md'></i>
                        </div>
                        <div class="col-10 ">
                                <div class=" text-white mb-2"><b>Totale Absence au votre Module :</b><br></div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-10">
                            <div class=" number-div text-white">150</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl container-xxl  container-sm container-md rounded-3 mt-5 p-0">
        <div class="row  m-0 p-0">


            <div class="col-12 col-xl-8 col-sm-12 col-md-12 p-0 m-0 mb-4 pr-4 pr-xl-4 p-sm-0 p-md-0 "
                style="padding-right:40px; ">
                {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                <div class="container " style=" padding-left:0px;">
                    {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                    <div id="moduleCarousel" class="carousel slide card m-0 p-0" data-bs-ride="carousel">
                        <div class="card-header d-flex justify-content-between align-content-center">
                            <button class="text-center" type="button" style="all:unset;" data-bs-target="#moduleCarousel"
                                data-bs-slide="prev"><i class='bx bxs-skip-previous-circle bx-sm'></i> Previous
                            </button>
                            <button class=" text-center" type="button" style="all:unset;" data-bs-target="#moduleCarousel"
                                data-bs-slide="next">Next <i class='bx bxs-skip-next-circle bx-sm'></i>
                            </button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col">
                                        <div class="card bg-light rounded-1 p-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Module 1</h4>
                                                <p class="card-subtitle text-muted">Secondary Small Description 1</p>
                                                <div style="height:400px;">
                                                    <canvas id="myChart_0"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <div class="card bg-light rounded-1 p-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Module 3</h4>
                                                <p class="card-subtitle text-muted">Secondary Small Description 3</p>
                                                <div style="height:400px;">
                                                    <canvas id="myChart_1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-12 col-md-8 p-0 m-0 mb-4">
                <div class="card bg-light rounded-1 p-3 ">
                    <div class="card-body">
                        <h4 class="card-title">Tout examan</h4>
                        <p class="card-subtitle text-muted">Secondary Small Description</p>
                        <div class="pt-5 pb-3" style="height:400px;">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>

            </div>


        </div>




    </div>

@endsection


@section('script_2')
    <script>
        var numberDivs = document.getElementsByClassName('number-div');
        var durations = [1500, 2000, 2500]; // Animation durations in milliseconds
        var frameDuration = 15; // Interval between frames in milliseconds

        for (var i = 0; i < numberDivs.length; i++) {
            animateNumber(numberDivs[i], parseInt(numberDivs[i].textContent), durations[i]);
        }

        function animateNumber(div, targetNumber, duration) {
            var frames = Math.ceil(duration / frameDuration);
            var increment = Math.ceil(targetNumber / frames);

            var currentNumber = 0;
            var incrementInterval = setInterval(incrementNumber, frameDuration);

            function incrementNumber() {
                if (currentNumber < targetNumber) {
                    currentNumber += increment;
                    if (currentNumber > targetNumber) {
                        currentNumber = targetNumber;
                    }
                    div.textContent = currentNumber;
                } else {
                    clearInterval(incrementInterval);
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx2 = document.getElementById('myChart2');
        var data = {
            labels: [
                'JAVA',
                'Client / Server',
                'Gestion Projet',
                'php',
                'UML',
                'SQL / T-SQL',
                'TEC',
                'France',
                'Arabe',
                'English'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 90, 81, 56, 55, 40, 56, 55, 40],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, {
                label: 'My Second Dataset',
                data: [28, 48, 40, 19, 96, 56, 55, 40, 27, 100],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)'
            }]
        };
        var config = {
            type: 'radar',
            data: data,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        };
        new Chart(ctx2, config);
        const ctx = document.getElementById('myChart_1');
        const ctx1 = document.getElementById('myChart_0');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Controlle 1', 'Controlle 2', 'Controlle 3', 'Controlle 4'],
                datasets: [{
                    label: 'Client server',
                    data: [19, 16.5, 17, 18],
                    fill: false,
                    borderColor: 'rgb(190, 0, 230)',
                    tension: 0.25
                }, {
                    label: 'Java',
                    data: [12, 14, 9, 17],
                    fill: false,
                    borderColor: 'rgb(175, 192, 192)',
                    tension: 0.25,
                }],
            }
        });
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Controlle 1', 'Controlle 2', 'Controlle 3', 'Controlle 4'],
                datasets: [{
                    label: 'Client server',
                    data: [19, 16.5, 17, 18],
                    fill: false,
                    borderColor: 'rgb(190, 0, 230)',
                    tension: 0.25
                }, {
                    label: 'Java',
                    data: [12, 14, 9, 17],
                    fill: false,
                    borderColor: 'rgb(175, 192, 192)',
                    tension: 0.25,
                }],
            }
        });
    </script>
@endsection
