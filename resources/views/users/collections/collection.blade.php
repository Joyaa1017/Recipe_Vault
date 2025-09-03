<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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

        .card {
            margin-bottom: 20px;
        }
        .btn {
            color:white;
            background-color:#803737;
            border-color:#803737;
            transform:scale(1.0);
        }
        .btn:hover {
            color:white;
            transition: 0.4s;
            transform:scale(1.02);
background-color:#974242;
border-color:#974242;

}

/* navbar  */
.custom-navbar {
    background-color: #3E3737 !important;
    z-index: 1030;
    position: sticky;
    top: 0;
}
/* If you want to add any custom styling, you can use these classes */
@media (max-width: 768px) {
    .btn {
      margin: 1px;
      width: 100%;
    }
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
            <a class="nav-link" href="#">
                 <img src="{{ Storage::url($user['img'] != null ? $user['img'] : 'users/avatars/chef.png') }}"
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
                        <a class="nav-link active" aria-current="page" href="{{ route('users.user_index') }}">MAIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.user_index') }}">
                            <img src="{{ asset('sidenav_images/home.png')}}" alt="Home Icon"> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.profile.show') }}">
                            <img src="{{ asset('sidenav_images/Profile.png')}}" alt="Profile Icon"> Profile
                        </a>
                    </li>
                    <!-- Categories with collapse -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.categories_recipe.show')}}" data-toggle="collapse" data-target="#categoriesCollapse"
                           aria-expanded="false" aria-controls="categoriesCollapse">
                            <img src="{{ asset('sidenav_images/Recipes.png')}}" alt="Categories Icon"> Recipes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.collections.show') }}">
                            <img src="{{ asset('sidenav_images/Collection.png')}}" alt="Favorites Icon"> Collections
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.community.chat') }}">
                            <img src="{{ asset('sidenav_images/Community.png')}}" alt="Community Icon"> Community
                        </a>
                        </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.feedback.show') }}">
                            <img src="{{ asset('sidenav_images\Feedback.png')}}" alt="Community Icon"> Feedback
                        </a>
                    </li>

                    <hr class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
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
                <div class="container mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="mb-0" style="color:white">Your Collections:</h1>

                        <div>
                            <!-- Create Collection Button -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#createCollectionModal">
                                Create Collection
                            </button>

                            <!-- Edit Collection Button -->
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#editCollectionModal">
                                Delete Collection
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="createCollectionModal" tabindex="-1" role="dialog"
                        aria-labelledby="createCollectionModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createCollectionModalLabel">Create a New Collection
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('users.collections.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="user_id"
                                                value="{{ session('user')['user_id'] }}">
                                            <label for="collect_name">Collection Name</label>
                                            <input type="text" class="form-control" id="collect_name"
                                                name="collect_name" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="margin-top:5px">Create Collection</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editCollectionModal" tabindex="-1" role="dialog"
                        aria-labelledby="editCollectionModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCollectionModalLabel">Delete Collections</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="mb-3">
                                    <label for="collectionSelect" class="form-label" style="padding:10px">Select Collection</label>
                                    <div class="d-flex">
                                          <!-- Display Edit and Delete Buttons -->
                                          <div id="editDeleteButtons" class="mt-3">
                                            
                                            <!-- Delete Form for the current collection -->
                                            <div class="modal-body">
                                            <form id="deleteForm" action="{{ route('users.collections.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this collection?')">
                                                @csrf
                                                @method('DELETE')

                                                <!-- Dropdown to select existing collection -->
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!-- Dropdown to select existing collection -->
                                                    <select class="form-select" id="collectionSelect" name="collect_id"  style="width:350px" required>
                                                        <option value="">Choose a collection</option>
                                                        @foreach ($collections as $col)
                                                            <option value="{{ $col->collect_id }}">{{ $col->collect_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                    <!-- Delete Button -->
                                                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </div>
                        </div>
                    </div>

                    @if ($collections && $collections->isNotEmpty())
                        @foreach ($collections as $collection)
                            <div class="mb-4" >
                                <div class="d-flex justify-content-between align-items-center"
                                style="background-color: #B8B8B8; padding: 10px; border-radius: 5px;">
                                <!-- Collection Name with Edit Button -->
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0 me-3">{{ $collection->collect_name }}</h3>
                                    <button type="button" style="background-color:#B8B8B8; border-color:#B8B8B8" class="btn btn-primary d-flex align-items-center edit-collection-btn"
                                        data-collect-id="{{ $collection->collect_id }}" 
                                        data-collect-name="{{ $collection->collect_name }}" 
                                        data-toggle="modal" 
                                        data-target="#editCollectionNameModal">
                                        <img src="{{ asset('actions_images/edit.png') }}" alt="Edit Icon" style="width: 20px; height: 20px;">
                                       
                                    </button>
                                </div>

                                    <button class="btn btn-info" type="button" data-toggle="collapse"
                                        data-target="#recipeCards_{{ $collection->collect_id }}"
                                        aria-expanded="false"
                                        aria-controls="recipeCards_{{ $collection->collect_id }}">
                                        Show Recipes
                                    </button>
                                </div>
                                <!------------------------------------------------------------------------------------------------- -->
                                <!-- Edit Collection Modal -->
                                <div class="modal fade" id="editCollectionNameModal" tabindex="-1" role="dialog"
                                    aria-labelledby="editCollectionNameModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editCollectionNameModalLabel">Edit
                                                    Collection</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form id="editCollectionForm"
                                                action="{{ route('users.collections.update') }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body">
                                                    <input type="hidden" name="collect_id" id="editCollectId">

                                                    <!-- Collection Name -->
                                                    <div class="form-group">
                                                        <label for="editCollectName">Collection Name</label>
                                                        <input type="text" class="form-control"
                                                            id="editCollectName" name="collect_name" required>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Save
                                                        Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------------------------------------------------------------------- -->

                                <!-- Add additional content for each collection here -->
                                <div class="collapse mt-3" id="recipeCards_{{ $collection->collect_id }}">
                                    <div class="row">
                                        @foreach ($collection->recipes as $recipe)
                                            <div class="col-md-12 mb-3">
                                                <div class="card"
                                                    style="display: flex; flex-direction: row; align-items: center; height: 200px; background-color:#3E3737; color:white">
                                                    <img src="{{ asset('storage/' . $recipe->img) }}"
                                                        class="card-img-left" alt="{{ $recipe->recipe_name }}"
                                                        style="width: 200px; height: 200px; object-fit: cover;">
                                                    <div class="card-body" style="flex: 1; padding-left: 15px;">
                                                        <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                                                        <p class="card-text"><strong>Category:</strong>
                                                            {{ $recipe->category }}</p>
                                                        <p class="card-text"><strong>Cost:</strong>
                                                            {{ $recipe->cost }}</p>
                                                        <p class="card-text"><strong>Description:</strong>
                                                            {{ Str::limit($recipe->description, 100) }}</p>

                                                        <!-- Action Buttons -->
                                                        <div class="d-flex">
                                                            <!-- See More Button -->
                                                            <a href="{{ route('users.recipes.show', $recipe->recipe_id) }}"
                                                                class="btn btn-info me-2">See More</a>

                                                            <!-- Remove Button -->
                                                            <form
                                                                action="{{ route('users.collections.removeRecipe', ['collection' => $collection->collect_id, 'recipe' => $recipe->recipe_id]) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Remove</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <p style="color:white">No Collection has been made yet.</p>
                        </div>
                    @endif
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
            </main>
        </div>

    </div>
</body>

<script>
    // JavaScript to handle the showing/hiding of the edit form and delete button
    const collectionSelect = document.getElementById('collectionSelect');
    const editDeleteButtons = document.getElementById('editDeleteButtons');
    const editForm = document.getElementById('editForm');
    const deleteForm = document.getElementById('deleteForm');
    const editInput = document.getElementById('editInput');

    // Event listener when a collection is selected from the dropdown
    collectionSelect.addEventListener('change', function() {
        const selectedOption = collectionSelect.options[collectionSelect.selectedIndex];
        const selectedCollectId = selectedOption.value;
        const selectedCollectName = selectedOption.text;

        // Show the Edit and Delete buttons when a collection is selected
        if (selectedCollectId) {
            editDeleteButtons.style.display = 'block';

            // Set the edit form action URL and pre-fill the input field
            editForm.action = `/users/collections/update/${selectedCollectId}`;
            editInput.value = selectedCollectName;

            // Set the delete form action URL
            deleteForm.action = `/users/collections/destroy/${selectedCollectId}`;
        } else {
            editDeleteButtons.style.display = 'none';
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-collection-btn');
        const editCollectIdField = document.getElementById('editCollectId');
        const editCollectNameField = document.getElementById('editCollectName');
        const editForm = document.getElementById('editCollectionForm');

        // Add event listeners for each edit button
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get data attributes from the clicked button
                const collectId = this.getAttribute('data-collect-id');
                const collectName = this.getAttribute('data-collect-name');

                // Populate the modal fields
                editCollectIdField.value = collectId; // Set the collect_id value
                editCollectNameField.value =
                collectName; // Set the current collection name in the input field
            });
        });
    });

</script>
<!-- JavaScript to handle the logout confirmation -->
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
</html>
