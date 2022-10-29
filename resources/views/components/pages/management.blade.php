<section id="{{ $attributes->get("id")?$attributes->get("id") : "mangement-page"  }}" class="d-block py-0 py-sm-2 w-100 h-100">


    {{-- ADD CAR MODAL --}}
    <x-management.management-add-car-modal id="management__add-car-modal"></x-management.management-add-car-modal>

    {{-- UPDATE CAR MODAL --}}
    <x-management.management-update-car id="management__update-car-modal"></x-management.management-update-car>

    <div class="container-lg p-0 p-sm-2">

        <div id="management__control-panel" class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-md-center p-2 bg-light rounded-0 shadow-sm">
            <div id="management__tray-0" class="d-block">

                <div class="input-group input-group-sm">
                    <label class="input-group-text text-light border-0 bg-primary" for="management__filter-field">filter</label>
                    <select id="management__filter-field" class="form-select border-primary" list="options" name="filter" type="text">
                        <option value="1">Car brand   </option>
                        <option value="2">Car model   </option>
                        <option value="3">Popularity  </option>
                        <option value="4">Availability</option>
                    </select>
                </div>

            </div>

            <div id="management__tray-1" class="d-block mt-2 mt-sm-0 align-self-end">
                <span class="d-inline-block w-100 shadow-sm">
                    <button class="btn btn-sm btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#management__add-car-modal">
                        <i class="fa-thin fa-plus"></i> <span role="text">New car</span>
                    </button>
                </span>
            </div>
        </div>

        <div id="management__car-list" class="d-flex flex-row flex-wrap justify-content-start my-0 my-sm-3 p-1 w-100 rounded-0 bg-light shadow-sm">

            @if (count($cars) <= 0)
                <x-management.management-empty-car-list>
                    </x-management.management-empty-car-list>
            @else
                    @foreach ($cars as $car)
                        <x-management.management-car-tile
                            thumbnail="{{ asset('storage/'.$car->carImage()->first()->car_image_link) }}"
                            :car-id="$car->user_company_car_details_id"
                            :car-brand="$car->car_brand"
                            :car-model="$car->car_model"
                            :status="$car->carStatus()->first()->car_status_name"
                            :is-favourite="false"
                            >
                        </x-management.management-car-tile>
                    @endforeach
            @endif

        </div>

    </div>

</section>
