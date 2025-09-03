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

        .form-control{
            border-radius: 15px;
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

        /* Form styling */
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
    display: flex;
    align-items: center; 
    margin-bottom: 15px;
    justify-content: flex-start;
}

/* 
        .form-group label {
            flex: 0 0 20%;
            margin-right: 10px;
            text-align: right; /* Optional: Align text to the right */
      

        .form-group input {
            
            width: 100%;
            padding-left: 10px;  
        }

        .form-group .input-icon {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-group .input-icon input {
            width: 100%;
            padding-right: 30px;
        }

        .form-group .input-icon img {
            position: absolute;
            right: 10px;
            width: 20px;
            cursor: pointer;
        }

        .form-group button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .form-group button:hover {
            background-color: #555;
        }

        .nav-link img {
            width: 25px;
            height: 25px;

        }

        /* .container {
            
            max-width: 1050px;
            background-image: url('home_images/background.png');
            padding: 70px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        } */
        .content .form-container{
            max-width: 60%;
            border: 2px solid black;
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
        #editModal {
        background-image: url('path/to/your/image.jpg');
        background-size: cover; /* Ensures the image covers the modal */
        background-position: center center; /* Centers the image */
        background-attachment: fixed; /* Keeps the image fixed when scrolling */
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
        .btn-successs {
            border-radius: 20px;
            background: #5bc0de;
            /* background: #803737; */
            color: #fff;
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
        
        .form-label{
            padding-right: 10px;
            font-weight: bold;
        }
        .form-control{
            background-color: #B8B8B8;
            border: 1px solid black;
        }
        .nameAge {
    display: flex;
    justify-content: space-between; /* Ensures the items are spaced apart */
    align-items: flex-start; /* Aligns the items at the top */
        }

        .name {
            width: 500px; 
            box-sizing: border-box;
        }

        .accIdImage {
            display: flex;
            justify-content: space-between; /* Ensures the items are spaced apart */
            align-items: flex-start; /* Aligns the items at the top */
        }
        .accID{
            width: 100px;
            text-align: center;
        }
        .submition{
            text-align: right;
        }
        .age{
            width: 100px;
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

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

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
                <div class="  ">
                    <h1 class="h2"></h1>
                </div>

                <div class="container">
                    <h1 class="mb-4" style="font-size: 4rem; text-align:center; margin: 20px; color:#e4e4e4;">Accounts</h1>

                    <!-- Content -->
                    <div class="content">
                        <div class="form-container">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <form action="{{ route('admin.accounts.update', $user->user_id) }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>

                                {{-- class="needs-validation" novalidate> --}}
                                @csrf
                                @method('PUT')
                               
                                <h2 class="text-center mb-4" style="4rem; text-align:center; margin: 20px;">Edit Account</h2>
                                
                                <div class="accIdImage">

                                                                    <div classs="Img">
                                <div class="form-group mb-3">
                                    <label for="img" class="form-label">Img:</label>
                                    <!-- Display the existing image if it exists -->
                                    @if ($user->img)
                                        <div>
                                            <img src="{{ asset('storage/' . $user->img) }}" alt="User Image"
                                                style="width: 100px; height: auto;">
                                        </div>
                                    @endif
                                    <input type="file" id="img" name="img" class="form-control">
                                    @error('img')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                                <div class="accID">
                                <div class="form-group mb-3">
                                    <label for="acc_id" class="form-label">Acc_id:</label>
                                    <input id="acc_id" name="user_id" class="form-control"
                                        value="{{ old('user_id', $user->user_id) }}" readonly>
                                </div>
                                </div>
                        </div>
                                <br>
                                <div class="nameAge">
                                    <div class="name">
                                <div class="form-group mb-4">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" id="name" name="fullname" class="form-control"
                                        value="{{ old('fullname', $user->fullname) }}">
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="age">
                                <div class="form-group mb-3">
                                    <label for="age" class="form-label">Age:</label>
                                    <input type="number" id="age" name="age" class="form-control"
                                        value="{{ old('age', $user->age) }}">
                                    @error('age')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                                 </div>
                                <div class="form-group mb-4">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" id="username" name="username" class="form-control"
                                        value="{{ old('username', $user->username) }}">
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="submition" style="display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Back Button on the left -->
                                    <div id="backButton">
                                        <button type="submit" class="btn btn-success" style="width: 100px; background-color: #4CAF50; border-radius: 20px;">Back</button>
                                    </div>
                                
                                    <!-- Save Changes Button on the right -->
                                    <div id="editButton">
                                        <button type="submit" class="btn btn-success" style="width: 150px; background-color: #1ABC9C; border-radius: 20px;">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

                <!-- Confirmation Modal for Edit-->
    <div id="editModal" class="modal" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to save the changes?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeEditModal()">Cancel</button>
                    <button type="button" class="btn btn-success" style="border-radius: 20px;" onclick="confirmEdit()">Save</button>
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
    
    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

        document.getElementById('editButton').addEventListener('click', function (event) {
        event.preventDefault();  // Prevent form submission
        document.getElementById('editModal').style.display = 'block';
        });
  
            // Show the modal when the edit button is clicked
            document.getElementById('editButton').addEventListener('click', function () {
                document.getElementById('editModal').style.display = 'block';
            });
        
            // Function to close the modal
            function closeEditModal() {
                document.getElementById('editModal').style.display = 'none';
            }
        
            // Function to confirm edit
            function confirmEdit() {
           document.querySelector('form').submit(); // Submit the form
            }
        </script>

</body>

</html>
