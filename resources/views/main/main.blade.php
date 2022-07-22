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
    <nav id="main__navbar" class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">

            <a href="{{ url("/geocarsapp") }}" class="d-none d-sm-inline-block position-absolute navbar-brand">
                <img class="shadow-sm" src="{{ asset("images/geocarsapp-rounded.png") }}" alt="geocars-branding" width="35px">
            </a>

            <ul id="main__link-list" class="navbar-nav flex-row justify-content-around mx-auto">
                <li class="nav-item">
                    <a href="#dashboard-page" class="nav-link">
                        <i class="d-inline d-sm-none fa-solid fa-chart-column"></i> <span class="d-none d-sm-inline small">{{ __("Dashboard") }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#operation-page" class="nav-link">
                        <i class="d-inline d-sm-none fa-solid fa-car-side"></i> <span class="d-none d-sm-inline small">{{ __("Management") }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="d-inline d-sm-none fa-solid fa-house"></i> <span class="d-none d-sm-inline small">{{ __("Operation") }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="d-inline d-sm-none fa-solid fa-user-gear"></i> <span class="d-none d-sm-inline small">{{ __("Account") }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="main__content-area" class="container-fluid px-0 h-100" data-bs-spy="scroll" data-bs-target="#main__navbar">
        <x-dashboard id="dashboard-page"></x-dashboard>
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
                ["used", "remaining"],
                [300, 140]
            );
        });

    </script>
@stop
