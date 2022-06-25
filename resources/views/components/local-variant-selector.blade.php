
<div class="local-variant-selector__wrapper d-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto">
                <a id="variant__light" class="variant {{ $is_vactive("light") }} d-flex align-items-center justify-content-center" href="{{ url("/variant/light") }}">
                    <span class="shadow-sm" role="button"></span>
                </a>
            </div>
            <div class="col-auto">
                <a id="variant__dark" class="variant {{ $is_vactive("dark") }} d-flex align-items-center justify-content-center" href="{{ url("/variant/dark") }}">
                    <span class="shadow-sm" role="button"></span>
                </a>
            </div>
        </div>
    </div>
</div>
