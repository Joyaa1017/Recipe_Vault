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

        .container-grey {
            background-color: #D9D9D9;
            padding: 20px;
            border-radius: 8px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            border-radius: 10px;
        }

        /* Image Preview */
        #imgPreview {
            width: 100px;
            max-width: 100px;

            display: none;
        }

        .btn-custom {
            background-color: #803737;
            color: white;
            border-radius: 5px;
            width: auto;
            /* Allow the button to adjust its width based on content */
            padding: 10px 20px;
            /* Add some padding for a better visual appearance */
            margin-top: 5px;
        }

        .btn-custom:hover {
            background-color: #6d2d2d;
            color: white;
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
                                <a class="nav-link" href="{{ route('users.logout') }}"
                                    onclick="confirmLogout(event)">
                                    <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign
                                    Out
                                </a>
                        </ul>
                </div>
            </nav>

            <div class="container-fluid mt-5">
                <div class="row">
                    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                        <h2 style="color:whitesmoke">Create a New Recipe</h2>
                        <form action="{{ route('users.profile.store_recipe') }}" method="POST"
                            enctype="multipart/form-data" id="recipeForm">
                            @csrf

                            <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">

                            <!-- Container for form groups with grey background -->
                            <div class="container-grey">
                                <div class="row">
                                    <!-- Image at the top of Recipe Expected Cost -->
                                    <div class="col-md-6 form-group">
                                        <img id="imgPreview" src="#" alt="Image Preview"
                                            style="max-width: 100%; margin-bottom: 10px; display: none;" />
                                        <label for="img">Image</label>
                                        <input type="file" class="form-control-file" id="img"
                                            name="img" onchange="previewImage(event)" required>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="cost">Recipe Expected Cost</label>
                                        <select class="form-control" id="cost" name="cost" required>
                                            <option value="1-299">1-299</option>
                                            <option value="300-599">300-599</option>
                                            <option value="600-899">600-899</option>
                                            <option value="900-1499">900-1499</option>
                                            <option value="1500+">1500+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Recipe Name -->
                                    <div class="col-md-6 form-group">
                                        <label for="recipe_name">Recipe Name</label>
                                        <input type="text" class="form-control" id="recipe_name"
                                            name="recipe_name" required>
                                    </div>
                                    <!-- Main Ingredient -->
                                    <div class="col-md-6 form-group">
                                        <label for="m_ingred">Main Ingredient</label>
                                        <input type="text" class="form-control" id="m_ingred" name="m_ingred"
                                            required>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Holiday -->
                                    <div class="col-md-6 form-group">
                                        <label for="holiday" class="form-label">Holiday</label>
                                        <select class="form-select" name="holiday" id="holiday">
                                            <option value="">-- Select Holiday --</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Festival">Festival</option>
                                            <option value="Thanksgiving">Thanksgiving</option>
                                            <option value="Halloween">Halloween</option>
                                            <option value="Christmas">Christmas</option>
                                            <option value="New Year">New Year</option>
                                        </select>
                                    </div>
                                    <!-- Category -->
                                    <div class="col-md-6 form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" id="category" name="category" required>
                                            <option value="Pork">Pork</option>
                                            <option value="Chicken">Chicken</option>
                                            <option value="Beef">Beef</option>
                                            <option value="Seafoods">Seafoods</option>
                                            <option value="Vegetables">Vegetables</option>
                                            <option value="Desserts">Desserts</option>
                                            <option value="Exotic">Exotic</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Description -->
                                    <div class="col-md-12 form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" required></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Ingredients -->
                                    <div class="col-md-12 form-group">
                                        <label for="ingredients">Ingredients</label>
                                        <textarea class="form-control" id="ingredients" name="ingredients" required></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Steps -->
                                    <div class="col-md-12 form-group">
                                        <label for="steps">Steps</label>
                                        <textarea class="form-control" id="steps" name="steps" required></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button centered -->
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-custom" data-toggle="modal"
                                        data-target="#confirmationModal">
                                        Submit Recipe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </main>
                </div>
            </div>


            <!-- Modal for Confirmation -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Are you sure?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to submit this recipe?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success" form="recipeForm"
                                style="background-color:#803737; border-color:#803737;">Submit</button>
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
                // Image Preview Function
                function previewImage(event) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        const output = document.getElementById('imgPreview');
                        output.style.display = 'block';
                        output.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }

                // Prevent form submission if validation fails
                document.getElementById('recipeForm').addEventListener('submit', function(event) {
                    let isValid = true;
                    const inputs = this.querySelectorAll('input[required], select[required], textarea[required]');
                    inputs.forEach(input => {
                        if (!input.value) {
                            isValid = false;
                        }
                    });

                    if (!isValid) {
                        event.preventDefault(); // Prevent submission if validation fails
                        alert('Please fill in all required fields!');
                    }
                });
            </script>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
                integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
                integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
            </script>
            <script src="dashboard.js"></script>
</body>

</html>
