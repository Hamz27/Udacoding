<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark col-md-2 col-lg-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white tombol @yield('berandaActive')" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home" />
                </svg>
                Beranda
            </a>
        </li>
        <li class="nav-item">
            <a href="/siswa" class="nav-link text-white tombol @yield('siswaActive')" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#table" />
                </svg>
                Data Siswa
            </a>
        </li>
        <li>
            <a href="/admin" class="nav-link text-white tombol @yield('adminActive')">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle" />
                </svg>
                Data Admin
            </a>
        </li>
    </ul>
</div>