/*
 *   Copyright (c) 2022
 *   All rights reserved.
 */



(function(root) {

    let form, fields;

    form = $("#management-add-car-modal__form");
    form.submit(function(e) {
        e.preventDefault();

        console.log("clicked");
        let asObj = {};

        fields = form.find("input.form-control");
        fields.each((idx, el) => {
            asObj[el.getAttribute("name")] = (
                el.getAttribute("name") == "files"
            )?el.files:el.value;
        });


        let formData= new FormData();

        Object.keys(asObj).forEach((key) => {
            if (key !== "files")
                formData.append(key, asObj[key]);
        });

        formData.append("filecount", asObj.files.length);

        for (let idx = 0;idx < asObj.files.length; idx++)
        formData.append(`file${idx+1}`, asObj.files[idx]);

        fields.val("");

        $.ajax({
            url: "/geocarsapp/insert/car",
            type: "json",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: (response, status, xhr) => {
                console.log(response, status);
            },
            error: (response, status, xhr) => {
                console.error(response.responseJSON);
            }
        });
    });


})(window);
