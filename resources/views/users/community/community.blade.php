<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>RECIPE VAULT</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            background-color: #EDEDED;
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

        /* Initially hide the dropdown */
        #username-dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
            margin-top: 5px;
        }

        /* Optional: Style the dropdown items */
        #username-dropdown .dropdown-item {
            padding: 10px;
            cursor: pointer;
        }

        #username-dropdown .dropdown-item:hover {
            background-color: #f1f1f1;
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

<script>
    function replyToMessage(username, post) {
        const textArea = document.getElementById('post-input');
        const quotedMessage = `${username}: "${post}"\n`; // Corrected this line
        textArea.value = quotedMessage + textArea.value; // Prepend the quoted message to the text area
        textArea.focus(); // Focus the text area
    }
</script>

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
                                <a class="nav-link" href="{{ route('users.logout') }}"
                                    onclick="confirmLogout(event)">
                                    <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign
                                    Out
                                </a>
                        </ul>
            </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    @if (session()->has('user'))
                        <!-- Profile Picture and Username on the Same Row -->
                        <div class="d-flex align-items-center mb-3">
                        </div>

                        <!-- Messages Section -->
                        <div class="card my-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ Storage::url($user['img'] != null ? $user['img'] : 'users/avatars/chef.png') }}"
                                        alt="Profile Picture" class="rounded-circle border"
                                        style="width: 45px; height: 45px; object-fit: cover; cursor: pointer; margin-right: 10px;">
                                    <p class="mb-0" style="font-size:20px">{{ session('user')['username'] }}</p>
                                </div>

                                <!-- Community Text with Icon on the Right Side -->
                                <span class="ml-auto d-flex align-items-center" style="font-size: 30px">
                                    Community
                                    <img src="{{ asset('community_images/communityicon.png') }}" alt="Community Icon"
                                        style="width: 30px; height: 30px">
                                </span>
                            </div>
                            <div class="card-body" id="chat-container"
                                style="height: 400px; overflow-y: auto; border: 1px solid #ccc; border-radius: 5px;">
                                @if ($posts->isNotEmpty())
                                    @foreach ($posts as $post)
                                        <div class="d-flex align-items-start mb-2"
                                            style="justify-content: {{ $post->user_id == session('user')['user_id'] ? 'flex-end' : 'flex-start' }};">
                                            <!-- Message container -->
                                            <div class="message-container"
                                                style="
                                  padding: 10px;
                                  background-color: {{ $post->user_id == session('user')['user_id'] ? '#D9D9D9' : '#D9D9D9' }};
                                  color: {{ $post->user_id == session('user')['user_id'] ? 'black' : 'black' }};
                                  border-radius: 10px;
                                  margin-top: 5px;
                                  max-width: 70%;
                                  text-align: {{ $post->user_id == session('user')['user_id'] ? 'right' : 'left' }};
                              ">
                                                @if ($post->user_id != session('user')['user_id'])
                                                    <strong style="color:#3E3737; display: block;"
                                                        class="username-clickable"
                                                        data-user-id="{{ $post->user_id }}"
                                                        data-username="{{ $post->user->username }}">
                                                        {{ $post->user->username }}
                                                    </strong>

                                                    <!-- The dropdown that will be shown when the username is clicked -->
                                                    <div class="dropdown-menu"
                                                        id="username-dropdown-{{ $post->user_id }}"
                                                        style="display: none;">
                                                        <a class="dropdown-item"
                                                            href="{{ route('users.view_other_profile', ['user_id' => $post->user_id]) }}">
                                                            Visit Profile
                                                        </a>
                                                        <button type="button" class="btn btn-danger report-user"
                                                            data-user-id="{{ $post->user_id }}"
                                                            data-username="{{ $post->user->username }}"
                                                            data-bs-toggle="modal" data-bs-target="#reportModal">
                                                            Report User
                                                        </button>
                                                    </div>
                                                @else
                                                    <strong style="display: block;">You</strong>
                                                @endif

                                                <!-- Message -->
                                                <p class="mb-1">{{ $post->post }}</p>
                                                <small
                                                    class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:i:s') }}</small>
                                            </div>
                                            <!-- Reply Icon (for other users only) -->
                                            @if ($post->user_id != session('user')['user_id'])
                                                <button class="btn btn-link reply-btn"
                                                    style="margin-left: 5px; color: #803737; text-decoration: none;"
                                                    onclick="replyToMessage('{{ $post->user->username }}', '{{ $post->post }}')">
                                                    <i class="fas fa-reply"></i>
                                                </button>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    <p>No messages yet. Start the conversation!</p>
                                @endif
                            </div>
                        </div>

                        {{-- ======================================================================================================================== --}}

                        <!-- Report User Modal -->
                        <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reportModalLabel">Report <span
                                                id="reported-user-username"> </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="report-form" method="POST"
                                            action="{{ route('users.community.report') }}">
                                            @csrf
                                            <input type="hidden" name="reported_user_id" id="reported_user_id">
                                            <input type="hidden" name="reported_user_username"
                                                id="reported_user_username">
                                            <input type="hidden" name="reporter_user_id"
                                                value="{{ session('user')['user_id'] }}">

                                            <div class="mb-3">
                                                <label for="report-reason" id="report-reason"
                                                    class="form-label">Reason for
                                                    Reporting</label>
                                                <select class="form-select" name="reason" id="report-reason"
                                                    required>
                                                    <option value="Profanity">Profanity</option>
                                                    <option value="Abuse">Abuse</option>
                                                    <option value="Harassment">Harassment</option>
                                                    <option value="Spam">Spam</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="mb-3" id="custom-reason-container">
                                                <label for="custom-reason" class="form-label">Custom Reason
                                                    (Optional)</label>
                                                <textarea class="form-control" name="custom_reason" id="custom-reason" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-danger">Report</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- ======================================================================================================================== --}}

                        <!-- Reply Section -->
                        <div id="reply-preview" class="alert alert-info d-none">
                            <strong>Replying to:</strong>
                            <p id="reply-message-preview" class="mb-0"></p>
                            <button type="button" class="btn btn-sm btn-danger mt-1"
                                onclick="cancelReply()">Cancel</button>
                        </div>
                        <form action="{{ route('users.community.sendMessage') }}" method="POST" class="mt-3">
                            @csrf
                            {{-- <input type="hidden" name="reply_to" id="reply-to"> <!-- Hidden input to store the reply ID --> --}}
                            <input type="hidden" name="user_id" value="{{ session('user')['user_id'] }}">
                            <div class="form-group d-flex">
                                <textarea name="post" class="form-control" id="post-input" style="margin: 10px" rows="3"
                                    placeholder="Type your message here..." required></textarea>
                                <button type="submit" class="btn btn-primary"
                                    style="height: 40px; margin: 10px; background-color:#803737">Send</button>
                            </div>
                        </form>
                    @else
                        <p>You must be logged in to access the community chat.</p>
                    @endif
                </div>
            </main>

            <script>
                setInterval(function() {
                    // Use AJAX to fetch new messages
                    $.get('{{ route('users.community.chat') }}', function(data) {
                        $('#chat-container').html(data);
                    });
                }, 5000); // Fetch new messages every 5 seconds

                //-------------------------------------------------------------------------------------

                // Show the report modal when a username is clicked
                document.addEventListener('DOMContentLoaded', function() {
                    // Show the dropdown when a username is clicked
                    document.querySelectorAll('.username-clickable').forEach(function(element) {
                        element.addEventListener('click', function(event) {
                            // Prevent the default action (just in case)
                            event.preventDefault();

                            // Hide any open dropdowns
                            document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                                menu.style.display = 'none';
                            });

                            // Get the username and user ID
                            var username = element.dataset.username;
                            var userId = element.dataset.userId;

                            // Show the dropdown at the position of the clicked username
                            var dropdown = document.getElementById('username-dropdown-' + userId);
                            dropdown.style.display = 'block';

                            // Optionally, adjust the position of the dropdown relative to the clicked username
                            var rect = element.getBoundingClientRect();
                            dropdown.style.left = rect.left + 'px';
                            dropdown.style.top = rect.bottom + 'px';

                            // Set the Report User action to the correct user ID
                            var reportAction = dropdown.querySelector('.report-user');
                            reportAction.setAttribute('data-user-id', userId);
                        });
                    });

                    document.querySelectorAll('.report-user').forEach(function(element) {
                        element.addEventListener('click', function() {
                            // Get the user ID and username from the data attributes of the clicked element
                            var reportedUserId = this.getAttribute('data-user-id');
                            const reportedUsername = this.getAttribute('data-username');

                            // Set the user ID and username into the modal's hidden inputs
                            document.getElementById('reported_user_id').value = reportedUserId;
                            document.getElementById('reported_user_username').value = reportedUsername;

                            // Optionally, update the modal title dynamically to include the username
                            document.getElementById('reportModalLabel').textContent =
                                `Report ${reportedUsername}`;

                            // Show the modal using Bootstrap's modal API
                            var reportModal = new bootstrap.Modal(document.getElementById('reportModal'));
                            reportModal.show();
                        });
                    });

                    // Close dropdown if user clicks outside
                    document.addEventListener('click', function(event) {
                        if (!event.target.closest('.username-clickable') && !event.target.closest(
                                '.dropdown-menu')) {
                            document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
                                menu.style.display = 'none';
                            });
                        }
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



        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
