try
{
    global.$ = global.jQuery = require("jquery");
    require("datatables.net");
    global.Popper = require("@popperjs/core");
    global.bootstrap = require("bootstrap");
    require("@fortawesome/fontawesome-free");
}
catch(err)
{
    throw err;
}