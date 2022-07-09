

(function(root) {

    jQuery(() => init());

    const init = (function(){
        window.on_xs_and_up(() => {
            $(".input-group")
                .addClass("rounded-pill");
            $("#login__btn-signin-wrapper")
                .addClass("rounded-pill");
        });


        window.on_sm_and_up(() => {
            $(".input-group")
                .removeClass("rounded-pill");
            $("#login__btn-signin-wrapper")
                .removeClass("rounded-pill");
        });
    });


})(window);
