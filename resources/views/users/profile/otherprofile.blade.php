<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

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

        .card {
            position: relative;
            display: flex;
            flex-direction: row;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #3E3737;
            color: #ddd;
        }

        /*  recipe card designs   */
        .card img {
            width: 50px;
            margin: 5px;
        }

        .card-body {
            padding: 15px;
        }

        .card .btn {
            margin-right: 10px;
        }

        .card .btn-danger {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .card .d-flex {
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            color: white;
            background-color: #803737;
            border-color: #803737;
            transform: scale(1.0);
        }

        .btn:hover {
            color: white;
            transition: 0.4s;
            transform: scale(1.02);
            background-color: #974242;
            border-color: #974242;

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
            <input class="form-control form-control-dark" type="text" name="search" placeholder="Search.."
                aria-label="Search" value="{{ request('search') }}">
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
                                    <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign Out
                                </div>
                                </a>
                        </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <!-- Profile Section -->
                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                    <!-- Profile Picture -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#profilePictureModal">
                        <img src="{{ Storage::url($userother['img']) }}"
                            alt="Profile " class="rounded-circle border"
                            style="width: 90px; height: 90px; object-fit: cover; cursor: pointer; margin: 10px">
                    </a>

                    <!-- Username and Full Name -->
                    <div class="ms-3">
                        <h2 class="h4 mb-0">{{ $userother->username }}</h2>
                        <p class="mb-0 text-muted">{{ $userother->fullname }}</p>
                        {{-- <p class="text-muted mb-0">Welcome to your profile!</p> --}}
                    </div>
                </div>

                <!-- Recipes Section -->
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Recipes</h1>
                </div>

                <!-- Display Recipes -->
                <div class="row">
                    @if ($recipes->isEmpty())
                        <div class="col-12">
                            <p>No recipe has been made.</p>
                        </div>
                    @else
                        @foreach ($recipes as $recipe)
                            <!-- Recipe Card -->
                            <div class="card mb-3">
                                <div class="row no-gutters align-items-center">
                                    <!-- Recipe Image -->
                                    <div class="col-md-4">
                                        <img src="{{ Storage::url($recipe['img']) }}" class="card-img-top"
                                            {{-- alt="{{ $recipe->img }}" --}}
                                            style="width: 350px; height:200px; object-fit: cover;">
                                    </div>
                                    <!-- Recipe Info -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                                            <p class="card-text"><strong>Description:</strong>
                                                {{ $recipe->description }}</p>

                                            <!-- Action Buttons -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <div>
                                                    <a href="{{ route('users.recipes.home.show', $recipe->recipe_id) }}"
                                                        class="btn btn-primary">See More</a>
                                                    {{-- <a href="{{ route('users.recipes.otherprofile.show', ['id' => $recipe->recipe_id, 'user_id' => $userother->user_id]) }}"
                                                        class="btn btn-info">See More</a>  --}}
                                                        {{-- <a href="{{ route('users.recipes.otherprofile.show', ['id' => $recipe->recipe_id, 'user_id' => $user->user_id]) }}" 
                                                            class="btn btn-primary">
                                                            See More
                                                         </a>
                                                         {{-- , ['id' => $recipe->recipe_id, 'user_id' => $user->user_id]) --}}
                                                         {{-- <a href="{{ route('users.recipes.show') }}" 
                                                            class="btn btn-primary">
                                                            See More
                                                         </a> --}}
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#addToCollectionModal{{ $recipe->recipe_id }}">
                                                        Add to Collection
                                                    </button>

                                                    <!-- Add to Collection Modal -->
                                                    <div class="modal fade"
                                                        id="addToCollectionModal{{ $recipe->recipe_id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="addToCollectionModalLabel{{ $recipe->recipe_id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="addToCollectionModalLabel{{ $recipe->recipe_id }}">
                                                                        Add to Collection</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('users.profile.collections_addRecipe_in_collection') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="recipe_id"
                                                                            value="{{ $recipe->recipe_id }}">
                                                                        <input type="hidden" name="user_id"
                                                                            value="{{ session('user')['user_id'] }}">

                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="collectionSelect{{ $recipe->recipe_id }}"
                                                                                class="form-label">Select
                                                                                Collection</label>
                                                                            <div class="d-flex">

                                                                                <!-- Dropdown to select existing collection -->
                                                                                <select class="form-select"
                                                                                    id="collectionSelect{{ $recipe->recipe_id }}"
                                                                                    name="collect_id" required>
                                                                                    <option value="">Choose a
                                                                                        collection</option>
                                                                                    @foreach ($collections as $collection)
                                                                                        <option
                                                                                            value="{{ $collection->collect_id }}">
                                                                                            {{ $collection->collect_name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#createCollectionModal{{ $recipe->recipe_id }}">
                                                                            Create Collection
                                                                        </button>
                                                                        <button type="submit"
                                                                            class="btn btn-success mt-3">Add to
                                                                            Collection</button>
                                                                    </form>
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
                        @endforeach
                    @endif
                </div>
            </main>




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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>

    <script>
        // Show the modal when the sign-out button is clicked
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

        function showModal(recipeId) {
            const modal = document.getElementById(`createCollectionModal${recipeId}`);
            const modalBody = modal.querySelector('.modal-body');
            modal.removeAttribute('hidden');
            modalBody.removeAttribute('hidden');
        }

        // Function to hide the modal
        function hideModal(recipeId) {
            const modal = document.getElementById(`createCollectionModal${recipeId}`);
            const modalBody = modal.querySelector('.modal-body');
            modal.setAttribute('hidden', true);
            modalBody.setAttribute('hidden', true);
        }

        // Add event listeners for all the "Add to Collection" buttons
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                const recipeId = this.getAttribute('data-recipe-id');
                showModal(recipeId);
            });
        });

        // Add event listeners for all the "btn-close" buttons to hide the modal
        document.querySelectorAll('.btn-close').forEach(button => {
            button.addEventListener('click', function() {
                const recipeId = this.closest('.modal').getAttribute('id').replace('createCollectionModal',
                    '');
                hideModal(recipeId);
            });
        });
    </script>
    <!-- JavaScript to handle the logout confirmation -->
    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default behavior
            if (confirm('Are you sure you want to Log Out?')) {
                window.location.href = '{{ route('users.logout') }}'; // Proceed with logout if confirmed
            }
        }
    </script>
    <!-- JavaScript to handle the logout confirmation -->
    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default behavior
            if (confirm('Are you sure you want to Log Out?')) {
                window.location.href = '{{ route('users.logout') }}'; // Proceed with logout if confirmed
            }
        }
    </script>
</body>

</html>
