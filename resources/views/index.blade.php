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
            <iframe class="vid" src="https://www.youtube.com/embed/tJ5XQyKNm7Q?autoplay=1&mute=1"></iframe>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Udacoding: 2nd Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <main class="form-signin w-100 m-auto">
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <img class="mb-4" src="img/Catat-2.png" alt="" width="72">
                            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-check text-start my-3">
                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>

                            <input class="btn btn-primary w-100 py-2" type="submit" value="Login">
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
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <img class="mb-4" src="img/Catat-2.png" alt="" width="72">
                            <h1 class="h3 mb-3 fw-normal">Sign Up New Account</h1>

                            <div class="form-floating">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Fulan bin Fulan" name="name" value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="fulan@example.com" name="email" value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <input class="btn btn-primary w-100 py-2" type="submit" style="margin-top: 10px;" value="Register">
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>