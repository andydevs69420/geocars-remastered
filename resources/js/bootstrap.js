try
{
    global.$ = global.jQuery = require("jquery");
    require("datatables.net");
    global.Popper = require("@popperjs/core");
    global.bootstrap = require("bootstrap");
    require("@fortawesome/fontawesome-free");
    // ===================
    const {
        Chart,
        CategoryScale,
        LinearScale,
        PointElement,
        LineElement,
        Title,
        Tooltip,
        Legend,
        registerables
    } = require("chart.js");
    global.Chart = Chart;
    global.Chart.register(...registerables);
}
catch(err)
{
    throw err;
}
