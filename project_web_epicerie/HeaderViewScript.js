
$(document).ready(() => {

    $("[data-toggle=popover]").popover({
        html:true,
        animation:true,
        title: function() {
            let content = $(this).attr("data-popover-content");
            return $(content).children(".popover-title").html();
        },
        content: function() {
            let content = $(this).attr("data-popover-content");
            return $(content).children(".popover-body").html();
        },
    }).on("mouseenter", function () {
        let _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        let _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
    });

});
