<header class="w-full flex items-center z-50 fixed top-0 left-0">
    <div class="container mx-auto">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-6">
                    <img src="img/logo.png" alt="logo" class="w-24">
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-green rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="nav-link text-base font-semibold text-black p-2 mx-4 flex rounded-full {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="group">
                            <a href="/about" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/about') ? 'active' : '' }}">About</a>
                        </li>
                        <li class="group">
                            <a href="/projects" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/projects') ? 'active' : '' }}">Project</a>
                        </li>
                        <li class="group">
                            <a href="/gallery" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/gallery') ? 'active' : '' }}">Gallery</a>
                        </li>
                        <li class="group">
                            <a href="/contact" class="nav-link text-base font-semibold text-dark p-2 mx-4 flex rounded-full {{ request()->is('/contact') ? 'active' : '' }}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>