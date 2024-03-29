<?php $main_id=$attributes->get("id")?$attributes->get("id") : "management__add-car-modal"; ?>

<div
    id="{{ $main_id }}"
    class="modal fade"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1">

    <div class="modal-dialog modal-fullscreens modal-dialog-centered modal-dialog-scrollable"
         style="min-width: 280px !important;">

        <div class="modal-content w-100 border-0 rounded-1" style="background-color: #eeeeee;">

            <div class="modal-header px-3 py-2 text-center border-0">

                <small class="d-inline px-1 display-6 fs-4">Add a New Car</small>

                <button class="btn ms-auto"
                        type="button"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        onclick="window.modalClose('#{{ $main_id }}')">
                    <i class="fa-solid fa-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <form id="{{$main_id }}__form" action="#" method="GET">

                    @csrf

                    <div class="container-lg">
                        <div class="row">

                            <div class="col-12">
                                <div id="on-message__modal" class="d-none alert alert-warning" role="alert">
                                    <strong id="message__container" class="alert-text">asdasd</strong>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 order-last">

                                <div class="container-fluid bg-white px-3 py-4 rounded">
                                    <div class="row">
                                        {{-- BRAND --}}
                                        <div class="col-12 col-md-6">
                                            <div class="input-group mb-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-center text-light bg-primary" for="{{ $main_id }}__brand"
                                                    style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-building"></i>
                                                </label>
                                                <input id="{{ $main_id }}__brand" class="form-control border-0" list="{{ $main_id }}__brands" type="text" pattern="[_a-zA-Z]+" name="brand" placeholder="Brand" required>
                                                <datalist id="{{ $main_id }}__brands">
                                                    @foreach (\App\Models\UserCompanyCarDetails::all() as $car)
                                                        <option value="{{ $car->car_brand }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col">
                                                <strong id="brand-feedback" class="d-block invalid-feedback"></strong>
                                            </div>
                                        </div>
                                        {{-- MODEL --}}
                                        <div class="col-12 col-md-6">
                                            <div class="input-group my-2 mt-md-0 mb-md-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-light bg-primary" for="{{ $main_id }}__model"
                                                    style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-car-rear"></i>
                                                </label>
                                                <input id="{{ $main_id }}__model" class="form-control border-0" list="{{ $main_id }}__models" type="text" pattern="^[A-Z][a-z]*(\s*[A-Z][a-z]*)?$" name="model" required placeholder="Model">
                                                <datalist id="{{ $main_id }}__models">
                                                    @foreach (\App\Models\UserCompanyCarDetails::all() as $car)
                                                        <option data-car-brand="{{ $car->car_brand }}" value="{{ $car->car_model }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col">
                                                <strong id="model-feedback" class="d-block invalid-feedback"></strong>
                                            </div>
                                        </div>
                                        {{-- PLATE --}}
                                        <div class="col-12">
                                            <div class="input-group my-2 rounded shadow-sm">
                                                <label class="input-group-text border-primary text-light bg-primary" for="{{ $main_id }}__plate"
                                                    style="width: 2.6rem !important;">
                                                    <i class="fa-solid fa-barcode"></i>
                                                </label>
                                                <input id="{{ $main_id }}__plate" class="form-control border-0" type="text" pattern="[A-Z0-9]{6,}" name="plate" placeholder="Plate no" required>
                                            </div>
                                            <div class="col">
                                                <strong id="plate-feedback" class="d-block invalid-feedback"></strong>
                                            </div>
                                        </div>
                                        {{-- description --}}
                                        <div class="col-12">
                                            <div class="input-group my-2 rounded shadow-sm">
                                                <textarea class="form-control border-0" id="" tyep="text" name="description" cols="30" rows="3" placeholder="description"></textarea>
                                            </div>
                                            <div class="col">
                                                <strong id="description-feedback" class="d-block invalid-feedback"></strong>
                                            </div>
                                        </div>
                                        {{-- UPLOADER --}}
                                        <div class="col-12">
                                            <div class="my-2 rounded shadow-sm">
                                                <input id="uploader" class="form-control form-control-sm border" type="file" name="files" accept=".png, .jpg" multiple required>
                                            </div>
                                            <div class="col">
                                                <strong id="file-feedback" class="d-block invalid-feedback"></strong>
                                            </div>
                                        </div>
                                        {{-- COLOR --}}
                                        <div class="col-12">
                                            <span class="d-block small my-2 text-muted" role="text">color variant</span>
                                            <div class="d-flex flex-row flex-wrap w-100">
                                                <span class="d-inline-block rounded shadow-sm">
                                                    <input id="{{ $main_id }}__color-pick" class="form-control form-control-color border-0" type="color" name="color" value="#8970E6" required>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <strong id="color-feedback" class="d-block invalid-feedback"></strong>
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
                                    <div class="d-none carousel slide" id="{{ $main_id }}__carouselCar" data-bs-ride="true">
                                        <div class="carousel-indicators" id="{{ $main_id }}__indicatorWrapper">
                                            {{--
                                                JS auto generated
                                                <button type="button" data-bs-target="#{{ $main_id }}__carouselCar" data-bs-slide-to="${id}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            --}}
                                        </div>
                                        <div class="carousel-inner" id="{{ $main_id }}__carouselCarInner">
                                            {{--
                                                JS Auto Generated
                                                <div class="carousel-item active">
                                                    <img src="https://www.bugatti.com/fileadmin/_processed_/9/5/csm_HEADER_22de7ed3a8.jpg" class="d-block w-100" alt="...">
                                                </div>
                                            --}}
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $main_id }}__carouselCar" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#{{ $main_id }}__carouselCar" data-bs-slide="next">
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
