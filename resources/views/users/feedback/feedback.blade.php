<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Feedback Form</title>


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

        .how {
            padding-left: 10px;

        }


        .picemailmess {
            text-align: center;
        }

        .FF h1 {
            text-align: left;
        }

        .emailandmess {
            background-color: #ccc;
        }

        .but {
            display: flex;                /* Enable flexbox on the container */
    justify-content: center;      /* Center the button horizontally */
    align-items: center;          /* Optional: center the button vertically */
    height: 100%;                  /* Make sure the container takes up full height */
        }


        .feedback-form {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ccc;
    border-radius: 10px;
}

        .form-content {
            flex-grow: 1;
            /* Allow the form to take the remaining space */
        }

        .feedback-form,
        .form-content h1 {

            text-align: center;
        }


        .feedback-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            width: 100%;
        }


        .email-input-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-align: left;
            justify-content: flex-end;
            /* Align content to the right */
            padding-right: 20px;
        }


        .feedback-img {


            flex-shrink: 0;
            /* Prevent the image from resizing */
            padding-right: 10px;
            /* Remove extra padding */
            margin: 0px;
            /* Add spacing only to the right */
            width: 250px;
            /* Fix the width */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 10px;
        }


        .emailandmess {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Align the form inputs to the left */
        }


        .form-group {
            margin-bottom: 15px;
        }


        .feedback-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }


        .feedback-form input,
        .feedback-form textarea {
            border: 1px solid #ccc;
            width: 100%;

            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


        /* Satisfaction icons section */
        .satisfaction-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Allows items to wrap on smaller screens */
    gap: 10px; /* Space between the rating icons */
}


.satis {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    background-color:#803737;
    width: 75px;
    height: 75px;
    border-radius: 5px;
}

        .satis:hover {
            background-color: #a03e3e;
        }

        .satis img {
    width: 40px; /* Adjust size as needed */
    height: 45px; /* Adjust size as needed */
    margin-bottom: 5px;
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

        button[type="submit"] {
            background-color: #803737;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 200px;
            
        }

        button[type="submit"]:hover {
            background-color: #b04d45;
        }

        /* Responsive Design for small devices */
        @media (max-width: 768px) {
    .satisfaction-container {
        justify-content: center; /* Center the icons on smaller screens */
    }

    .satis {
        width: 50px; /* Adjust width for smaller screens */
        height: 50px;
    }

    .satis img {
        width: 25px; /* Adjust icon size on smaller screens */
        height: 25px;
    }

    .feedback-form {
        padding: 10px;
        border-radius: 10px;
    }

    .email-input-container {
        display: block;
        margin-bottom: 20px;
    }

    .but button {
        width: 100%; /* Full-width submit button on small screens */
       
    }
    .feedback-img {
        display: none;
    }
    .how {
        text-align: center;

    }
}

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

        <form method="GET" action="{{ route('users.categories_recipe.show') }}" class="w-100 d-flex">
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

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4"
                style=" padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                <div class="">
                    <h1 class="h2"></h1>
                </div>

                <div class="feedback-form">
                    <div class="form-content">
                        <div class="FF">
                            <h1>Feedback Form</h1><br>
                        </div>
                        <div class="feedback-header">
                            <img src="{{ asset('feedback_images/girlfeedbackpic.png') }}" alt="Chef Girl"
                                class="feedback-img">
                            <div class="email-input-container">
                                <form action="{{ route('users.feedback.store') }}" method="POST"
                                    onsubmit="showThankYouModal(event)">
                                    @csrf

                                <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required
                                            placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" rows="4" required placeholder="Message.."></textarea>
                                    </div>

                                    <br><br><br>

                                    <div class="how">
                                        <p>How satisfied are you with our website?</p>
                                    </div><br>

                                    <div class="satisfaction-container">
                                        <input type="hidden" id="satisfaction" name="satisfaction" required>
                                        <div class="satis" data-value="1">
                                            <img src="{{ asset('feedback_images/1react.png') }}"
                                                alt="Very Unsatisfied" class="rating-image">
                                        </div>
                                        <div class="satis" data-value="2">
                                            <img src="{{ asset('feedback_images/2react.png') }}" alt="Unsatisfied"
                                                class="rating-image">
                                        </div>
                                        <div class="satis" data-value="3">
                                            <img src="{{ asset('feedback_images/3react.png') }}" alt="Neutral"
                                                class="rating-image">
                                        </div>
                                        <div class="satis" data-value="4">
                                            <img src="{{ asset('feedback_images/4react.png') }}" alt="Satisfied"
                                                class="rating-image">
                                        </div>
                                        <div class="satis" data-value="5">
                                            <img src="{{ asset('feedback_images/5react.png') }}" alt="Very Satisfied"
                                                class="rating-image">
                                        </div>
                                    </div><br>

                                    <div class="but">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                                <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog"
                                    aria-labelledby="thankYouModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Thank you for your feedback!
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    const ratingImages = document.querySelectorAll('.rating-image');
                    const satisfactionInput = document.getElementById('satisfaction');

                    ratingImages.forEach((image) => {
                        image.addEventListener('click', function() {
                            // Set the value of the hidden input field
                            satisfactionInput.value = this.closest('.satis').dataset.value;

                            // Highlight the selected rating and remove highlight from others
                            ratingImages.forEach((img) => img.classList.remove('selected'));
                            this.classList.add('selected');

                            // Add 'selected-btn' to maintain the color
                            this.closest('.satis').classList.add('selected-btn');

                            // Ensure other .satis divs don't retain the 'selected-btn' class
                            document.querySelectorAll('.satis').forEach(satisDiv => {
                                if (satisDiv !== this.closest('.satis')) {
                                    satisDiv.classList.remove('selected-btn');
                                }
                            });
                        });
                    });

                    function showThankYouModal(event) {
                        event.preventDefault(); // Prevent immediate submission
                        const form = event.target; // Reference the form element
                        const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));

                        // Show the modal
                        thankYouModal.show();

                        // Submit the form after the modal is shown and a delay
                        setTimeout(() => {
                            form.submit(); // Programmatically submit the form
                        }, 2000); // Adjust delay as needed
                    }
                </script>
            </main>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
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
</body>

</html>