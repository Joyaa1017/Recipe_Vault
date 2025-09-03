<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            /* font-family: 'Itim', cursive; */
            font-size: .875rem;
            background-image: url(/adminhome_images/background.png);
            /* Replace with your background image URL */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }

        .feather {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
        }

        /* Sidebar*/

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #292323;
            /* Dark grey background for the sidebar */
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #fff;
            /* White text color */
            background-color: #3E3737;
            /* Light grey background for buttons */
            border-radius: 0px 10px 10px 0px;
            margin: 5px 0;
            padding: 10px;
            margin-right: 10px;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
        }

        .sidebar .nav-link.active {
            color: #fff;
            /*background-color:   Different background color for active buttons */
        }

        .sidebar .nav-link:hover {
            background-color: #803737;
            /* Darker grey when hovered */
            color: #fff;
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
            color: #fff;
            /* White text color for headings */
        }

        /* Navbar */
        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
            background-color: #3E3737;
            box-shadow: inset -1px 0 0 #292323;
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }

        .navbar .form-control {
            padding: .75rem 1rem;
            border-width: 0;
            border-radius: 0;
        }

        .form-control-dark {
            color: #fff;
            background-color: #292323;
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }

        /* Profile picture next to Sign out */
        .profile-pic {
            border-radius: 50%;
            width: 30px;
            height: 30px;

        }

        .collapse-links {
            padding-left: 20px;
        }

        .collapse-links .nav-link {
            font-size: 0.875rem;
            padding: 5px 0;
        }

        .navbar-nav {
            background-color: #3E3737;
            color: #3E3737;
        }

        .navbar-toggler {
            background-color: #3E3737;

        }

        .nav-link img {
            width: 25px;
            height: 25px;

        }

        .carousel-container {
            max-width: 900px;
            /* Maximum width of the carousel */
            max-height: 500px;
            /* Maximum height of the carousel */
            margin: auto;
            /* Center align */

        }

        .carousel-inner img {
            object-fit: cover;
            max-height: 500px;
            width: 100%;

        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);  /* Adds contrast to the text */

        }

        .card {
            background-color: #2E2929;
        }

        .card-title,
        .card-text {
            color: white;
        }

        /* Button overlay on image */
        .card-img-overlay {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .card-overlay-button {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(128, 55, 55, 0.6);
            border: none;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .card,
        .overlay-text {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;

        }

        .rating .star {
            font-size: 1.5rem;
            /* Adjust star size */
            color: gold;
            /* Gold color for the stars */
            margin: 0 2px;
            /* Add some space between stars */
        }


        /* For Sign Out Confirmation CSS*/
        .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-dialog {
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 400px;
    }

    .modal-header,
    .modal-footer {
        padding: 16px;
        border-bottom: 1px solid #ddd;
    }

    .modal-footer {
        border-top: 1px solid #ddd;
    }

    .modal-body {
        padding: 16px;
    }

    .signOutButton {
        padding: 8px 16px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }

    .btn-danger {
        background: #dc3545;
        color: #fff;
    }

    .btn-secondary {
        background: #6c757d;
        color: #fff;
    }
    .container {
            margin-top: 30px;
            width: auto   ;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px 40px 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    
        table {
            width: 100%; 
            table-layout: fixed;
            border-radius: 10px;
        }
        th, td, tr {
            border: 3px solid black;
            word-wrap: break-word;
            max-width: 200px; 
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">RECIPE VAULT</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">MAIN</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.admin_index') }}">
                                <img src="{{ asset('sidenav_images/home.png') }}" alt="Home Icon"> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.accounts.show') }}">
                                <img src="{{ asset('sidenav_images/Profile.png') }}" alt="Profile Icon"> Accounts
                            </a>
                        </li>
                        <!-- Categories with collapse -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.recipes.show') }}">
                                <img src="{{ asset('sidenav_images/Recipes.png') }}" alt="Categories Icon"> Recipes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.community.show') }}">
                                <img src="{{ asset('sidenav_images/Community.png') }}" alt="Community Icon"> Community
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.reports.show') }}">
                                <img src="{{ asset('sidenav_images/Reports.png') }}" alt="Reports Icon"> Reports
                            </a>
                        </li>

                    </ul>
                    <hr
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span></span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>

                    <ul class="nav flex-column mb-2">

                        <li class="nav-item">
                            <a class="nav-link" href="#" >
                             <div id="signOutButton">
                                <img src="{{asset('sidenav_images/Sign_out.png')}}" alt="Sign Out Icon"> Sign Out
                             </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="  ">
                    <h1 class="h2"></h1>
                </div>

                <!-- Carousel Start -->
                <div id="recipeCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('adminhome_images/c1.jpg') }}" class="d-block w-100" alt="Recipe 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 style="font-size: 60px;">WELCOME </h1>
                                <h1 style="font-size: 60px;">ADMIN</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Container Start -->
                <div class="container mt-5">
                    <h1 style="color:black; text-align:center;">RECENT UPDATES!</h1>
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <!-- Overlay Text at Top of Image -->
                                <div class="card-img-overlay-top">
                                    <h4 class="overlay-text">Total Users</h4>
                                </div>
                                <h1 class="card-title">{{ $totalUsers }}</h5>
                                <!--<p class="card-text">A brief description of this delicious dish. Learn how to prepare it with our easy steps.</p>-->
                            </div>
                        </div>
                    
                    <!-- Card 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <!-- Overlay Text at Top of Image -->
                            <div class="card-img-overlay-top">
                                <h4 class="overlay-text">Total Recipes</h4>
                            </div>
                            <h1 class="card-title">{{ $totalRecipes }}</h5>
                            <!--<p class="card-text">A brief description of this delicious dish. Learn how to prepare it with our easy steps.</p>-->
                        </div>
                    </div>
                </div>
            </div>

                <div class="container">
                    <h1 class="mb-4" style="font-size: 4rem;">Feedback</h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #4e4e4e; color: #fff;">
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    {{-- <th> </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $feedbacks)
                                    <tr>
                                        <td>{{ $feedbacks->feedback_id }}</td>
                                        <td>{{ $feedbacks->email }}</td>
                                        <td>{{ $feedbacks->message }}</td>
                                        {{-- <td><a href="#" class="text-primary">View</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
        </div>
    </div>

    <!-- Main content goes here -->

    </main>
    </div>
    </div>
    <!-- Confirmation Modal -->
    <div id="signOutModal" class="modal" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Out Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to sign out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="confirmSignOut()">Sign Out</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    {{-- For conformation na script --}}
    <script>
      // Show the modal when the sign-out button is clicked
      document.getElementById('signOutButton').addEventListener('click', function () {
          document.getElementById('signOutModal').style.display = 'block';
      });
  
      // Function to close the modal
      function closeModal() {
          document.getElementById('signOutModal').style.display = 'none';
      }
  
      // Function to confirm sign-out
      function confirmSignOut() {
          // Redirect to the login page (or log out route)
          window.location.href = "{{ route('admin.logout') }}";
      }
  </script>
</body>

</html>
