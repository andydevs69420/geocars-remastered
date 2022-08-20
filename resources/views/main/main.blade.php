@extends("layout.master")

@section("page-title", "GEOCARS | geocarsapp")

{{-- css --}}
@section("stylesheet")
    {{-- page styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/main/default/main.css"), asset("css/main/dark/main.css")) }}">
    {{-- dashboard styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/components/dashboard/default/dashboard.css"), asset("css/components/dashboard/dark/dashboard.css")) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset("css/components/local-variant-selector/local-variant-selector.css") }}">
@stop

{{-- body --}}
@section("app-body")
    <div id="main__layout-wrapper" class="d-flex flex-row w-100 h-100">

        <span id="main__collapse">
            <nav id="main__navbar" class="collapse collapse-horizontal show">
                <div id="main__navbar-nav" class="container-fluid px-md-3">

                   <div class="d-block my-0 my-md-3 text-center">
                        <a href="{{ url("/geocarsapp") }}" class="d-none d-md-inline-block">
                            <img class="shadow-sm" src="{{ asset("images/geocarsapp-rounded.png") }}" alt="geocars-branding" width="40%">
                        </a>
                   </div>

                   <hr class="d-none d-md-flex hr">

                   <span class="d-none d-md-block px-0 py-2 {{ variant("text-dark", "text-muted") }}" role="text">SYSTEM MENU</span>

                    <ul id="main__link-list" class="navbar-nav d-flex flex-row flex-md-column justify-content-around">
                        <li class="nav-item">
                            <a href="#dashboard-page" class="nav-link active px-0 py-1 {{ variant("text-muted", "text-light") }}">
                                <i class="d-inline mx-0 mx-sm-2 fa-solid fa-chart-column"></i> <span class="d-none d-md-inline text-truncate small">{{ __("Dashboard") }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#management-page" class="nav-link px-0 py-1 {{ variant("text-muted", "text-light") }}">
                                <i class="d-inline mx-0 mx-sm-2 fa-solid fa-car-side"></i> <span class="d-none d-md-inline text-truncate small">{{ __("Management") }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#operation-page" class="nav-link px-0 py-1 {{ variant("text-muted", "text-light") }}">
                                <i class="d-inline mx-0 mx-sm-2 fa-solid fa-house"></i> <span class="d-none d-md-inline text-truncate small">{{ __("Operation") }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#account-page" class="nav-link px-0 py-1 {{ variant("text-muted", "text-light") }}">
                                <i class="d-inline mx-0 mx-sm-2 fa-solid fa-user-gear"></i> <span class="d-none d-md-inline text-truncate small">{{ __("Account") }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </span>

        <div id="main__content-area" class="d-block w-100 h-100">

            <nav id="main__panel-nav" class="d-none d-md-flex navbar navbar-expand-xs {{ variant("navbar-light", "navbar-dark") }} shadow-sm">
                <div class="container-fluid">
                    <button class="navbar-toggler p-1 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#main__navbar">
                        <div class="navbar-toggler-icon"></div>
                    </button>
                </div>
            </nav>

            <div id="main__section-wrapper" class="container-fluid px-0" data-bs-spy="scroll" data-bs-target="#main__navbar" data-bs-offset="100">

                <x-dashboard  id="dashboard-page" ></x-dashboard>
                <x-management id="management-page"></x-management>
                <x-operation  id="operation-page" ></x-operation>
                <x-account    id="account-page"   ></x-account>

            </div>

        </div>
    </div>
@stop

{{-- js --}}
@section("javascript")
    <script type="text/javascript" src="{{ asset("js/components/dashboard/dashboard-chart.js")}}"></script>
    <script type="text/javascript" defer>


        jQuery(() => init());

        let init = (function() {
            window.renderAnalyticChart(
                "dashboard__analytics-chart",
                ["January", "February", "March", "April", "May", "June", "July"], [
                [12, 32, 100, 23, 56, 27, 90],
                [122, 323, 10, 123, 36, 227, 100],
            ]);
            window.renderSubscriptionChart(
                "dashboard__subscription-chart",
                ["used        ", "remaining"],
                [300, 140]
            );


            $(window).resize(() => refreshScrollSpy());

        });


        const refreshScrollSpy = function() {
            $("[data-bs-spy='scroll']").scrollspy("refresh");
        }

    </script>
@stop
