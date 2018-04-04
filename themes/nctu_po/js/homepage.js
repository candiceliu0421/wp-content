// nav hover 展開2個直角梯形
$(document).ready(function () {
    $('div.top').hover(function () {

        $(this).find('div[class^="navbox"]').show();
        $(this).addClass("hover");


    }, function () {

        $(this).find('div[class^="navbox"]').hide();
        $(this).removeClass("hover");
    });

});

// $(document).ready(function(){
//     $("#navboxw1_3").click(function(){
//         $("div.navbox1_3").toggle();
//     });


// jQuery(document).ready(function () {
//     jQuery(".navbox1_3").hide(); //hide at the beginning

//     function hideDiv(e) {
//         e.preventDefault();
//         jQuery(this).text('本 室 簡 介')
//         .click(showDiv)
//         .siblings(".navbox1_3").hide()
//     }
//     function showDiv(e) {
//         e.preventDefault();
//         jQuery(this).text('本 室 簡 介')
//         .click(hideDiv)
//         .siblings(".navbox1_3").show()
//     }
//     jQuery('#navboxw1_2_1').click( showDiv );
// });

// jQuery(document).ready(function () {
//     jQuery(".navbox1_4").hide(); //hide at the beginning

//     function hideDiv(e) {
//         e.preventDefault();
//         jQuery(this).text('本 室 簡 介')
//         .click(showDiv)
//         .siblings(".navbox1_4").hide()
//     }
//     function showDiv(e) {
//         e.preventDefault();
//         jQuery(this).text('本 室 簡 介')
//         .click(hideDiv)
//         .siblings(".navbox1_4").show()
//     }
//     jQuery('#navboxw1_2_1').click( showDiv );
// });