/*
 *   Copyright (c) 2022 andydevs69420
 *   All rights reserved.
 */


/*
    Add car logic
*/
(function(root) {

    let form, fields, imageField, allowSubmit = true;


    form = $("#management__add-car-modal__form");

    // on Form submit
    form.submit(function(e) {
        e.preventDefault();

        if (!allowSubmit)
        return;

        allowSubmit = false;

        let asObj = {};

        fields = form.find("input.form-control, textarea.form-control");
        fields.each((idx, el) => {
            asObj[el.getAttribute("name")] = (
                el.getAttribute("name") == "files"
            )?el.files:el.value;
        });


        let formData = new FormData();

        Object.keys(asObj).forEach((key) => {
            if (key !== "files")
                formData.append(key, asObj[key]);
        });

        formData.append("filecount", asObj.files.length);

        for (let idx = 0;idx < asObj.files.length; idx++)
        formData.append(`file${idx+1}`, asObj.files[idx]);

        $.ajax({
            url: "/geocarsapp/insert/car",
            type: "json",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: (response, status, xhr) => {
                allowSubmit = true;
                fields.val("");
                $("#carouselCar").addClass("d-none");
                showMessage("Successfully inserted car!");
            },
            error: (response, status, xhr) => {
                console.log(response);
                allowSubmit = true;
                Object.keys(response.responseJSON.data)
                .forEach((key) => {
                    $(`#${key}-feedback`).text(response.responseJSON.data[key]);
                });
            }
        });
    });

    imageField = $("#uploader");

    // on File changed
    imageField.change((e) => {
        if (e.target.files.length > 0)
            $("#management__add-car-modal__carouselCar")
                .removeClass("d-none");
        else
            $("#management__add-car-modal__carouselCar")
                .addClass("d-none");


        let indicatorContainer = $("#management__add-car-modal__indicatorWrapper");
        let itemContainer      = $("#management__add-car-modal__carouselCarInner");

        indicatorContainer.empty();
        itemContainer.empty()

        let files = e.target.files;
        for (let idx = 0;idx < files.length; idx++)
        {
            // append as carousel item
            asCarouselItem(idx, files[idx]);
        }
    });


    root.modalClose = (target_id) => {
        console.log(target_id)
        let modal = $(target_id);
            let message = modal.find("#on-message__modal")
                    .find("#message__container")
                    .text("");
                message.addClass("d-none");
    }

    /**
     * Shows message from server
     * @param {String} message
     * @return null
     **/
    function showMessage(message)
    {
        let messageBox = $("#on-message__modal");
            messageBox.find("#message__container")
            .text(message);

        messageBox.removeClass("d-none");
    }

    /**
     * asCarouselItem
     * @param {Number} id carousel item index
     * @param {File} file image file
     * @returns null
     **/
    function asCarouselItem(id, file)
    {
        let fr, indicatorContainer, itemContainer;

        fr = new FileReader();
        fr.readAsDataURL(file);


        indicatorContainer = $("#management__add-car-modal__indicatorWrapper");
        itemContainer      = $("#management__add-car-modal__carouselCarInner");


        fr.onload = (frEvt) => {
            indicatorContainer?.append(
                $(`<button type="button" data-bs-target="#carouselCarIndicators" data-bs-slide-to="${id}" class="${(id==1)?"active":""}" aria-current="true" aria-label="Slide ${id}"></button>`)
            );
            let current = $(`<div class="carousel-item ${(id==0)?"active":""}">`);
                current.append(`<img src="${frEvt.target.result}" class="d-block w-100" alt="...">`);

            itemContainer.append(current);
        }
    }

})(window);
