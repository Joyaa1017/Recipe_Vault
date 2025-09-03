<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

    <!-- Font Awesome CSS (add to the head section) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include Font Awesome for social media icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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

        /* Default padding for medium and larger screens */
        main {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Responsive adjustments for small screens (below 768px) */
        @media (max-width: 767px) {
            main {
                padding-left: 0 !important;
                /* Remove left padding */
                padding-right: 0 !important;
                /* Remove right padding */
            }
        }

        /* Optionally, you can also reset padding for extra small screens (below 576px) */
        @media (max-width: 576px) {
            main {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            font-size: .875rem;
            background-image: url(/home_images/background.png);
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
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
            /* Adds contrast to the text */

        }

        .card {
            background-color: #3E3737;


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

        /* Set max height and width for card images */
        .card-img-custom {
            object-fit: cover;
            /* This will maintain aspect ratio */
            max-height: 200px;
            /* Adjust as needed */
            max-width: 100%;
            /* Ensures images do not overflow the card width */
        }

        .rating .star {
            font-size: 1.5rem;
            /* Adjust star size */
            color: gold;
            /* Gold color for the stars */
            margin: 0 2px;
            /* Add some space between stars */
        }

        /* Horizontal Scrollable Card containers css */
        .scrollable-container {
            max-height: 200px;
            /* Set height for the container */
            padding: 10px;
            overflow-x: auto;
            /* Horizontal scroll */
            white-space: nowrap;
            /* Prevent line breaks */
        }

        /* Card styling for fixed width and alignment */
        .horizontal-card {
            width: 400px;
            /* Fixed width for each card */
            display: inline-block;
            /* Align cards horizontally */
            flex-shrink: 0;
        }

        /* Styling for the images in each card */
        .horizontal-card-img {
            width: 150px;
            /* Set the width of the image */
            height: 100%;
            /* Let the image fill the card height */
            object-fit: cover;
            /* Ensure the image covers the area */
            border-radius: 5px;
            /* Optional: rounded corners */
        }

        .rating {

            margin: 0px 0px 50px 0px;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* Center-aligns text */
        }

        .custom-button {
            background-color: #803737;
            /* Green background */
            color: white;
            /* White text */
            border: none;
            /* No border */
        }

        .custom-button:hover {
            background-color: #a04545;
            /* Darker green on hover */
            color: white;
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

        .star {
            color: #d3d3d3;
            /* Grey for empty stars */
            font-size: 1.5rem;
        }

        .star.filled {
            color: #ffcc00;
            /* Gold for filled stars */
        }

        .star.half {
            color: #ffcc00;
            /* Gold for half star */
            position: relative;
        }

        .star.half:before {
            content: '\2605';
            /* Star character */
            position: absolute;
            left: 0;
            width: 50%;
            overflow: hidden;
            color: #ffcc00;
            /* Gold for half-filled star */
        }

        .star-rating {
            margin-bottom: 10px;
        }

        /* navbar  */
        .custom-navbar {
            background-color: #3E3737 !important;
            z-index: 1030;
            position: sticky;
            top: 0;
        }

        @media (max-width: 767.98px) {
            .custom-navbar {
                background-color: #3E3737 !important;
            }
        }

        @media (max-width: 767.98px) {
            .sidebar .nav-link {
                padding: 0.5rem;
                font-size: 0.9rem;
            }

            #sidebarMenu {
                max-height: calc(100vh - 56px);
            }
        }

        .sidebar .nav-item {
            position: relative;
        }

        .sidebar .collapse {
            z-index: 1050;
        }

        /* Footer Styling */
        .footer {
            background-color: #3E3737;
            padding: 20px 0;
            border-top: 1px solid #3E3737;
            color: white;
        }

        .footer .social-icon {
            font-size: 24px;
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }

        .footer .social-icon:hover {
            color: #007bff;
            /* Change to any hover color you prefer */
        }

        .footer h4 {
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .footer .social-icon {
                font-size: 20px;
                margin: 0 8px;
            }

            .footer .col-md-4 {
                text-align: center;
                /* Center content on smaller screens */
            }

            .footer .col-md-4.text-end {
                text-align: center !important;
                /* Force center alignment */
                margin-top: 10px;
                font-size: 20px;
            }

            /* Ensure contact section is centered */
            .footer .col-md-4.text-center {
                text-align: center !important;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow custom-navbar">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">RECIPE VAULT</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form method="GET" action="{{ route('search') }}" class="w-100 d-flex">
            <input class="form-control form-control-dark" type="text" name="search" placeholder="Search..."
                aria-label="Search" value="{{ request('search') }}">
            <input type="hidden" name="category" value="{{ request('category', 'all') }}">
            <!-- Add hidden category input -->
            <button class="btn btn-secondary" type="submit"
                style="width: 80px; height: 50px; background-color:#292323; border-color:#292323">Search</button>
        </form>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <!-- Profile Picture with Link -->
                <a class="nav-link" href="{{ route('users.user_index') }}">
                    <!-- Use the session value for the profile picture -->
                    <img src="{{ Storage::url($user['img'] != null ? $user['img'] : 'users/avatars/chef.png') }}"
                        alt="Profile" class="profile-pic">
                </a>
            </li>
        </ul>
    </nav>




    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('users.user_index') }}">MAIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.user_index') }}">
                                <img src="{{ asset('sidenav_images/home.png') }}" alt="Home Icon"> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.profile.show') }}">
                                <img src="{{ asset('sidenav_images/Profile.png') }}" alt="Profile Icon"> Profile
                            </a>
                        </li>
                        <!-- Categories with collapse -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.categories_recipe.show') }}"
                                data-toggle="collapse" data-target="#categoriesCollapse" aria-expanded="false"
                                aria-controls="categoriesCollapse">
                                <img src="{{ asset('sidenav_images/Recipes.png') }}" alt="Categories Icon"> Recipes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.collections.show') }}">
                                <img src="{{ asset('sidenav_images/Collection.png') }}" alt="Favorites Icon">
                                Collections
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.community.chat') }}">
                                <img src="{{ asset('sidenav_images/Community.png') }}" alt="Community Icon"> Community
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.feedback.show') }}">
                                <img src="{{ asset('sidenav_images\Feedback.png') }}" alt="Community Icon"> Feedback
                            </a>
                        </li>

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
                            <!-- Sign Out Button -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div id="signOutButton">
                                        <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon">
                                        Sign Out
                                    </div>
                                </a>
                        </ul>
                </div>
            </nav>


            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-0">
                <div class="  ">
                    <h1 class="h2"></h1>
                </div>

                <!-- Carousel Start -->
                <div id="recipeCarousel" class="carousel slide mt-4" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('home_images\how-to-start-cooking-from-scratch.jpg') }}"
                                class="d-block w-100" alt="Recipe 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>LEARN DIFFERENT RECIPES</h1>
                                {{-- <p>Your User ID: {{ $user }}</p> --}}
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home_images\number 2.jpg') }}" class="d-block w-100" alt="Recipe 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Cooking Tips and Tricks</h1>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home_images\14FIlipino1-sub-superJumbo.jpg') }}"
                                class="d-block w-100" alt="Recipe 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Where ingredients turn into experiences.</h1>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel End -->



                <!-- Card Container Start -->
                <div class="container mt-5">
                    <h1 style="color:#fff; text-align:center;">TOP CHEF'S OF THE MONTH!</h1>

                    {{-- <h1>Hello: {{ session('user')['username'] }}</h1> --}}
                    <div class="row">

                        <div class="top-rated-users">
                            <h3 style="text-align:center; color:white">Top 3 Rated Users</h3>
                            <div class="row">
                                @if ($topUsers->isEmpty())
                                    <p class="text-center">No top-rated users found.</p>
                                @else
                                    @foreach ($topUsers as $user)
                                        <div class="col-md-4">
                                            <div class="card text-center mb-4 position-relative">
                                                <img src="{{ asset('storage/' . $user->img) }}" class="card-img-top"
                                                    alt="{{ $user->fullname }}"
                                                    style="width: 100%; height: 200px; object-fit: cover;">
                                                <a href="{{ route('users.view_other_profile', $user->user_id) }}"
                                                    class="btn btn-primary position-absolute top-60 start-50 translate-middle"
                                                    style="opacity: 0.8; background-color:#803737; border-color:#803737;">
                                                    View Profile
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $user->fullname }}</h5>
                                                    <div class="stars mb-2">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            @if ($user->average_rating > $i)
                                                                <span class="star filled">&#9733;</span>
                                                            @else
                                                                <span class="star">&#9734;</span>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <p class="card-text">Average Rating:
                                                        {{ number_format($user->average_rating, 2) }} / 5</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container mt-5">
                    <h2 style="text-align:center; color:white">Featured Recipes</h2>
                    <div class="row flex-nowrap overflow-auto">
                        @foreach ($recipesWithRatings as $recipe)
                            <div class="col-md-4">
                                <div class="card mb-4" style="min-width: 300px;">
                                    <img src="{{ asset('storage/' . $recipe->img) }}" class="card-img-top"
                                        alt="{{ $recipe->recipe_name }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        {{-- <div class="stars mb-2">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($user->average_rating > $i)
                                                    <span class="star filled">&#9733;</span>
                                                @else
                                                    <span class="star">&#9734;</span>
                                                @endif
                                            @endfor
                                        </div> --}}
                                        <p class="card-text">Total Ratings: {{ $recipe->total_ratings }}</p>
                                        <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                                        
                                        {{-- <a href="{{ route('users.recipes.categories.show', $recipe->recipe_id) }}" --}}

                                        <a href="{{ route('users.recipes.home.show', $recipe->recipe_id) }}"
                                            class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!-- Footer Section Start -->
                <footer class="footer mt-5">
                    <div class="container">
                        <div class="row d-flex justify-content-between align-items-center">
                            <!-- Left side: Page Title -->
                            <div class="col-md-4">
                                <h4>RECIPE VAULT</h4>
                            </div>

                            <!-- Center: Social Media Icons -->
                            <div class="col-md-4 text-center">
                                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <!-- Add other icons as needed -->
                            </div>

                            <!-- Right side: Contact Us -->
                            <div class="col-md-4 text-end">
                                <p>Email: contact@recipevault.com</p>
                                <p>Phone: (123) 456-7890</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer Section End -->



                <!-- Main content goes here -->

            </main>
        </div>
    </div>
    <!-- Confirmation Modal for SignOut-->
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
                    <button type="button" class="btn btn-secondary" onclick="closeSignOutModal()">Cancel</button>
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
        function closeSignOutModal() {
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
