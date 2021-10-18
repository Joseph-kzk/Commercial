<nav class="pcoded-navbar">

    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel">Navigation</div>

        <ul class="pcoded-item pcoded-left-item">

            <li class=" ">
                <a href="{{ route('home') }}">
                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('abonnements.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext">Abonnements</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('publicites.index') }}">
                    <span class="pcoded-micon"><i class="fa fa-tv"></i></span>
                    <span class="pcoded-mtext">Publicités</span>
                </a>
            </li>

        </ul>
        
    </div>

</nav>