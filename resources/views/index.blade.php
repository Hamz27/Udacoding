<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UdaCoding Tets</title>

    <link href="css/index.css" rel="stylesheet">
    <link href="css/sign-in.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="bglanding">
        <img src="img/building.jfif" class="imgbg">
    </div>
    <div class="landing"></div>
    <div class="divland text-light">
        <div>
            <div style="display: inline-flex; align-items: center;">
                <img class="mb-4" src="img/Catat-2.png" alt="" height="70">
                <p class="fs-1 fw-bolder text-light">CRUD Siswa</p>
            </div>

            <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum odit quidem ipsa eligendi. Beatae officiis tenetur error quod architecto harum quaerat culpa, ut quisquam amet? Fugiat quibusdam repellendus harum nam.</p>

            <div style="display: inline-flex;">
                <button class="btn btn-primary tombol" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><strong>Sign In</strong></button>
                <button class="btn btn-secondary tombol" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions2" aria-controls="offcanvasWithBothOptions"><strong>Sign Up</strong></button>
            </div>

            <p class="text-light fs-4" style="margin-top: 30px;">Demo & Logic Project</p>
            <iframe class="vid" src="https://www.youtube.com/embed/wAZdRs2lDIQ?autoplay=1&mute=1"></iframe>

                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Udacoding: 2nd Test</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <main class="form-signin w-100 m-auto">
                <form>
                    <img class="mb-4" src="img/Catat-2.png" alt="" width="72">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
            </main>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions2" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Udacoding: 2nd Test</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <main class="form-signin w-100 m-auto">
                <form>
                    <img class="mb-4" src="img/Catat-2.png" alt="" width="72">
                    <h1 class="h3 mb-3 fw-normal">Sign Up New Account</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit" style="margin-top: 10px;">Sign up</button>
                </form>
            </main>
        </div>
    </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>