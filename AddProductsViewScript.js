
$("document").ready(() => {

    // Add button element
    let addButton = $("#onAddEvent");
    // Get the data from the add products view fields and transform to an array for manipulation
    let productData = $(".productData").toArray();

    function addInvalidStyleToInputs() {
        // Add red border to the empty input, and remove for the one that it is not empty
        for (data of productData) {
            if (data.value === "") {
                $(data).addClass("is-invalid");
            }
            else {
                $(data).removeClass("is-invalid");
            }
        }
    }

    addButton.click(() => {

        addInvalidStyleToInputs();

        // Create a form and add to it the 6 fields inputs
        let file_data = $("#productImage").prop('files')[0];
        let form_data = new FormData();
        form_data.append("file", file_data);
        form_data.append("productName", $(productData[0]).val());
        form_data.append("productPrice", $(productData[1]).val());
        form_data.append("productType", $(productData[2]).val());
        form_data.append("productScale", $(productData[3]).val());
        form_data.append("productDescription", $(productData[4]).val());

        // Add the new product, by sending the values of the fields inputs to the processing php file
        $.ajax({
            url    : "AddProductsController.php",
            type : "post",
            contentType: false,
            processData: false,
            // enctype: "multipart/form-data",
            data : form_data,
            cache : false,
            success : function (response) {
                alert(response);
            },
            error: function(xhr){
                alert("Une erreur est survenue: " + xhr.status + " " + xhr.statusText);
            }
        })
    });
});