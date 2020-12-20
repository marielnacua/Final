<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            Lentrix CourseWare
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/users')}}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/instructors')}}">Instructors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/learners')}}">Learners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/courses')}}">Courses</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
