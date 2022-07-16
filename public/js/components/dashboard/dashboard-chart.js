

(function(root){

    jQuery(() => init());

    let init = (function() {
        root.renderAnalyticChart = Object.freeze(renderAnalyticChart);
    });

    let renderAnalyticChart = (function(container_selector, months=[], data_array=[]) {
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
                pointDot : false,
                backgroundColor: gradient,
                pointRadius: 5,
                borderWidth: 2,
                borderColor: "#FFFFFF",
                data: (data_array.length > 0)? data_array[0] : data_array
            },
            {
                label: "PREVIOUS YEAR",
                pointDot : false,
                backgroundColor: gradient2,
                pointRadius: 5,
                borderWidth: 2,
                data: (data_array.length > 1)? data_array[1] : data_array
            }]
        };

        let options = {
            responsive:true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    },
                }]
            },
            legend:{
                display: true,
                labels: {
                    usePointStyle: true,
                }
            }
        };

        let config = ({
            type: ((root.innerWidth >= 0 && root.innerWidth < 576)? "bar" : "line"),
            data: data,
            options: options
        });

        let myLineChart = new Chart(ctx, config);

        $(root).resize(function() {
            setTimeout(function() {
                config.type = ((root.innerWidth >= 0 && root.innerWidth < 576)? "bar" : "line");
                // ctx.style.width  = "100%";
                // ctx.style.height = "100%";
                console.log(ctx);
                myLineChart.update();
            }, 250);
        });
    });

})(window);
