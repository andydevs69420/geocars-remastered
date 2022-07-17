

<section id="{{ $attributes->get("id")?$attributes->get("id") : "dashboard-page"  }}" class="d-block w-100 h-100">
    <div class="container-lg">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="container-fluid my-2 px-0">
                    <div class="row">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            {{-- TILE 0 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-4 mb-md-0 bg-primary shadow">
                                <img class="img tile__bg-icon position-absolute" src="{{ asset("images/car-image-1.webp") }}" alt="car-image">
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area position-absolute text-light">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small text-center text-nowrap text-truncate w-100 fw-bold">{{ __("RENT REQUEST"); }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            {{-- TILE 1 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-2 mb-md-0 bg-primary shadow">
                                <img class="img tile__bg-icon position-absolute animate" src="{{ asset("images/car-image-2.webp") }}" alt="car-image">
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area position-absolute text-light">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small text-center text-nowrap text-truncate w-100 fw-bold">{{ __("TO PICKUP"); }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-12 col-lg-4 order-first order-lg-last">
                <div class="container-fluid position-relative my-2 px-0">
                    <div id="dashboard__tile-center" class="d-flex flex-row flex-nowrap mx-auto mb-4 px-3 py-5 bg-primary text-light shadow">
                        <div class="d-block w-50 text-center">
                            <span class="d-block h3">{{ __("0") }}</span>
                            <span class="d-inline-block">{{ __("unavailable") }}</span>
                        </div>
                        <div class="vr bg-white"></div>
                        <div class="d-block w-50 text-center">
                            <span class="d-block h3">{{ __("0") }}</span>
                            <span>{{ __("available") }}</span>
                        </div>
                    </div>
                    <span id="dashboard_center-button-1" class="d-block mx-auto position-relative">
                        <span id="dashboard__center-button-icon"
                        class="d-flex flex-nowrap
                               align-items-center
                               justify-content-center
                               position-absolute
                               rounded-circle bg-primary text-light">
                            <i class="fa-solid fa-car-rear"></i>
                        </span>
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-2 mt-sm-0 order-last">
                <div class="container-fluid my-2 px-0">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            {{-- TILE 2 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-3 mb-md-0 bg-primary shadow">
                                <img class="img tile__bg-icon position-absolute" src="{{ asset("images/car-image-3.webp") }}" alt="car-image">
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area position-absolute text-light">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small text-center text-nowrap text-truncate w-100 fw-bold">{{ __("TO RETURN"); }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            {{-- TILE 3 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-3 mb-md-0 bg-primary shadow">
                                <img class="img tile__bg-icon position-absolute" src="{{ asset("images/car-image-4.webp") }}" alt="car-image">
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area position-absolute text-light">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small text-center text-nowrap text-truncate w-100 fw-bold">{{ __("ALARMING"); }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row my-2">
            <div class="col-12 col-md-8">
                {{-- TILE 0 --}}
                <div class="d-block dashboard__tile-large my-2 shadow">
                    <img class="img tile__bg-icon position-absolute" src="{{ asset("images/cloudy-day.webp") }}" alt="car-image">
                    <div class="tile__content-area position-absolute">
                        <canvas id="dashboard__analytics-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">

            </div>
        </div>
    </div>
</section>

