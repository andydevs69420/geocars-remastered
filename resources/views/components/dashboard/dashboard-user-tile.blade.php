<div class="container-fluid d-flex flex-column justify-content-center align-items-center border-bottom {{ variant("", "border-dark") }}"
    style="height: auto;">

    <div class="d-block px-1 py-3 w-100" role="banner">

        <div class="d-block px-0 py-2">

            <div class="d-block mb-2 p-1 rounded-circle bg-light shadow overflow-hidden" style="width: 45px; height: 45px;">
                <img class="img-fluid" src="{{ $getUserDP() }}" alt="user-avatar">
            </div>

            <small class="d-block fw-bold {{ variant("text-dark", "text-light") }}" role="text">{{ $getUserName() }}</small>
            <small class="d-block text-muted text-truncate" role="text">{{ $getUserEmail() }}</small>
        </div>

        <div class="progress" style="height: 5px">
            <div class="progress-bar {{ $getColorStatusByProgress() }}" role="progressbar"
                aria-valuenow="{{ $getProgress() }}"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: {{ $getProgress() }}%;"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                data-bs-title="usage: {{ $getProgress() }}%"></div>
        </div>

    </div>
</div>
