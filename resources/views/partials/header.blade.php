<header>
    <nav>
        <ul>
            <li>
                <a
                class=" {{ Request::route()->getName() == 'home' ? 'active' : '' }} "
                href=" {{ url('/') }} ">Home</a>
            </li>
            <li>
                <a
                class=" {{ Request::route()->getName() == 'fumetti' || Request::route()->getName() == 'fumetto' ? 'active' : '' }} "
                href=" {{ route('fumetti') }} ">Fumetti</a>
            </li>
        </ul>
    </nav>
</header>