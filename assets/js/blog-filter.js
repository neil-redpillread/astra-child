jQuery(document).ready(function($) {
    $('.filter-button').click(function(e) {
        e.preventDefault();

        var catID = $(this).data('cat');

        $.ajax({
            url: blog_ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_blog_posts',
                category_id: catID
            },
            success: function(response) {
                $('.blog-grid').html(response);
            },
            error: function(error) {
                console.log("AJAX Error:", error);
            }
        });
    });
});
