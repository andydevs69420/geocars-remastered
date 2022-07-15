

<section id="{{ $attributes->get("id")?$attributes->get("id") : "dashboard-page"  }}" class="d-block w-100 h-100">
    <div class="container-lg">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="container-fluid my-2 px-0">
                    <div class="row">
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            {{-- TILE 0 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-3 mb-md-0 shadow">
                                <span class="tile__bg-icon text-muted">
                                    <i class="fa-solid fa-car fa-4x"></i>
                                </span>
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small fw-bold">{{ __("LABEL"); }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                            {{-- TILE 1 --}}
                            <div class="d-block dashboard__tile-small shadow">
                                <span class="tile__bg-icon text-muted">
                                    <i class="fa-solid fa-car fa-4x"></i>
                                </span>
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small fw-bold">{{ __("LABEL"); }}</span>
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
            <div class="col-12 col-md-6 col-lg-4 order-last">
                <div class="container-fluid my-2 px-0">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            {{-- TILE 2 --}}
                            <div class="d-block dashboard__tile-small mb-0 mb-sm-3 mb-md-0 shadow">
                                <span class="tile__bg-icon text-muted">
                                    <i class="fa-solid fa-car fa-4x"></i>
                                </span>
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small fw-bold">{{ __("LABEL"); }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            {{-- TILE 3 --}}
                            <div class="d-block dashboard__tile-small shadow">
                                <span class="tile__bg-icon text-muted">
                                    <i class="fa-solid fa-car fa-4x"></i>
                                </span>
                                <div class="d-flex flex-column justify-content-center align-items-center tile__content-area">
                                    <h3 class="h3">{{ __("0"); }}</h3>
                                    <span class="small fw-bold">{{ __("LABEL"); }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-md-8">
                {{-- TILE 0 --}}
                <div class="d-block dashboard__tile-large my-2 shadow"></div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card dashboard__card-tile border-0 my-2 shadow">
                    <img class="card-img-top shadow" src="https://149366088.v2.pressablecdn.com/wp-content/uploads/2022/03/jammy-jellyfish-wallpaper.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title position-relative mb-0">
                            <i class="fa-solid fa-crown dashboard__card-tile-icon text-warning" style="text-shadow: 2px 3px rgba(0,0,0,0.4)"></i>
                            {{ __("Plan") }}
                            <small class="small dashboard__card-plan rounded text-light bg-warning">{{ __("Pro") }}</small>
                        </h5>
                        <small class="card-subtitle small text-muted">{{ __("Your current subscription") }}</small>

                        <div id="dashboard__card-more-info" class="collapse">
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus recusandae magni dolorem dicta labore? Repellendus odit dolore cupiditate maxime officia?
                            </p>
                        </div>

                        <div class="container-fluid mt-5 text-center">
                            <span class="d-inline-block w-auto shadow rounded-pill">
                                <button class="btn btn-sm btn-success px-3 rounded-pill" data-bs-toggle="collapse" data-bs-target="#dashboard__card-more-info" aria-expanded="false" aria-controls="dashboard__card-more-info">
                                    {{ __("Read more") }}
                                </button>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

