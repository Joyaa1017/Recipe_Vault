<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Sign Up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Popping", sans-serif;
            text-decoration: none;
        }

        body {
            background-image: url("https://wallpaperaccess.com/full/6032113.jpg");
            background-size: cover;
        }
        .decorative-underline {
        display: inline-block;
        border-bottom: 3px solid #292323; /* Customize the color and thickness */
        padding-bottom: 5px; /* Space between text and underline */
    }
        .container {
            position: relative;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            /* Center forms-container vertically */
            justify-content: center;
            /* Center forms-container horizontally */
            padding: 20px;
        }

        .container::before {
            content: "";
            position: absolute;
            width: 2000px;
            height: 2000px;
            border-radius: 50%;
            background: linear-gradient(-45deg, #E0DADA, #E0DADA);
            top: -10%;
            right: 48%;
            transform: translateY(-50%);
            z-index: 6;
            transition: 1.8s ease-in-out;
        }

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .signIn-signUp {
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%, -50%);
            width: 50%;
            display: grid;
            grid-template-columns: 1fr;
            z-index: 5;
            transition: 1s 0.7s ease-in-out;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 5rem;
            overflow: hidden;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
            transition: 0.2s 0.7s ease-in-out;
        }

        form.sign-in-form {
            z-index: 2;
        }

        form.sign-up-form {
            z-index: 1;
            opacity: 0;
        }

        .title {
            font-size: 2.2rem;
            color: #E0DADA;
            margin-bottom: 10px;
        }

        .input-field {
            max-width: 380px;
            width: 100%;
            height: 45px;
            background-color: #ffffff;
            margin: 10px 0;
            border-radius: 55px;
            display: flex;
            grid-template-columns: 15% 85%;
            padding: 0.4rem;
        }

        .input-field i {
            text-align: center;
            line-height: 40px;
            color: #000000;
            font-size: 1.5rem;
            margin-top: -5px;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;
            line-height: 1;
            /* line-width: 2; */
            font-weight: 200;
            font-size: 1.1rem;
            color: #000000;
        }

        .input-field input::placeholder {
            color: #000000;
            font-weight: 400;
        }

        .btn {
            width: 150px;
            height: 49px;
            border: none;
            outline: none;
            border-radius: 49px;
            cursor: pointer;
            background-color: #292323;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            transition: 0.5s;
        }

        .btn:hover {
            background-color: #4A4646;
            color: white;
        }

        .social-text {
            padding: 0.7rem 0;
            font-size: 1rem;
            color: white
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            border: 1px solid #fffefe;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-icon:hover {
            background: rgb(245, 216, 119);
            color: #fff;
            border: none;
        }

        .panels-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .panel {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: space-around;
            text-align: center;
            z-index: 7;
        }

        .left-panel {
            pointer-events: all;
            padding: 3rem 17% 2rem 12%;
        }

        .right-panel {
            pointer-events: none;
            padding: 3rem 12% 2rem 17%;
        }

        .panel .content {
            color: black;
            transition: 0.9s 0.6s ease-in-out;
        }

        .panel h3 {
            font-weight: 600;
            line-height: 1;
            font-size: 1.5rem;
            color: black;
        }

        .panel p {
            font-size: 0.95rem;
            padding: 0.7rem 0;
            color: black;
        }

        .btn.transparent {
            margin: 0;
            background: none;
            border: 2px solid #292323;
            width: 130px;
            height: 41px;
            font-weight: 600;
            font-size: 0.8rem;
            background-color: #292323;
            color: white;
        }

        .img {
            width: 100%;
            transition: 0.9s 0.6s ease-in-out;
        }

        .right-panel .content,
        .right-panel .img { 
            transform: translateX(800px);
        }

        .container.sign-up-mode::before {
            transform: translate(100%, -50%);
            right: 52%;
        }

        .container.sign-up-mode .left-panel .img,
        .container.sign-up-mode .left-panel .content {
            transform: translateX(-800px);
        }

        .container.sign-up-mode .right-panel .content,
        .container.sign-up-mode .right-panel .img {
            transform: translateX(0px);
        }

        .container.sign-up-mode .left-panel {
            pointer-events: none;
        }

        .container.sign-up-mode .right-panel {
            pointer-events: all;
        }

        .container.sign-up-mode .signIn-signUp {
            left: 25%;
        }

        .container.sign-up-mode form.sign-in-form {
            z-index: 1;
            opacity: 0;
        }

        .container.sign-up-mode form.sign-up-form {
            z-index: 2;
            opacity: 1;
        }

        @media (max-width: 870px) {
            .container {
                min-height: 800px;
                height: 100vh;
            }

            .container::before {
                width: 1500px;
                height: 1500px;
                left: 30%;
                bottom: 68%;
                transform: translateX(-50%);
                right: initial;
                top: initial;
                transition: 2s ease-in-out;
            }

            .signIn-signUp {
                width: 100%;
                left: 50%;
                top: 95%;
                transform: translate(-50%, -100%);
            }

            .panels-container {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 2fr 1fr;
                color: black;
            }

            .panel {
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                padding: 2.5rem 8%;
            }

            .panel .content {
                padding-right: 15%;
                transition: 0.9s 0.8s ease-in-out;

            }

            .panel h3 {
                font-size: 1.2rem;
            }

            .panel p {
                font-size: 0.7rem;
                padding: 0.5rem 0;
            }

            .btn.transparent {
                width: 110px;
                height: 35px;
                font-size: 0.7rem;
            }

            .img {
                width: 200px;
                transition: 0.9s 0.6s ease-in-out;
            }

            .left-panel {
                grid-row: 1 / 2;
            }

            .right-panel {
                grid-row: 3 / 4;
            }

            .right-panel .content,
            .right-panel .img {
                transform: translateY(300px);
            }

            .container.sign-up-mode::before {
                transform: translate(-50%, 100%);
                bottom: 32%;
                right: initial;
            }

            .container.sign-up-mode .left-panel .img,
            .container.sign-up-mode .left-panel .content {
                transform: translateY(-300px);
            }

            .container.sign-up-mode .signIn-signUp {
                top: 5%;
                transform: translate(-50%, 0);
                left: 50%;
            }
        }

        @media (max-width: 570px) {
            form {
                padding: 0 1.5rem;
            }

            .img {
                display: none;
            }

            .panel .content {
                padding: 0.5rem 1rem;
            }

            .content::before {
                bottom: 72%;
                left: 50%;
            }

            .container.sign-up-mode::before {
                bottom: 28%;
                left: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">

            <div class="signIn-signUp">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p style="color: green;">{{ session('success') }}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <p style="color: red;">{{ session('error') }}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('portal.login') }}" class="sign-in-form" method="POST">
                    @csrf
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class='bx bx-user'></i>
                        <input type="text" name="username" placeholder="UserName" id="username" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" name="password" placeholder="Password" id="password" required>
                    </div>
                    <input type="submit" value="Log In" class="btn solid">
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                </form>

                {{-- </script> --}}
                <form action="{{ route('portal.store') }}" class="sign-up-form" method="post">
                    @csrf
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class='bx bx-user'></i>
                        <input type="text" name="username" placeholder="User Name" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-user'></i>
                        <input type="text" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class='bx bx-calendar'></i>
                        <input type="number" name="age" placeholder="Enter Age" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" name="retypepass" placeholder="Retype Password" required>
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h1 class="decorative-underline" style="font-size:50px; color:#292323">RECIPE VAULT</h1>
                    <h4 style="color:#292323">A Platform where Savoring Treasures can be Found.</h4>
                    <p>New to our community? No worries! You can join us for free by signing up now.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="" alt="" class="img">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h1 class="decorative-underline" style="font-size:50px; color:#292323">RECIPE VAULT</h1>
                    <h4 style="color:#292323">A Platform where Savoring Treasures can be Found.</h4>
                    <p style="color:#292323">Already have an Account?</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="" alt="" class="img">
            </div>
        </div>
    </div>

    <script>
        const sign_in = document.querySelector("#sign-in-btn");
        const sign_up = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up.addEventListener('click', () => {
            container.classList.add('sign-up-mode');
        });

        sign_in.addEventListener('click', () => {
            container.classList.remove('sign-up-mode');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

</body>

</html>