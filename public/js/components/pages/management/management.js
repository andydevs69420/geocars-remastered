/*
 *   Copyright (c) 2022
 *   All rights reserved.
 */




(function(root) {

    let form, fields, imageField, allowSubmit = true;

    form = $("#management-add-car-modal__form");
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
                console.log(response, status);
                fields.val("");
            },
            error: (response, status, xhr) => {
                allowSubmit = true;
                console.error(response.responseJSON);
            }
        });
    });


    imageField = $("#uploader");
    imageField.change((e) => {

        let indicatorContainer = $("#indicatorWrapper");
        let itemContainer      = $("#carouselCarInner");

        indicatorContainer.empty();
        itemContainer.empty()

        let files = e.target.files;
        for (let idx = 0;idx < files.length; idx++)
        {
            // append as carousel item
            asCarouselItem(idx, files[idx]);
        }
    });

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


        indicatorContainer = $("#indicatorWrapper");
        itemContainer      = $("#carouselCarInner");

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
