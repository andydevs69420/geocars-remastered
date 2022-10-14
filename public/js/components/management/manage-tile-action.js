/*
 *   Copyright (c) 2022
 *   All rights reserved.
 */



(function(root) {
    jQuery(() => init());

    function init() {
        ajaxLoad();
        $(".btn-favourite").click((e) => {
            e.stopPropagation();
        });
    }

    root.tileClick = function(e) {
        let asJq = $(e);
        $.ajax({
            url: $(e).data("link"),
            method: "GET",
            success: function(response, status, xhr) {
                console.log(response);
            },
            error: function(response, status, xhr) {
                console.log(response);
            }
        })
    }

    function ajaxLoad() {

    }


})(window);


