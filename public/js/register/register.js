
(function(root) {

    jQuery(function() {

        window.on_xs_and_up(() => {
            $(".input-group-text")
                .addClass("rounded-pill rounded-input");
            $(".input-group")
                .addClass("rounded-pill");
            $("input")
                .addClass("rounded-input");
        });


        window.on_sm_and_up(() => {
            $(".input-group-text")
                .removeClass("rounded-pill rounded-input");
            $(".input-group")
                .removeClass("rounded-pill");
            $("input")
                .removeClass("rounded-input");
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
