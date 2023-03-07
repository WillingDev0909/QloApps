/**
 * 2010-2023 Webkul.
 *
 * NOTICE OF LICENSE
 *
 * All right is reserved,
 * Please go through LICENSE.txt file inside our module
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please refer to CustomizationPolicy.txt file inside our module for more information.
 *
 * @author Webkul IN
 * @copyright 2010-2023 Webkul IN
 * @license LICENSE.txt
 */

var dashinsights_data;
var dashinsights_chart;

function line_chart_dashinsights(widget_name, chart_details) {
    nv.addGraph(function () {
        var chart = nv.models.lineChart()
            .interpolate('basis')
            .useInteractiveGuideline(true)
            .x(function (d) { return (d !== undefined ? d[0] : 0); })
            .y(function (d) { return (d !== undefined ? parseInt(d[1]) : 0); })
            .forceY(0)
            .margin({
                left: 30,
                right: 30,
            });

        chart.xAxis.tickFormat(function (d) {
            date = new Date(d * 1000);
            return date.format(chart_details['date_format']);
        });

        chart.yAxis.tickFormat(function (d) {
            return parseInt(d);
        });

        dashinsights_data = chart_details.data;
        dashinsights_chart = chart;
        d3.select('#dashinsights_room_nights svg')
            .datum(dashinsights_data)
            .call(chart);
        nv.utils.windowResize(chart.update);

        return chart;
    });
}
function line_chart_dashinsights(widget_name, chart_details) {
    nv.addGraph(function () {
        var chart = nv.models.lineChart()
            .interpolate('basis')
            .useInteractiveGuideline(true)
            .x(function (d) { return (d !== undefined ? d[0] : 0); })
            .y(function (d) { return (d !== undefined ? parseInt(d[1]) : 0); })
            .forceY(0)
            .margin({
                left: 30,
                right: 30,
            });

        chart.xAxis.tickFormat(function (d) {
            date = new Date(d * 1000);
            return date.format(chart_details['date_format']);
        });

        chart.yAxis.tickFormat(function (d) {
            return parseInt(d);
        });

        dashinsights_data = chart_details.data;
        dashinsights_chart = chart;
        d3.select('#dashinsights_room_nights svg')
            .datum(dashinsights_data)
            .call(chart);
        nv.utils.windowResize(chart.update);

        return chart;
    });
}

function multibar_chart_dotw_dashinsights(widget_name, chart_details) {
    nv.addGraph(function() {
        var chart = nv.models.multiBarChart()
            .showControls(false)
            .reduceXTicks(false)
            .groupSpacing(0.3)
            .margin({
                left: 30,
                right: 30,
            });

        chart.xAxis.tickFormat(function (d) {
            return d;
        });

        chart.yAxis.tickFormat(function (d) {
            return parseInt(d);
        });

        d3.select('#dashinsights_days_of_the_week svg')
            .datum(chart_details.data)
            .call(chart);

        nv.utils.windowResize(chart.update);

        return chart;
    });
}

function multibar_chart_los_dashinsights(widget_name, chart_details) {
    nv.addGraph(function() {
        var chart = nv.models.multiBarChart()
            .showControls(false)
            .reduceXTicks(false)
            .groupSpacing(0.3)
            .margin({
                left: 30,
                right: 30,
            });

        chart.xAxis
            .axisLabel(chart_details.axis_labels.x)
            .tickFormat(function (d) {
                return d;
            });

        chart.yAxis.tickFormat(function (d) {
            return parseInt(d);
        });

        d3.select('#dashinsights_length_of_stay svg')
            .datum(chart_details.data)
            .call(chart);

        nv.utils.windowResize(chart.update);

        return chart;
    });
}
