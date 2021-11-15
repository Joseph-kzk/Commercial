@php($notifications = \App\Models\EndDatesNotificationsSent::query()->whereNull('read_at')->get())

<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="fa fa-user"></i>
            </a>
            <a href="index.html">

                <h4>Commercial</h4>
            </a>
            <a class="mobile-options">
                <i class="fa fa-user"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i
                                    class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                        data-cf-modified-6bd60cde68fe0ed6d0edb0f9-="">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">

                    <div class="dropdown-primary dropdown">

                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge bg-c-pink">{{ $notifications->count()  }}</span>
                        </div>

                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notification(s)</h6>
                                @if( $notifications->count() > 0 )
                                    <label class="label label-danger">Nouveau</label>
                                @endif
                            </li>

                            @foreach($notifications as $notification)
                                @if( $notification->isAbonnement()  )
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                 src="{{ asset('assets/images/user3.png') }}"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Abonnement</h5>
                                                <p class="notification-msg">Des abonements ont expirées</p>

{{--                                                <a class="notification-time btn btn-primary"></a>--}}

                                            </div>
                                            <a href="{{ route('notification_read_abonnement',['id' => $notification->id ])  }}">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </li>
                               @endif
                                    @if( $notification->isPublicite()  )
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                     src="{{ asset('assets/images/user3.png') }}"
                                                     alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">publicités </h5>
                                                    <p class="notification-msg">Des publicités on expirées</p>
{{--                                                    <a class="notification-time btn btn-primary"></a>--}}{{----}}
                                                </div>
                                                <a href="{{ route('notification_read_publicite',['id' => $notification->id ])  }}">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                            @endforeach

                        </ul>

                    </div>
                </li>


                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/user3.png') }}" class="img-radius"
                                alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                            <li>
                                <a href="">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>

                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="fa fa-sign-out-alt"></i> Déconnexion
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
