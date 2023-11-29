<!DOCTYPE html>
<html lang="en">

<head>
    <title>HASH TECHIE OFFICIAL</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: 'poppins', sans-serif;
    }

    .container2 {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
        background: url({{asset('image/Background.png')}})no-repeat;
        background-position: center;
        background-size: cover;
        z-index: 1;
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 350px;
        height: 400px;
        background: url({{asset('image/MidelImageAI.png')}})no-repeat;
        background-size: cover;
        position: relative;
        z-index: 2;

    }

    .left {
        width: 350px;
        height: 400px;
        background: url({{asset('image/ArtApliqueAI.png')}})no-repeat;
        background-size: contain;
        background-position: bottom;
        position: absolute;
        left: 0;
        bottom: 0;
        z-index: 2;
    }

    .right {
        width: 550px;
        height: 400px;
        background: url({{asset('image/ProgramingAI.png')}})no-repeat;
        background-size: 100% 100%;
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: 3;

    }



    .form-box {
        position: relative;
        width: 400px;
        height: 450px;
        background: transparent;
        border: 2px solid rgba(47, 34, 171, 0.5);
        border-radius: 20px;
        backdrop-filter: blur(6px);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 4;

    }

    .aclassimake {
        position: relative;
        z-index: 6;
    }

    h2 {
        font-size: 2em;
        color: #11289f;
        text-align: center;
    }

    .inputbox {
        position: relative;
        margin: 30px 0;
        width: 310px;
        border-bottom: 2px solid #11289f;
    }

    .inputbox label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        color: #11289f;
        font-size: 1em;
        pointer-events: none;
        transition: .5s;
    }

    input:focus~label,
    input:valid~label {
        top: -5px;
    }

    .inputbox input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        padding: 0 35px 0 5px;
        color: #11289f;
    }

    .inputbox ion-icon {
        position: absolute;
        right: 8px;
        color: #11289f;
        font-size: 1.2em;
        top: 20px;
    }

    .forget {
        margin: -15px 0 15px;
        font-size: .9em;
        color: #fff;
        display: flex;
        justify-content: space-between;
    }

    .forget label input {
        margin-right: 3px;

    }

    .forget label a {
        color: #fff;
        text-decoration: none;
    }

    .forget label a:hover {
        text-decoration: underline;
    }

    button {
        width: 100%;
        height: 40px;
        border-radius: 40px;
        background: #11289f;
        color: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
    }

    .register {
        font-size: .9em;
        color: #fff;
        text-align: center;
        margin: 25px 0 10px;
    }

    .register p a {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
    }

    .register p a:hover {
        text-decoration: underline;
    }

    @media screen and (max-width: 1000px) {
        .left {
            position: absolute;
            top: 0;
            left: 0;
            width: 250px;
            height: 300px;
        }

        .right {

            width: 350px;
            height: 250px;
        }


    }

    @media screen and (max-width: 700px) {
        .left {
            display: none;
        }

        .right {
            display: none;
        }


    }
</style>

<body class="container2">
    <div class=" m-0" style="margin: 0;">
        <div class="center aclassimake">
            <div class="form-box">
                <div class="form-value">
                    <form action="{{route('login')}}" method="POST">
                    @csrf
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" required>
                            <label for="">Password</label>
                        </div>
                        <div class="forget">
                            <label for="">
                                <input type="checkbox">Remember Me <a href="#">Forget
                                    Password</a></label>

                        </div>
                        <button>Log in</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="left"></div>
        <div class="right"></div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
