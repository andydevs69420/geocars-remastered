
(function(root) {

    jQuery(function() {

    });

    $("#register__next-step-wrapper")
    .click(function(evt) {

        let link = evt.target.href.split("#");
            link = (link)? link[1] : null;

        if (link)
            link = (link = link?.split("-"))? link[0] + "-" + ((link[1] == "1")? "2" : "1") : $(evt.target).attr("disabled", true);

        evt.target.href = "#" + link;

    });

})(window);
