<div
    id="{{ $attributes->get("id")?$attributes->get("id") : "management__add-car-modal" }}"
    class="modal fade"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1">

    <div class="modal-dialog modal-fullscreens modal-dialog-centered modal-dialog-scrollable"
         style="min-width: 280px !important;">

        <div class="modal-content w-100 border-0" style="background-color: #f0e7e6;">

            <div class="modal-header px-4 py-2 text-center border-0">

                <small class="d-inline px-1 display-6 fs-4">Add a new car</small>

                <button class="btn ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="#">

                    @csrf

                    <div class="container-lg">
                        <div class="row">
                            <div class="col-12 col-md-12 order-last">

                                <div class="container-fluid px-3 py-4 bg-light rounded shadow-sm">
                                    <div class="row">
                                        {{-- BRAND --}}
                                        <div class="col-12 col-md-6">
                                            <div class="input-group mb-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-center text-light bg-primary" for="add-car-modal__brand"
                                                       style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-building"></i>
                                                </label>
                                                <input id="add-car-modal__brand" class="form-control border-0" type="text" pattern="[_a-zA-Z]" placeholder="Brand">
                                            </div>
                                        </div>
                                        {{-- MODEL --}}
                                        <div class="col-12 col-md-6">
                                            <div class="input-group my-2 mt-md-0 mb-md-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-light bg-primary" for="add-car-modal__model"
                                                       style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-car-rear"></i>
                                                </label>
                                                <input id="add-car-modal__model" class="form-control border-0" type="text" pattern="[_a-zA-Z0-9]" placeholder="Model">
                                            </div>
                                        </div>
                                        {{-- UPLOADER --}}
                                        <div class="col-12">
                                            <div class="my-2 rounded shadow-sm">
                                                <input class="form-control form-control-sm border" type="file" multiple>
                                            </div>
                                        </div>
                                        {{-- COLOR --}}
                                        <div class="col-12">
                                            <span class="d-block small my-2 text-muted" role="text">color variant</span>
                                            <div class="d-flex flex-row flex-wrap w-100">
                                                <span class="d-inline-block rounded shadow-sm">
                                                    <input id="add-car-modal__color-pick" class="form-control form-control-color border-0" type="color" value="#8970E6">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-12">
                                <div class="container-fluid p-1 my-3 bg-light rounded shadow-sm">
                                    {{-- carouel --}}
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://www.bugatti.com/fileadmin/_processed_/9/5/csm_HEADER_22de7ed3a8.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.bugatti.com/fileadmin/_processed_/9/5/csm_HEADER_22de7ed3a8.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.bugatti.com/fileadmin/_processed_/9/5/csm_HEADER_22de7ed3a8.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer px-4 py-2 border-0">
                <small class="text-muted">geocars v0.0.1</small>
            </div>

        </div>
    </div>
</div>
