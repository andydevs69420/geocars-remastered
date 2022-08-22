

(function(root) {
   jQuery(() => constructor());
})(window);



/**
 * @brief Called when file is ready!
 * @return void
 **/
function constructor()
{
    addActiveListener();
    let active = getFragmentAsLink();
    if (active)
    { window.location.href = active.href;
      active.click(); }
}


/**
 * @brief Get curent fragment for autoscrolling navigation.
 * @return void
 **/
/*
 | Example:
 | https://www.geocarsapp.com/geocarsapp#dashboard-page
 | splits: ["https://www.geocarsapp.com/geocarsapp", "dashboard-page"]
 | index 1 is the fragment, otherwise no fragment
 | or no intended auto scroll for current page!
 */
function getFragmentAsLink()
{
    let fragment = window.location.href;
        fragment = fragment.split("#");
        if (fragment.length < 2)
           return null;
    // hasfragment?
    fragment = fragment[1];
    let nav_link = $('a[href="#' + fragment + '"]');
    return nav_link?nav_link[0]:null;
}

/**
 * @brief Gets all ".nav-link" from .nav.
 * @return void
 **/
function getNavLink()
{
    let nav_link = $('#main__link-list')
        ?.find("a.nav-link");
    return nav_link;
}


/**
 * @brief Adds click event to .nav-link.
 * @return void
 **/
function addActiveListener()
{
    getNavLink().each((index, anchor_el) => {
        let active = $(anchor_el);
            active.click(function(evt) {
                getNavLink().each((index, anchor_el) => {
                    $(anchor_el).removeClass("active");
                });

                active.addClass("active");
            });
    });
}


