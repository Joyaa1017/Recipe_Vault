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

        /* main content */
        .recipe-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #3E3737 !important;
            color: #fff;
        }

        .recipe-card .d-flex img {
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .recipe-card h2 {
            font-size: 1.8rem;
            margin: 0;
            color: #fff;
        }

        .recipe-card p {
            margin: 5px 0;
            font-size: 1rem;
            color: #fff;
        }

        .recipe-image {
            max-width: 250px;
            /* Set the max width for the image */
            max-height: 250px;
            /* Set the max height for the image */
            object-fit: cover;
            /* Ensure the image covers the area without distorting */
            margin-right: 20px;
            /* Space between the image and text */
        }

        .btn-primary {

            top: 20px;
            right: 20px;
            background-color: #803737;
        }

        .btn-primary:hover {
            background-color: #8a3c3c;
        }

        /* .satisfaction-container {
            display: flex;
            justify-content: space-between;
        } */


        /* Satisfaction icons section */
        .satisfaction-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 20px;
            gap: 10px;
        }


        .satis {
            background-color: #b04d45;
            padding: 15px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
            transition: transform 0.2s;
            width: 70px;
            height: 70px;
            text-align: center;
        }

        .satis:hover {
            background-color: #a03e3e;
        }

        .satis img {
            width: 40px;
            height: 40px;
            display: block;
        }

        .rating-image {
            width: 25px;
            transition: transform 0.2s;
        }

        .rating-image:hover {
            transform: scale(1.1);
        }

        .rating-image.selected {
            transform: scale(1.2);
            border: 2px solid #b04d45;
            border-radius: 50%;
        }

        .satis.selected-btn img {
            filter: brightness(1.2);
            border: 3px solid #d3675f;
        }

        .satisfaction-container {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .satisfaction-container .satis {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .satisfaction-container .satis:hover {
            transform: scale(1.1);
        }

        .rating-image {
            width: 50px;
            height: auto;
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
                                <a class="nav-link" href="{{ route('users.logout') }}" onclick="confirmLogout(event)">
                                    <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign
                                    Out
                                </a>
                        </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container mt-5">
                    <!-- Recipe Info Container with Background Color -->
                    <div class="recipe-card p-4 rounded" style="background-color: #f8f9fa; position: relative;">
                        <!-- Recipe Header: Image, Title, Description, and Go Back Button in the Same Row -->
                        <div class="d-flex align-items-start justify-content-between">
                            <!-- Recipe Image with Limited Size -->
                            <div class="d-flex">
                                <img src="{{ asset('storage/' . $recipe->img) }}" class="rounded recipe-image"
                                    alt="{{ $recipe->recipe_name }}"
                                    style="width: 200px; height: 200px; object-fit: cover;">
                            </div>
                            <!-- Title, Description -->
                            <div class="ml-3 flex-grow-1">
                                <h2 class="mb-3">
                                    {{ $recipe->recipe_name }}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addToCollectionModal{{ $recipe->recipe_id }}">
                                        Add to Collection
                                    </button>
                                </h2>
                                <!-- Chef name, clickable to redirect to profile -->
                                <h6 class="mb-3">
                                    Chef: <a href="{{ route('users.view_other_profile', ['user_id' => $userother->user_id]) }}"
                                        class="text-decoration-none">{{ $userother->fullname }}</a>
                                </h6>
                                <p><strong>Description:</strong> {{ $recipe->description }}</p>
                            </div>
                        </div>
                        <!-- Go Back Button positioned at the top-right corner -->
                        <a href="{{ route('users.categories_recipe.show') }}" class="btn btn-primary btn-sm"
                            style="position: absolute; right: 15px; top: 15px; background-color:#8a3c3c">
                            Go Back
                            
                        </a>
                        <!-- Recipe Additional Info -->
                        <div class="mt-4">
                            <!-- Rating Button -->
                            <div class="recipe">
                                <form action="{{ route('users.recipes.rate_recipe', $recipe->recipe_id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#rateRecipeModal{{ $recipe->recipe_id }}">
                                        Rate this Recipe
                                    </button>
                                </form>
                            </div>

                            <p><strong>Category:</strong> {{ $recipe->category }}</p>
                            <p><strong>Cost:</strong> {{ $recipe->cost }}</p>
                            <p><strong>Main Ingredient:</strong> {{ $recipe->m_ingred }}</p>
                            <p><strong>Holiday:</strong> {{ $recipe->holiday }}</p>
                        </div>
                        <!-- Ingredients Section -->
                        <div class="mt-4">
                            <h4>Ingredients</h4>
                            <ul>
                                @foreach (explode('/', $recipe->ingredients) as $ingredient)
                                    <li>{{ $ingredient }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Steps Section -->
                        <div class="mt-4">
                            <h4>Cooking Steps</h4>
                            <ol>
                                @foreach (explode('/', $recipe->steps) as $step)
                                    <li>{{ $step }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Add to Collection Modal -->
                <div class="modal fade" id="addToCollectionModal{{ $recipe->recipe_id }}" tabindex="-1"
                    aria-labelledby="addToCollectionModalLabel{{ $recipe->recipe_id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addToCollectionModalLabel{{ $recipe->recipe_id }}">Add to
                                    Collection</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                            </div>
                            <div class="modal-body">
                                <form action="{{ route('users.recipes.addRecipe_in_collection') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->recipe_id }}">
                                    <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">
                                    <div class="mb-3">
                                        <label for="collectionSelect{{ $recipe->recipe_id }}"
                                            class="form-label">Select Collection</label>
                                        <select class="form-select" id="collectionSelect{{ $recipe->recipe_id }}"
                                            name="collect_id" required>
                                            <option value="">Choose a collection</option>
                                            @foreach ($collections as $collection)
                                                <option value="{{ $collection->collect_id }}">
                                                    {{ $collection->collect_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                                        data-bs-target="#createCollectionModal{{ $recipe->recipe_id }}">
                                        Create Collection
                                    </button>
                                    <button type="submit" class="btn btn-success mt-3">Add to Collection</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rating Modal -->
                <div class="modal fade" id="rateRecipeModal{{ $recipe->recipe_id }}" tabindex="-1"
                    aria-labelledby="rateRecipeModalLabel{{ $recipe->recipe_id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rateRecipeModalLabel{{ $recipe->recipe_id }}">
                                    Rate Recipe: {{ $recipe->recipe_name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('users.recipes.rate_recipe', $recipe->recipe_id) }}"
                                method="POST">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->recipe_id }}">

                                    <div class="how">
                                        <h6>Rate this Recipe: </h6>
                                    </div>

                                    <!-- Satisfaction rating images -->
                                    <div class="satisfaction-container">
                                        <input type="hidden" id="recipe_rate" name="recipe_rate" required>

                                        @foreach ([1, 2, 3, 4, 5] as $recipe_rate)
                                            <div class="satis" data-value="{{ $recipe_rate }}"
                                                @if ($existingRating && $existingRating->recipe_rate == $recipe_rate) class="selected" @endif>
                                                <img src="{{ asset('feedback_images/' . $recipe_rate . 'react.png') }}"
                                                    alt="{{ $recipe_rate == 1 ? 'Very Unsatisfied' : ($recipe_rate == 2 ? 'Unsatisfied' : ($recipe_rate == 3 ? 'Neutral' : ($recipe_rate == 4 ? 'Satisfied' : 'Very Satisfied'))) }}"
                                                    class="rating-image">
                                            </div>
                                        @endforeach
                                    </div><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">
                                        @if ($existingRating)
                                            Update Rating
                                        @else
                                            Submit Rating
                                        @endif
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>


    <!-- Create Collection Modal -->
    <div class="modal fade" id="createCollectionModal{{ $recipe->recipe_id }}" tabindex="-1"
        aria-labelledby="createCollectionModalLabel{{ $recipe->recipe_id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCollectionModalLabel{{ $recipe->recipe_id }}">Create New
                        Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('users.recipes.create_collection_store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">
                        <div class="mb-3">
                            <label for="collectionName" class="form-label">Collection Title</label>
                            <input type="text" class="form-control" id="collectionName" name="collect_name"
                                required placeholder="Enter collection name">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Collection</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Handle modal toggling
            const addToCollectionButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
            addToCollectionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetModal = document.querySelector(this.dataset.bsTarget);
                    const modalInstance = new bootstrap.Modal(targetModal);
                    modalInstance.show();
                });
            });

            // Handle Create Collection button inside the Add to Collection modal
            const createCollectionButtons = document.querySelectorAll('[data-bs-target^="#createCollectionModal"]');
            createCollectionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Close the currently open modal
                    const currentModal = this.closest('.modal');
                    const modalInstance = bootstrap.Modal.getInstance(currentModal);
                    if (modalInstance) {
                        modalInstance.hide();
                    }

                    // Open the Create Collection modal
                    const targetModal = document.querySelector(this.dataset.bsTarget);
                    const newModalInstance = new bootstrap.Modal(targetModal);
                    newModalInstance.show();
                });
            });

            // Handle "X" button to close modal
            const closeButtons = document.querySelectorAll('.btn-close');
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const currentModal = this.closest('.modal');
                    const modalInstance = bootstrap.Modal.getInstance(currentModal);
                    if (modalInstance) {
                        modalInstance.hide();
                    }
                });
            });

            const satisfactionImages = document.querySelectorAll('.satis');
            const satisfactionInput = document.getElementById('recipe_rate');

            satisfactionImages.forEach(image => {
                image.addEventListener('click', () => {
                    const value = image.getAttribute('data-value');
                    // console.log("Rating clicked: " + value);  // Check if this is logged
                    satisfactionInput.value = value;


                    // Highlight selected image
                    satisfactionImages.forEach(img => img.classList.remove('selected'));
                    image.classList.add('selected');
                });
            });

            // Close any modal on clicking outside or via the backdrop
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                modal.addEventListener('hidden.bs.modal', function() {
                    // Optional: Clean up any residual elements (but Bootstrap handles this by default)
                    // This line is generally unnecessary unless the modal instance is acting up.
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) {
                        backdrop.remove();
                    }
                });
            });
        });

        // <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

        // When a satisfaction image is clicked, set the satisfaction value
    </script>


</body>

</html>
