@extends('layouts.ensaignant')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection
{{-- <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Secteur</th>
            <th>Classe</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
{{-- Elements that will repit every time --}}
{{-- <tr>
            <td style="width: 50px">
                <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center" style="width:40px; height:40px; overflow:hidden;">
                    <img class="" src="{{asset('image/profile.jpg')}}" width="auto"  height="40px" alt="">
                </div>
            </td>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
        </tr> --}}
{{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
{{-- </tbody>
</table> --}}

@section('body')
    <style>
        .dt-row {
            overflow-y: scroll;
        }

        .form-control {
            border-radius: 15px;
            height: 40px;
            min-width: 250px;
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
        <h2>Liste Etudient : </h2>
    </div>
    <div class="container-xl container-sm container-md bg-light rounded-2 p-3">

        <table id="example" class="table table-striped m-0 mt-2 ">
            <thead class="table-dark">
                <tr>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Secteur</th>
                    <th>Classe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
                {{-- Elements that will repit every time --}}
                @foreach ($classes as $classe)
                    @foreach ($classe->students as $student)
                        <tr class="text-center">
                            <td style="width: 60px">
                                <div class="border shadow bg-white rounded-3 d-flex justify-content-center align-content-center"
                                    style="width:50px; height:50px; overflow:hidden;">
                                    <img class="" src="{{ asset($student->user->image) }}" width="auto" height="60px"
                                        alt="">
                                </div>
                            </td>
                            <td class="text-center">{{$student->nom}}</td>
                            <td class="text-center">{{$student->prenom}}</td>
                            <td class="text-center">{{$student->email}}
                            </td>
                            <td class="text-center">{{$classe->filier->nomFilier}}</td>
                            <td class="text-center">{{$classe->filier->nomFilier}}-{{$classe->niveau}}</td>
                            <td>
                                <div class="d-flex justify-content-center align-content-center">
                                    <a href="{{ route('Enseingant.student', ['idm' => $student->codeMasser]) }}"
                                        class="btn btn-primary d-flex justify-content-center align-content-center"
                                        style="border-radius:190px; width: 35px; height:35px;">
                                        <i class='bx bx-show bx-sm'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach

                {{-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| --}}
            </tbody>
        </table>
    </div>
@endsection


@section('script_2')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
