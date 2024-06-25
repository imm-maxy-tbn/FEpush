<style>
    .navbar {
        background-color: #ffffff;
        color: #000000;
        padding: 15px 0;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
        border-bottom: 3px solid #5940cb;
    }

    .nav-item {
        margin-right: 10px; /* Adjust margin between nav items */
    }

    .navbar-brand {
        font-size: 20px; /* Adjust navbar brand font size */
        font-weight: bold; /* Make navbar brand text bold */
    }

    .nav-link,
    .navbar-button {
        color: #000000;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .nav-link:hover,
    .navbar-button:hover {
        background-color: #f0f0f0; /* Light grey background on hover */
    }

    .navbar-button.active,
.nav-link.active {
    background-color: #5940cb;
    color: #ffffff !important; /* Important to override existing color */
}

    .navbar-toggler {
        border: none; /* Remove border from toggler button */
    }

    .navbar-actions {
        margin-left: auto; /* Push login/register buttons to the right */
    }

    .btn {
        margin-left: 10px; /* Adjust margin between login/register buttons */
    }



</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/welcome">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a  class="nav-link {{ Request::is('homepage') ? 'active' : '' }}" href="homepage">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('myproject') ? 'active' : '' }}" href="myproject">My Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile-commpany') ? 'active' : '' }}" href="profile-commpany">Profile Commpany</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script>
    // JavaScript for toggling active class on navbar links/buttons
    $(document).ready(function() {
        $('.nav-link, .navbar-button').click(function() {
            $('.nav-link, .navbar-button').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
