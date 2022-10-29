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
                let modal_owner = $("#management__update-car-modal")
                    .modal("toggle");

                // fallback
                let responseJson;

                try {
                    responseJson = JSON.parse(response);
                }catch(err)
                {   // already json??
                    responseJson = response; }

                let _leading_text = "car_";
                let _required_fields  = [
                    "brand",
                    "model",
                    "plate",
                    "color",
                    "description"
                ];

                Object.keys(responseJson).forEach((_key) => {
                    if (_key .startsWith(_leading_text))
                    {
                        let _name = _key.replace(_leading_text, "");

                        let _index= _required_fields.indexOf(_name);
                        if  (_index >= 0)
                            delete _required_fields[_index];

                        modal_owner.find(`[name="${_name}"]`)
                            .val(responseJson[_key]);
                    }
                });
                console.log(_required_fields);
            },
            error: function(response, status, xhr) {
                console.error(response);
            }
        })
    }


})(window);
