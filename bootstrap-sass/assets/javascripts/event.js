

$(document).ready(function () {
    $('.nav li a').on('click',function(e) {
        // e.preventDefault();
        $('li a').removeClass('active');
        $(this).addClass('active');
        $(this).tab('show');
        loadWithAjax(e.target.href);

    });
});
// $('.top_menu_index li a').click(function () {
//     $(this).tab('show')
//  })
