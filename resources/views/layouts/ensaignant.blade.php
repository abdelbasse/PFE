<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    @yield('style')
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i>
                <img src="{{ asset('image/Log-BTS.png') }}" style="padding-top:5px;" width="50px" height="auto" alt>
            </i>
            <span class="logo_name" style=" min-width: 150px; padding-top: 23px;">Settat</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-home bx-sm'></i>
                    <span class="link_name">Accueil</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Accueil</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('Enseingant.cours') }}">
                    <i class='bx bxs-receipt bx-sm'></i>
                    <span class="link_name">Cours</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.cours') }}">Cours</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('Enseingant.liststudent') }}">
                    <i class='bx bxs-user-detail bx-sm'></i>
                    <span class="link_name" style="min-width: 150px;">Liste Etudient</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.liststudent') }}">Liste Etudient</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('Enseingant.documents') }}">
                    <i class='bx bxs-file bx-sm'></i>
                    <span class="link_name">Documents</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.documents') }}">Documents</a></li>
                </ul>
            </li>

            <li>
                {{-- 'Enseingant.devoirs' --}}
                <a href="{{ route('Enseingant.devoirs') }}">
                    <i class='bx bxs-backpack bx-sm'></i>
                    <span class="link_name">Devoire</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.devoirs') }}">Devoire</a></li>
                </ul>

            </li>
            <li>
                <a href="{{ route('Enseingant.exam') }}">
                    <i class='bx bxs-edit bx-sm'></i>
                    <span class="link_name">Exam</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.exam') }}">Exam</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('Enseingant.absence') }}">
                    <i class='bx bx-table bx-sm'></i>
                    <span class="link_name">Absence</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.absence') }}">Absence</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('Enseingant.cahierText') }}">
                    <i class='bx bx-notepad bx-sm'></i>
                    <span class="link_name" style="min-width: 150px;">Cahier Text</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('Enseingant.cahierText') }}">Cahier Text</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-cog bx-sm'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="{{ asset(auth()->user()->image) }}" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">{{ auth()->user()->enseignant->nom }}
                            {{ auth()->user()->enseignant->prenom }}</div>
                        <div class="job">Ensaignent</div>
                        <!-- base donnee -->
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button style="all:unset;" type="submit"><i class='bx bx-log-out'></i></button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <section class="home-section m-0 p-0">
        <div class="home-content m-0 p-0">
            <div class="container-fluid shadow d-flex justify-content-between align-content-center ">
                <div class=" pt-3 pb-2">
                    <i class='bx bx-menu'></i>
                </div>
                <ul class="navbar-nav ms-auto d-flex justify-content-between align-content-center pt-3">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-light p-4 pt-1 pb-1"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown d-flex mt-1 mb-2">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" hidden action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>

        </div>
        <div style="width:100%; height:90%; overflow-x:scroll;">
            <div class="row">
                <div class="container">
                    @yield('script_1')

                    @yield('body')


                    <div class=" container-xxl  d-flex justify-content-between align-content-center">
                        <div class="text-dark d-flex justify-content-between">
                            <span class="text-secondary">2023©</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray text-primary"
                                style="all:unset; cursor: pointer;">Taoudi-Bilal-khadija</a>
                        </div>
                        <ul class="menu d-flex justify-content-between align-content-center">
                            <li class="menu-item" style="all:unset;"><a href="#"
                                    style="all:unset; cursor: pointer;" target="_blank"
                                    class="menu-link px-2">About</a>
                            </li>

                            <li class="menu-item" style="all:unset;"><a href="#"
                                    style="all:unset; cursor: pointer;" target="_blank"
                                    class="menu-link text-secondary px-2">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>


</body>

<!-- JavaScript link for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
@yield('script_2')

</html>
