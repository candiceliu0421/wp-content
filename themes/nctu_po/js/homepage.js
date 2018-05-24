// nav click 展開2個直角梯形
$(document).ready(function () {
    $('div.top').click(function () {
    	// 點擊別的不會衝突 
    	sibling = $(this).siblings(".click1")
    	if (sibling){
			sibling.find('div[class^="navbox"]').hide();
			sibling.removeClass("click1");
    	    sibling.find('div[id^="nav"]').removeClass("click1");
    	}
    	// 點擊show&hide
    	if ($(this).hasClass("click1")) {
	        $(this).find('div[class^="navbox"]').hide();
    	    $(this).removeClass("click1");
    	    $(this).find('div[id^="nav"]').removeClass("click1");
    	} else {
	        $(this).find('div[class^="navbox"]').show();
	        $(this).addClass("click1");
    	    $(this).find('div[id^="nav"]').addClass("click1");
    	}
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