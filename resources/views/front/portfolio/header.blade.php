<header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('index') }}#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a>
            </li>
            <li><a href="{{ route('index') }}#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
            <li><a href="{{ route('index') }}#skills"><i
                        class="bi bi-graph-up-arrow navicon"></i><span>Skills</span></a></li>
            <li><a href="{{ route('index') }}#resume"><i
                        class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
            <li><a href="{{ route('index') }}#portfolio"><i
                        class="bi bi-hdd-stack navicon"></i><span>Portfolio</span></a></li>
            <li><a href="{{ route('index') }}#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a>
            </li>
        </ul>
    </nav>
</header>