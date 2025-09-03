{{-- ini_set('display_errors', 1);
error_reporting(E_ALL); --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Kavoon&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="welcome.css"> -->
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    html {
        height: 150px;
        font-family: "Aclonica", sans-serif;
        background: url("landing_images/landing.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-position: center;

    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100vh;
        padding: 0 50px;
    }

    .illustration {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        position: relative;
    }

    .illustration img {
        width: 65%;
        height: auto;
        margin-right: 30%;
        animation: moveUp 3.5s linear infinite;
        /* Updated animation name */
    }

    @keyframes moveUp {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* Welcome Content */
    .content {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .content h1,
    .content p {
        opacity: 0;
        transform: translateY(20px);
        animation: wipe 0.5s forwards;
    }

    @keyframes wipe {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .content p {
        font-size: 20px;
        margin-bottom: 10px;
        color: white;
        text-align: center;
        font-family: Inria Sans;
        animation-delay: 1s;
    }

    .content p:nth-of-type(2) {
        animation-delay: 1.5s;
    }

    /* Get Started Button */
    .get-started-btn {
        padding: 15px 40px;
        font-size: 18px;
        color: white;
        background-color: #803737;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        margin-top: 50px;
        font-family: "Inria Sans";
    }

    .get-started-btn:hover {
        background-color: #803737e2;
    }

    /* Fade Out and Fade In Animations */
    .fade-out {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .fade-in {
        opacity: 1;
        transition: opacity 0.5s ease;
    }

    .recipe-vault-title {
        position: absolute;
        /* Use absolute positioning */
        right: 0;
        /* Stick to the right edge */
        top: 20%;
        /* Vertically center it */
        transform: translateY(-50%);
        /* Adjust for vertical centering */
        background-color: #4A4646;
        /* Add your desired background color */
        padding: 30px 0px 30px 0px;
        border-radius: 30px 0px 0px 30px;
        text-align: center;
        width: 700px;
        /* Adjust width if necessary */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        /* Optional for better visual appeal */
    }

    .recipe-vault-title h2 {
        font-size: 50px;
        color: white;
        font-family: "Inria-Sans", sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeIn 0.8s forwards;
        animation-delay: 0.5s;
        position: relative;
        margin-bottom: 10px;
    }

    .recipe-vault-title h2::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, #fff, #fff);
        /* Gradient colors */
    }


    .recipe-vault-title p {
        font-size: 20px;
        color: white;
        font-family: "  Inria Sans", sans-serif;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeIn 0.8s forwards;
        animation-delay: 1s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* For Responsive */
    @media (max-width: 480px) {
        .container {
            padding: 100px 10px;
            flex-direction: column;
        }

        .illustration img {
            width: 20%;
            margin-top: -10px;
            left: 0;
            margin: 100px 0px 200px 10px;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 14px;
            margin-bottom: 100px;
        }

        .get-started-btn {
            font-size: 14px;
            padding: 10px 20px;

            margin-top: px;
        }
    }

    /* Responsive styles */
    @media (max-width: 1024px) {
        .recipe-vault-title {
            width: 600px;
            /* Adjust container width */
            padding: 25px 10px;
            /* Slightly smaller padding */
            margin: -30px 0px 0px 0px;
        }

        .recipe-vault-title h2 {
            font-size: 40px;
            /* Reduce font size */
        }

        .recipe-vault-title p {
            font-size: 18px;
            /* Reduce font size */
        }
    }

    @media (max-width: 768px) {
        .recipe-vault-title {
            width: 80%;
            /* Make it occupy 90% of the screen */
            padding: 20px 10px;
            /* Smaller padding */
        }

        .recipe-vault-title h2 {
            font-size: 35px;
            /* Further reduce font size */
        }

        .recipe-vault-title p {
            font-size: 16px;
            /* Further reduce font size */
        }
    }

    @media (max-width: 480px) {
        .recipe-vault-title {
            width: 100px;
            /* Full-width on very small screens */
            right: 0;
            /* Stick to the right edge */
            border-radius: 0;
            /* Remove rounded edges for simplicity */
            padding: 15px 5px;
            /* Compact padding */
        }

        .recipe-vault-title h2 {
            font-size: 28px;
            /* Small font size for smaller screens */
        }

        .recipe-vault-title p {
            font-size: 14px;
            /* Small font size for smaller screens */
        }
    }
</style>

<body>
    <div class="container">
        <!-- For Illustration -->
        <div class="illustration">
            <img src="{{ asset('landing_images/landing_chefs.png') }}" alt="">
        </div>
        <!-- For Welcoming Message -->
        <!-- For Welcoming Message -->
        <div class="content">
            <div class="recipe-vault-title">
                <h2>RECIPE VAULT</h2>
                <p>A Platform where Savoring Treasures can be Found.</p>
            </div>
            <br><br>
            <p>Do you have a passion for cooking and want to
                share your recipes with the world? Starting a
                recipe website is a fantastic way to showcase
                your culinary skills, connect with food lovers,
                and build a community around your favorite dishes.</p>
            <a href="{{ route('portal') }}" class="get-started-btn" id="get-started-btn">Get Started</a>
            {{-- <a href="{{ route('show.faq') }}" class="get-started-btn" id="get-started-btn">Faq</a> --}}

        </div>
    </div>
    <script>
        document.getElementById("get-started-btn").addEventListener("click", function(event) {
            event.preventDefault();
            const button = this;
            // Add fade-out class
            console.log("Get Started clicked"); // Debugging log

            button.classList.add("fade-out");
            // Wait for the fade-out animation to complete before redirecting
            setTimeout(function() {
                console.log("Redirecting to: " + button.href); // Debugging log
                window.location.href = button.href; // Perform the redirect
            }, 500); // Delay matching the animation duration
        });
    </script>
</body>

</html>
