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
        body {
            /* font-family: 'Itim', cursive; */
            font-size: .875rem;
            background-image: url(/adminhome_images/background.png);
            /* background-color: #803737; */
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


        .nav-link img {
            width: 25px;
            height: 25px;

        }

        .back {
            font-size: 18px;
            color: #6c4e7e;
            cursor: pointer;
            text-decoration: none;
            font-family: "Kavoon";
        }

        .back:hover {
            text-decoration: underline;
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

        .btn-danger{
            border-radius: 20px;
            background: #dc3545;
            color: #fff;
        }
        .btn-secondary {
            border-radius: 20px;
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
            border: 2px solid black;
            word-wrap: break-word;
            max-width: 200px; 
        }


        .action-icons {
            display: flex;
            justify-content: space-around; 
            align-items: center;
            gap: 10px;
        }
        .action-icons img {
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }


        .action-icons img:hover {
            transform: scale(1.1); 
        }
        /* Add transition effects to the dropdown */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0s 0.3s;
        }

        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease;
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
                            <a class="nav-link" href="#">
                                <div id="signOutButton">
                                    <img src="{{ asset('sidenav_images/Sign_out.png') }}" alt="Sign Out Icon"> Sign Out
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <h1 class="mb-4" style="font-size: 4rem;">Reports Table</h1>
            
                    <!-- Reason Dropdown -->
                    <div class="d-flex justify-content-center mb-4">
                        <div class="dropdown mx-2">
                            Filter by Reason:
                            <button class="btn btn-secondary dropdown-toggle" style="background-color:#803737; border-radius: 20px; border: 1px solid;"type="button" id="reasonDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                {{ request()->get('reason', 'Filter by Reason') }} <!-- Display the selected reason -->
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="reasonDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'All']) }}">All</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'Profanity']) }}">Profanity</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'Abuse']) }}">Abuse</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'Harassment']) }}">Harassment</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'Spam']) }}">Spam</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.show', ['reason' => 'Other']) }}">Other</a></li>
                            </ul>
                        </div>
                    </div>
            
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #4e4e4e; color: #fff;">

                                <tr>
                                    <th>ID</th>
                                    <th>Reporter's User_id</th>
                                    <th>Reported User_id</th>
                                    <th>Reported Username</th>
                                    <th>Reason</th>
                                    <th>Custom Reason</th>
                                    <th>Timestamps</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($reports->isEmpty())
                                    <tr>
                                        <td colspan="8" class="text-center">No reports found.</td>
                                    </tr>
                                @else
                                    @foreach ($reports as $report)
                                    <tr>
                                        <td>{{ $report->report_id }}</td>
                                        <td>{{ $report->reporter_user_id }}</td>
                                        <td>{{ $report->reported_user_id }}</td>
                                        <td>{{ $report->reported_user_username }}</td>
                                        <td>{{ $report->reason }}</td>
                                        <td>{{ $report->custom_reason }}</td>
                                        <td>{{ $report->created_at }}</td>
                                        <td>
                                            <button type="button" class="btn btn-link text-danger p-0"
                                                onclick="openDeleteModal('{{ route('admin.report.softDelete', ['report' => $report->report_id]) }}')">
                                                <img src="{{ asset('admin_account_images/deleteicon (2).png') }}" alt="Delete" width="20" height="20">
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
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

                <!-- Delete Confirmation Modal -->
                <div id="deleteModal" class="modal" tabindex="-1" role="dialog" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeDeleteModal()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this report?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="closeDeleteModal()">Cancel</button>
                                <form id="deleteForm" action="" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Bootstrap JS (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        {{-- For conformation na script --}}
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
    // Show the delete confirmation modal and set the form action
function openDeleteModal(deleteUrl) {
    // Set the action of the form to the delete URL
    document.getElementById('deleteForm').action = deleteUrl;
    // Show the modal
    document.getElementById('deleteModal').style.display = 'block';
}

// Close the delete confirmation modal
function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
}
</script>

</body>

</html>
