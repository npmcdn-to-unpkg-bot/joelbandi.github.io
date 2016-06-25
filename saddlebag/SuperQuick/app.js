
var gridster;
$(document).ready(function() {
        gridster = $(".gridster ul").gridster({
        widget_margins: [10, 10],
        widget_base_dimensions: [25, 25],
        resize: {
          enabled: true
        }
    }).data('gridster');
});


