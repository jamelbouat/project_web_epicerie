
$.getScript("HeaderViewScript.js");
$.getScript("IncrementDecrementButtonsScript.js");

// Keep the previous scroll position when reloading the page
$(document).ready(function(){

    $(document).scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop();
    });
    if (sessionStorage.scrollTop !== "undefined") {
        $(document).scrollTop(sessionStorage.scrollTop);
    }
});