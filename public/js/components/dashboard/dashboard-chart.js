
(function(root){

    jQuery(() => init());

    const init = (function() {
        root.renderAnalyticChart = Object.freeze(renderAnalyticChart);
        root.renderSubscriptionChart = Object.freeze(renderSubscriptionChart);
    });

    const renderAnalyticChart = (function(container_selector, months=[], data_array=[]) {
        let ctx = document.getElementById(container_selector).getContext("2d");

        let gradient = ctx.createLinearGradient(0, 0, 0, 500);
        gradient.addColorStop(0, 'rgba(23, 8, 236, 0.808)');
        gradient.addColorStop(1, 'rgba(158, 151, 252, 0.808)');

        let gradient2 = ctx.createLinearGradient(0, 0, 0, 500);
        gradient2.addColorStop(0, 'rgba(0, 94, 255, 0.608)');
        gradient2.addColorStop(1, 'rgba(23, 8, 236, 0.808)');

        let data = {
            labels: months,
            datasets: [{
                label: "CURRENT YEAR",
                fill: true,
                pointDot : false,
                backgroundColor: gradient,
                pointRadius: 5,
                borderWidth: 2,
                borderColor: "#FFFFFF",
                tension: 0.4,
                data: (data_array.length > 0)? data_array[0] : data_array,
            },
            {
                label: "PREVIOUS YEAR",
                fill: true,
                pointDot : false,
                backgroundColor: gradient2,
                pointRadius: 5,
                borderWidth: 2,
                borderColor: "#EEEEFF",
                tension: 0.4,
                data: (data_array.length > 1)? data_array[1] : data_array,
            }]
        };

        let options = {

            responsive: true,
            maintainAspectRatio: false,
            layout: {
                autoPadding: false,
                padding: {
                    left: -10,
                    bottom: -10
                }
            },
            plugins: {
                legend: {
                    labels: {
                        usePointStyle: true,
                    }
                },
                tooltip: {
                    usePointStyle: true,
                    yAlign: "bottom",
                    callbacks: {
                        label: function(ctx) {
                            let label = ctx.dataset.label;
                            if (label)
                                label = " " + label + ": ";
                            if (ctx.parsed.y !== null)
                                label += truncateMoney(ctx.parsed.y);
                            return label;
                        },
                    }
                }
            },
            scales: {
                x: {
                    grid: {display: false},
                    ticks: {display: false}
                },
                y: {
                    grid: {
                        display: false,
                        borderColor: "transparent",
                    },
                    ticks: {
                        display: false,
                        beginAtZero:true,
                        min: -5,
                    },
                }
            },
        };

        let config = ({
            type: "line",
            data: data,
            options: options
        });

        let analyticChart = new Chart(ctx, config);

    });


    const renderSubscriptionChart = (function(container_selector, _title="Chart", _label=["consumed", "remaining"], _data=[50, 60]) {
        let ctx = document.getElementById(container_selector).getContext("2d");
        let data = {
            labels: [_title],
            datasets: [
                {
                    label: _label[0],
                    data: [_data[0]],
                    borderColor: "transparent",
                    borderSkipped: false,
                    backgroundColor: "rgb(245, 141, 66)",
                    barPercentage: 0.25,
                    categoryPercentage: 0.25
                },
                {
                    label: _label[1],
                    data: [_data[1]],
                    borderColor: "transparent",
                    borderSkipped: false,
                    backgroundColor:"rgb(47, 214, 209)",
                    barPercentage: 0.25,
                    categoryPercentage: 0.25
                },
            ],
        };
        let options = {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: "y",
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                    align: "start",
                    labels: {
                        pointStyle: "circle",
                        usePointStyle: true,
                        fontStyle: "bold",
                        color: "#ffffff",
                    }
                },
                tooltip: {
                    usePointStyle: true,
                    yAlign: "bottom",
                }
            },
            scales: {
                x: {
                    stacked: true,
                    grid: {
                        display: false,
                        borderColor: "transparent"
                    },
                    ticks: {display: false}
                },
                y: {
                    stacked: true,
                    grid: {
                        display: false,
                        borderColor: "transparent",
                    },
                    ticks: {
                        display: true,
                        mirror: true,
                        beginAtZero:true,
                        labelOffset: -22,
                        color: "#ffffff",
                        font: {
                            size: 16,
                            weight: "bold",
                        }
                    },
                }
            },
        };
        let config = ({
            type: "bar",
            data: data,
            options: options
        });
        let subscriptionChart = new Chart(ctx, config);
    });

    const truncateMoney = (function(money) {
        let value = (Math.floor(money*100).toFixed(0)/100).toFixed(2);
        let mUnit =  "";
        if (value >= 1000)
            mUnit = "K"
        else if (value >= 1000000)
            mUnit = "M"
        else if (value >= 1000000000)
            mUnit = "B"
        else if (value >= 1000000000000)
            mUnit = "T"
        else if (value >= 100000000000000000n)
            mUnit = "Q"

        return "₱" + value.toString() + mUnit;
    });

})(window);
