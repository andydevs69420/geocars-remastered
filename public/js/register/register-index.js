
(function(root) {

    jQuery(() => init());

    const init = (function() {

        window.on_xs_and_up(() => {

            $(".input-group")
                .addClass("rounded-pill");
            $(".register__btn-register-wrapper")
                .addClass("rounded-pill");

        });


        window.on_sm_and_up(() => {
            $(".input-group")
                .removeClass("rounded-pill");
            $(".register__btn-register-wrapper")
                .removeClass("rounded-pill");
        });

        $("#register__next-btn")
        .click(function(evt) {
            window.location.href = "#register_page-2";

        });

        getAddress(function(place) {
            $("[name=\"address_field\"]").val(place);
        });

    });

    const getAddress = (function(callack) {
        return navigator.geolocation.getCurrentPosition(function(pos){
            let lat, lng;
            lat = pos.coords.latitude;
            lng = pos.coords.longitude;

            $.ajax({
                "url" : "https://nominatim.openstreetmap.org/reverse?format=json&lat="+ lat.toString() + "&lon=" + lng.toString() + "&zoom=18&addressdetails=1",
                "type": "GET",
                "success" : function(response, status, xhr) {
                    if (status === "success")
                        callack(response["display_name"]);
                }
            });

        }, err => console.log(err));
    });

})(window);
