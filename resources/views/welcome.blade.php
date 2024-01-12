<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="{{ asset('webcam.js') }}"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <i class="bi-camera"></i> Presensi App
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="offcanvas offcanvas-end"
                        tabindex="-1"
                        id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel"
                    >
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                Presensi App
                            </h5>
                            <button
                                type="button"
                                class="btn-close text-reset"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="{{ route('login') }}"
                                        >Login</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="dropdownId"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >Dropdown</a
                                    >
                                    <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownId"
                                    >
                                        <a class="dropdown-item" href="#"
                                            >Action 1</a
                                        >
                                        <a class="dropdown-item" href="#"
                                            >Action 2</a
                                        >
                                    </div>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input
                                    class="form-control me-2"
                                    type="search"
                                    placeholder="Search"
                                    aria-label="Search"
                                />
                                <button class="btn btn-outline-success" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div class="d-block mx-auto" id="my_camera" style="width:320px; height:240px;"></div>
	        <div id="my_result"></div>
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-danger" onclick="reset_kamera()">
                    <i class="bi bi-arrow-counterclockwise"></i>
                </button>
                <button type="button" class="btn btn-primary" onclick="ambil_foto()">
                    <i class="bi-camera"></i>
                </button>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <script language="JavaScript">
            Webcam.set('flip_horiz', true);
            Webcam.attach( '#my_camera' );
            
            function take_snapshot() {
                Webcam.snap( function(data_uri) {
                    document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
                } );
            }

            function reset_kamera(){
                Webcam.unfreeze();
            }
            function ambil_foto(){
                Webcam.freeze();
            }
        </script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
