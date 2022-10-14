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
                <form id="management-add-car-modal__form" action="#" method="GET">

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
                                                <input id="add-car-modal__brand" class="form-control border-0" list="add-car-modal__brands" type="text" pattern="[_a-zA-Z]+" name="brand" placeholder="Brand" required>
                                                <datalist id="add-car-modal__brands">
                                                    @foreach (\App\Models\UserCompanyCarDetails::all() as $car)
                                                        <option value="{{ $car->car_brand }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                        </div>
                                        {{-- MODEL --}}
                                        <div class="col-12 col-md-6">
                                            <div class="input-group my-2 mt-md-0 mb-md-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-light bg-primary" for="add-car-modal__model"
                                                    style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-car-rear"></i>
                                                </label>
                                                <input id="add-car-modal__model" class="form-control border-0" list="add-car-modal__models" type="text" pattern="^[A-Z][a-z]*(\s*[A-Z][a-z]*)?$" name="model" required placeholder="Model">
                                                <datalist id="add-car-modal__models">
                                                    @foreach (\App\Models\UserCompanyCarDetails::all() as $car)
                                                        <option data-car-brand="{{ $car->car_brand }}" value="{{ $car->car_model }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                        </div>
                                        {{-- PLATE --}}
                                        <div class="col-12">
                                            <div class="input-group my-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-light bg-primary" for="add-car-modal__plate"
                                                    style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-barcode"></i>
                                                </label>
                                                <input id="add-car-modal__plate" class="form-control border-0" type="text" pattern="[A-Z0-9]{6,}" name="plate" placeholder="Plate no" required>
                                            </div>
                                        </div>
                                        {{-- description --}}
                                        <div class="col-12">
                                            <div class="input-group my-2 rounded shadow-sm">
                                                <textarea class="form-control border-0" id="" tyep="text" name="description" cols="30" rows="3" placeholder="description"></textarea>
                                            </div>
                                        </div>
                                        {{-- UPLOADER --}}
                                        <div class="col-12">
                                            <div class="my-2 rounded shadow-sm">
                                                <input id="uploader" class="form-control form-control-sm border" type="file" name="files" accept=".png, .jpeg" multiple required>
                                            </div>
                                        </div>
                                        {{-- COLOR --}}
                                        <div class="col-12">
                                            <span class="d-block small my-2 text-muted" role="text">color variant</span>
                                            <div class="d-flex flex-row flex-wrap w-100">
                                                <span class="d-inline-block rounded shadow-sm">
                                                    <input id="add-car-modal__color-pick" class="form-control form-control-color border-0" type="color" name="color" value="#8970E6" required>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 offset-8">
                                            <span class="d-inline-block w-100 shadow-sm">
                                                <button class="btn btn-sm btn-primary w-100" type="submit">
                                                    ADD
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="container-fluid my-3 p-0 bg-light rounded shadow-sm">
                                    {{-- carouel --}}
                                    <div class="d-none carousel slide" id="carouselCar" data-bs-ride="true">
                                        <div class="carousel-indicators" id="indicatorWrapper">
                                            {{--
                                                JS auto generated
                                                <button type="button" data-bs-target="#carouselCar" data-bs-slide-to="${id}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            --}}
                                        </div>
                                        <div class="carousel-inner" id="carouselCarInner">
                                            {{--
                                                JS Auto Generated
                                                <div class="carousel-item active">
                                                    <img src="https://www.bugatti.com/fileadmin/_processed_/9/5/csm_HEADER_22de7ed3a8.jpg" class="d-block w-100" alt="...">
                                                </div>
                                            --}}
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCar" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCar" data-bs-slide="next">
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
