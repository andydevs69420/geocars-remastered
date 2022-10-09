


(function(root) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery(() => initialize());

    const initialize = (function() {

        _load_temporary();

        $("[data-bs-spy='scroll']")
            .scrollspy("refresh");

        $("[data-bs-toggle='tooltip']")
            .tooltip();

    });

    const visitLink = (function() {
        let link = root.location.href.split("#");
            if (link.length > 1)
            {
                let newLink =  "geocarsapp#" + link[1];
                root.location.href = newLink;
            }
    });

    let _load_temporary = (function() {
        window.renderAnalyticChart(
            "dashboard__analytics-chart",
            ["January", "February", "March", "April", "May", "June", "July"], [
            [12, 32, 100, 23, 56, 27, 90],
            [122, 323, 10, 123, 36, 227, 100],
        ]);

        window.renderSubscriptionChart(
            "dashboard__subscription-chart",
            "Plan usage",
            ["used        ", "remaining"],
            [300, 140]
        );

        window.renderSubscriptionChart(
            "dashboard__car-tally-chart",
            "Vehicle availability",
            ["used        ", "remaining"],
            [300, 140]
        );
    });

})(window);
