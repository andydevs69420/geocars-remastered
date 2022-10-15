/*
 *   Copyright (c) 2022 andydevs69420
 *   All rights reserved.
 */



(function(root) {

    root.tileClick = function(e) {
        $.ajax({
            url: $(e).data("link"),
            method: "GET",
            success: function(response, status, xhr) {
                $("#management__view-car-modal")
                    .modal("toggle");
                console.log(response);
            },
            error: function(response, status, xhr) {
                console.error(response);
            }
        })
    }


})(window);
