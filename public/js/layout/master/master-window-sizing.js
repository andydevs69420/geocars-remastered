

(function(root) {

    const EVT_STACK = [];

    jQuery(() => init());


    const init = (function(){
        root.on_xs_and_up  = Object.freeze(on_xs_and_up);
        root.on_sm_and_up  = Object.freeze(on_sm_and_up);
        root.on_md_and_up  = Object.freeze(on_md_and_up);
        root.on_lg_and_up  = Object.freeze(on_lg_and_up);
        root.on_xl_and_up  = Object.freeze(on_xl_and_up);
        root.on_xxl_and_up = Object.freeze(on_xxl_and_up);
        $(root).resize(resize_evt);
    });

    const resize_evt = (function(e){
        EVT_STACK.forEach(each_evt => {
            each_evt();
        })
    });

    const on_xs_and_up = (function(callack) {
        if (root.innerWidth >= 0 && root.innerWidth < 576)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 0 && root.innerWidth < 576)
                callack();
        }));
    });

    const on_sm_and_up = (function(callack) {
        if (root.innerWidth >= 576 && root.innerWidth < 768)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 576 && root.innerWidth < 768)
                callack();
        }));
    });

    const on_md_and_up = (function(callack) {
        if (root.innerWidth >= 768 && root.innerWidth < 992)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 768 && root.innerWidth < 992)
                callack();
        }));
    });

    const on_lg_and_up = (function(callack) {
        if (root.innerWidth >= 992 && root.innerWidth < 1200)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 992 && root.innerWidth < 1200)
                callack();
        }));
    });

    const on_xl_and_up = (function(callack) {
        if (root.innerWidth >= 1200 && root.innerWidth < 1400)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 1200 && root.innerWidth < 1400)
                callack();
        }));
    });

    const on_xxl_and_up = (function(callack) {
        if (root.innerWidth >= 1400)
            callack();
        EVT_STACK.push((function(){
            if (root.innerWidth >= 1400)
                callack();
        }));
    });

})(window);
