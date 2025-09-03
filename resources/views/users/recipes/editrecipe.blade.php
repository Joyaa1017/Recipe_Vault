<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

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
            font-size: .875rem;
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

        .input-gray-bg {
            border: 1px solid;
            background-color: #B8B8B8;
            border-radius: 10px;
        }

        .btn-update {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: #803737;
            border-radius: 20px;
            color: white;
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
                <a class="nav-link" href="#">
                    <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                        alt="Profile Picture" class="profile-pic">
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
                            <a class="nav-link active" aria-current="page">MAIN</a>
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
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#categoriesCollapse"
                                aria-expanded="false" aria-controls="categoriesCollapse">
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
                            <a class="nav-link" href="#">
                                <img src="{{ asset('sidenav_images/Feedback.png') }}" alt="Community Icon"> Feedback
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
                            <a class="nav-link" href="{{ route('users.logout') }}">
                                <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 " style="background-color: gray;">
                <div class="container mt-4 mb-4"
                    style="background-color: #F1F1F1; padding: 10px; border-radius: 8px;">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="container mt-5">


                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="mb-0" style="padding-top: 0px; margin: auto;">Edit Recipe</h1>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary"
                                style="margin-left: 15px;">Back</a>
                        </div>
                        <form action="{{ route('users.profile.recipes_update', $recipe->recipe_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">

                            <div class="mb-3 d-flex align-items-center">
                                <label for="recipe_name" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Recipe
                                    Title:</label>
                                <input type="text" class="form-control input-gray-bg" id="recipe_name"
                                    style="margin-right: 25px;" name="recipe_name"
                                    value="{{ $recipe->recipe_name }}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <label for="cost" class="form-label"
                                        style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px; margin-right: 35px;">Dish
                                        Cost:</label>
                                    <select class="form-select input-gray-bg" id="cost" name="cost" required>
                                        <option value="1-299" {{ $recipe->cost == '1-299' ? 'selected' : '' }}>1-299
                                        </option>
                                        <option value="300-599" {{ $recipe->cost == '300-599' ? 'selected' : '' }}>
                                            300-599</option>
                                        <option value="600-899" {{ $recipe->cost == '600-899' ? 'selected' : '' }}>
                                            600-899</option>
                                        <option value="900-1499" {{ $recipe->cost == '900-1499' ? 'selected' : '' }}>
                                            900-1499</option>
                                        <option value="1500+" {{ $recipe->cost == '1500+' ? 'selected' : '' }}>1500+
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <label for="category" class="form-label"
                                        style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px; padding-left: 50px;">Category:</label>
                                    <select class="form-select input-gray-bg" id="category"
                                        style="margin-right: 25px;" name="category" required>
                                        <option value="Pork" {{ $recipe->category == 'Pork' ? 'selected' : '' }}>
                                            Pork</option>
                                        <option value="Chicken"
                                            {{ $recipe->category == 'Chicken' ? 'selected' : '' }}>Chicken</option>
                                        <option value="Beef" {{ $recipe->category == 'Beef' ? 'selected' : '' }}>
                                            Beef</option>
                                        <option value="Seafoods"
                                            {{ $recipe->category == 'Seafoods' ? 'selected' : '' }}>Seafoods</option>
                                        <option value="Vegetables"
                                            {{ $recipe->category == 'Vegetables' ? 'selected' : '' }}>Vegetables
                                        </option>
                                        <option value="Desserts"
                                            {{ $recipe->category == 'Desserts' ? 'selected' : '' }}>Desserts</option>
                                        <option value="Exotic" {{ $recipe->category == 'Exotic' ? 'selected' : '' }}>
                                            Exotic</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <label for="m_ingred" class="form-label"
                                        style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px; margin-right: 35px;">Main
                                        Ingredient:</label>
                                    <input type="text" class="form-control input-gray-bg" name="m_ingred"
                                        id="m_ingred" value="{{ old('m_ingred', $recipe->m_ingred) }}" required>
                                </div>

                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <label for="holiday" class="form-label"
                                        style=" font-family: 'Itim', sans-serif; font-size: 20px; width: 200px; padding-left: 50px;">Holiday:</label>
                                    <select class="form-select input-gray-bg" style="margin-right: 25px;"
                                        name="holiday" id="holiday">
                                        <option value="">-- Select Holiday --</option>
                                        <option value="Birthday"
                                            {{ $recipe->holiday == 'Birthday' ? 'selected' : '' }}>Birthday</option>
                                        <option value="Festival"
                                            {{ $recipe->holiday == 'Festival' ? 'selected' : '' }}>Festival</option>
                                        <option value="Thanksgiving"
                                            {{ $recipe->holiday == 'Thanksgiving' ? 'selected' : '' }}>Thanksgiving
                                        </option>
                                        <option value="Halloween"
                                            {{ $recipe->holiday == 'Halloween' ? 'selected' : '' }}>Halloween</option>
                                        <option value="Christmas"
                                            {{ $recipe->holiday == 'Christmas' ? 'selected' : '' }}>Christmas</option>
                                        <option value="New Year"
                                            {{ $recipe->holiday == 'New Year' ? 'selected' : '' }}>New Year</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-center" style="flex: 1;">
                                <label for="img" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Current
                                    Image:</label>
                                <div>
                                    @if ($recipe->img)
                                        <img src="{{ asset('storage/' . $recipe->img) }}" alt="Recipe Image"
                                            style=" margin-right: 25px; width: 200px; height: 200px; object-fit: cover; margin-bottom: 10px;">
                                    @else
                                        <p>No image uploaded</p>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-center" style="flex: 1;">
                                <label for="image" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Upload
                                    Image:</label>
                                <input type="file" class="form-control input-gray-bg" id="image"
                                    name="img" style="margin-right: 25px;">
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <label for="description" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Description:</label>
                                <textarea class="form-control input-gray-bg" id="description" name="description" rows="3"
                                    style="margin-right: 25px;  flex-grow: 1;" required>{{ $recipe->description }}</textarea>
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <label for="ingredients" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Ingredients:</label>
                                <textarea class="form-control input-gray-bg" id="ingredients" name="ingredients" rows="3"
                                    style="margin-right: 25px; flex-grow: 1;" required>{{ $recipe->ingredients }}</textarea>
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <label for="steps" class="form-label"
                                    style="font-family: 'Itim', sans-serif; font-size: 20px; width: 200px;">Steps:</label>
                                <textarea class="form-control input-gray-bg" id="steps" name="steps" rows="3"
                                    style="margin-right: 25px; flex-grow: 1;" required>{{ $recipe->steps }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-update">Update Recipe</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add this modal to your code -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirm Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to update this recipe?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmUpdate">Yes, Update</button>
                </div>
            </div>
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

    <!-- Include this script to handle modal confirmation -->
    <script>
        // Show the modal when the sign-out button is clicked
        document.getElementById('signOutButton').addEventListener('click', function() {
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
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Show the confirmation modal
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
            confirmModal.show();

            // Handle the confirmation button click
            document.getElementById('confirmUpdate').addEventListener('click', function() {
                confirmModal.hide();
                event.target.submit(); // Submit the form
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
