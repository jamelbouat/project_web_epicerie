
$.getScript("HeaderViewScript.js");
$.getScript("IncrementDecrementButtonsScript.js");

$(document).ready(function(){

    // Keep the previous scroll position when reloading the page
    $(document).scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop();
    });
    if (sessionStorage.scrollTop !== "undefined") {
        $(document).scrollTop(sessionStorage.scrollTop);
    }

    // Select product type and checkbox prices
    let productType = "";
    let ascendantPrice = "";
    let descendantPrice = "";

    $("#productType").change(() => {
        productType = $("#productType").val();

        // Case the default value is selected, uncheck the check boxes
        if (productType === "default") {
            localStorage['desPrice'] = false;
            localStorage['ascPrice'] = false;
        }
        ajaxRequest();
    });

    $("#desPrice").click(() => {
        descendantPrice = $("#desPrice").val();
        ajaxRequest();
    });

    $("#ascPrice").click(() => {
        ascendantPrice = $("#ascPrice").val();
        ajaxRequest();
    });

    // Function to keep state of the selected element or the checked boxes
    $(function() {
        if (localStorage.getItem('productType')) {
            $("#productType option").eq(localStorage.getItem('productType')).prop('selected', true);
        }
        $("#productType").on('change', function() {
            localStorage.setItem('productType', $('option:selected', this).index());
        });

        $('#desPrice').click(function () {
            localStorage['desPrice'] = this.checked;
            localStorage['ascPrice'] = !this.checked;
        });
        $('#desPrice').prop('checked', localStorage['desPrice'] == 'true');

        $('#ascPrice').click(function () {
            localStorage['ascPrice'] = this.checked;
            localStorage['desPrice'] = !this.checked;
        });
        $('#ascPrice').prop('checked', localStorage['ascPrice'] == 'true');
    });

    function ajaxRequest() {
        $.ajax({
            url  : "AllProductsController.php",
            type : "POST",
            data : {
                productType : productType,
                descendantPrice : descendantPrice,
                ascendantPrice : ascendantPrice
            },
            cache : false,
            success : function (response) {

                window.location.replace("index.php");
            },

            error: function(xhr){
                alert("Une erreur est survenue: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

});