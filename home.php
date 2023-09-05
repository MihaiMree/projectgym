<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <title>Gym tracking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad3e0eb89e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body draggable="false" ondragstart="return false">

<div class="image">
    <header>
        <div class="logo">

            <h1>Workout Tracker</h1>
            <img class="logo-too" src="assets/img/logo.png">
        </div>
    </header>

</div>


<h1 class="main">
    Choose your muscle group
</h1>

<div class="d-flex flex-column flex-shrink-0 bg-black side-bar" >
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">

        <li class="nav-item ">
            <a href="home.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                <div class="mask flex-center">
                    <p class="main-text">Home</p>
                </div>
            </a>
        </li>
        <li>
            <a href="work.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Workouts" data-bs-original-title="Workouts">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <div class="mask flex-center">
                    <p class="main-text">Workouts</p>
                </div>
            </a>
        </li>
        <li>
            <a href="contact.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Contact" data-bs-original-title="Contact">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <div class="mask flex-center">
                        <p class="main-text">Contact</p>
                </div>
            </a>
        </li>
        <li>
            <a href="faq.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="FAQ" data-bs-original-title="FAQ">
                <svg class="svgq"  xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><path d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
                <div class="mask flex-center">
                    <p class="main-text">FAQ</p>
                </div>
            </a>
        </li
    </ul>
</div>
<div draggable="false" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 legs">
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/chest.png" alt="Bootstrap" width="280vw" height="100%"  class="group2" focusable="false">
            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>


                <div class="card-body">
                    <h5 class="card-title text-danger">Chest</h5>
                    <p class="card-text">The pectoral muscle, commonly known as the chest muscle, is a powerful upper-body muscle group essential for arm movement and stability.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/legs.png" alt="Bootstrap"   class="group2"  focusable="false">
            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>

                <div class="card-body">
                    <h5 class="card-title text-danger">Legs</h5>
                    <p class="card-text">The legs consist of various muscles, including quadriceps, hamstrings, calves, and more, enabling mobility, balance, and support for daily activities.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/back.jpg" alt="Bootstrap" class="group2"   focusable="false">
            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>


                <div class="card-body">
                    <h5 class="card-title text-danger">Back</h5>
                    <p class="card-text">The back encompasses a complex network of muscles, such as the latissimus dorsi, trapezius, and erector spinae, crucial for posture, stability, and movement..</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/bicep.png" alt="Bootstrap"  class="group2" focusable="false">
            <title>Placeholder</title>
            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                <div class="card-body">
                    <h5 class="card-title text-danger">Biceps</h5>
                    <p class="card-text">The biceps, located in the upper arm, are a prominent muscle group responsible for forearm flexion and play a role in arm strength and aesthetics.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/tri.png" alt="Bootstrap" class="group2" focusable="false">

            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>


                <div class="card-body">
                    <h5 class="card-title text-danger">Triceps</h5>
                    <p class="card-text">The triceps, situated at the back of the upper arm, consist of three heads and are pivotal for extending the forearm and overall arm strength.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/core.png" alt="Bootstrap"  class="group2" focusable="false">

            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>


                <div class="card-body">
                    <h5 class="card-title text-danger">Core/Abs</h5>
                    <p class="card-text">The core comprises muscles like the rectus abdominis, obliques, and transverse abdominis, providing stability, posture support, and power for various movements.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="assets/img/shoulder.png" alt="Bootstrap"  class="group2" focusable="false">

            <rect width="50" height="100%" fill="#55595c"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>


                <div class="card-body">
                    <h5 class="card-title text-danger">Shoulders</h5>
                    <p class="card-text">The shoulder muscles, including the deltoids and rotator cuff, enable a wide range of arm and shoulder movements, vital for upper body strength and flexibility.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info">More info</button>
                        </div>
                    </div>
                </div>
            </rect></div>
    </div>


</div>

<script src="assets/js/script.js"></script>
</body>
</html>

