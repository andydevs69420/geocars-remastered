<div class="management__card-tile card mx-auto my-3 border-0 rounded-0 shadow text-decoration-none"
    onclick="return window.tileClick(this);"
    data-link="{{ url("/geocarsapp/car/" . Auth::user()->user_id . "/" . $getId()) }}">

    <div class="card-img-top d-flex justify-content-center align-items-center overflow-hidden"
         style="width: 100%; height: 200px; background-color: #A1A1A1 !important;">
        <img class="img-fluid"
            src="{{ $getThumbnail() }}"
            alt="{{ $getBrand() }}-{{ $getModel() }}">
    </div>

    <div class="card-body">
        <h6 class="card-title {{ variant("text-dark", "text-light") }} text-truncate">{{ $getBrand() }}</h6>
        <h6 class="card-subtitle mb-2 small text-truncate text-muted">{{ $getModel() }}</h6>

        <div class="d-flex flex-row flex-nowrap justify-content-between align-items-center">
            <small class="px-2 py-1 {{ $getBGByStatus() }} text-light">{{ $getStatus() }}</small>

            <div class="vr"></div>

            <button class="btn-favourite btn btn-small rounded-circle p-0"
                style="width: 30px; height: 30px;"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ $isFavourite()? "Remove from favourite":"Favourite" }}">
                <i class="fa-solid fa-heart {{ $getBGByFavouriteValue() }}"></i>
            </button>
        </div>
    </div>

</div>
