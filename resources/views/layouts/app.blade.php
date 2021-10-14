
@include("layouts.head")

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>

            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">

        <div class="pcoded-overlay-box"></div>

        <div class="pcoded-container navbar-wrapper">

            @include("layouts.nav")


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include("layouts.aside")

                    <div class="pcoded-content">

                        <div class="pcoded-inner-content">

                            @yield('content')

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>

@include("layouts.footer")