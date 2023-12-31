@extends('master.app')
@section('berandaActive','active')
@section('content')

<header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Starter template</span>
    </a>
</header>

<main>
    <h1 class="text-body-emphasis">Get started with Bootstrap</h1>
    <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

    <div class="mb-5">
        <a href="../examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
        <div class="col-md-6">
            <h2 class="text-body-emphasis">Starter projects</h2>
            <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
            <ul class="list-unstyled ps-0">
                <li>
                    <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/icons-font" rel="noopener" target="_blank">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap npm starter
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/parcel" rel="noopener" target="_blank">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Parcel starter
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/vite" rel="noopener" target="_blank">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Vite starter
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/webpack" rel="noopener" target="_blank">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Webpack starter
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
            <h2 class="text-body-emphasis">Guides</h2>
            <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
            <ul class="list-unstyled ps-0">
                <li>
                    <a class="icon-link mb-1" href="../getting-started/introduction/">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap quick start guide
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="../getting-started/webpack/">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Webpack guide
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="../getting-started/parcel/">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Parcel guide
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="../getting-started/vite/">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Bootstrap Vite guide
                    </a>
                </li>
                <li>
                    <a class="icon-link mb-1" href="../getting-started/contribute/">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#arrow-right-circle" />
                        </svg>
                        Contributing to Bootstrap
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>
<footer class="pt-5 my-5 text-body-secondary border-top">
    Created by the Bootstrap team &middot; &copy; 2023
</footer>

@endsection