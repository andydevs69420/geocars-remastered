<section id="{{ $attributes->get("id")?$attributes->get("id") : "mangement-page"  }}" class="d-block w-100 h-100">

    <div class="container-lg">

        <div id="management__control-panel" class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-md-center p-2 bg-light rounded shadow-sm">
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
                    <button class="btn btn-sm btn-primary w-100" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Insert a new car.">
                        <i class="fa-thin fa-plus"></i> <span role="text">New car</span>
                    </button>
                </span>
            </div>
        </div>

        <div id="management__car-list" class="d-flex flex-row flex-wrap justify-content-evenly my-3 p-1 w-100 rounded bg-light shadow-sm">
            {{-- content --}}
            @for ($i=0; $i < 100; $i++)
                <x-management.management-car-tile></x-management.management-car-tile>
            @endfor
        </div>

    </div>

</section>
