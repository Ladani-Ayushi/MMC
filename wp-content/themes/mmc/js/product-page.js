// product-page.js

$(document).ready(function() {
    // Check if we are on the product page
    if ($('.product-page').length > 0) {
        // Your code for the product page
        var options = {
            height: 150,
            width: 150
        };
        $(".zoom_it").each(function () {
            $(this).image_zoomer(options);
        });
    }
});





