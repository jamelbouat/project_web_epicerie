
$.getScript("HeaderViewScript.js");

$("document").ready(() => {

    // Modify button element
    let modifyButton = $("#onModifyEvent");
    // Save button element
    let saveButton = $("#onSaveEvent");
    // Get the data from the view fields and transform to an array for manipulation
    let notModifiedData = $(".notModifiedData").toArray();
    // Get the 4 inputs fields elements from the modal and transform to an array for manipulation
    let dataToModify = $(".dataToModify").toArray();

    // it puts the data in the 4 inputs fields by looping through the data array
    // Each time the modal is open, the inputs values will display the same current values displayed on the page
    modifyButton.click(() => {
        let inc = 0;
        for (let data of dataToModify) {
            $(data).val($(notModifiedData[inc++]).text());
        }
    });

    // Click on the save button, get the new data, then use Ajax to send the data to MyAccountController.php
    saveButton.click(() => {
        $.ajax({
            url    : "MyAccountController.php",
            method : "post",
            data   : {
                address : $(dataToModify[0]).val(),
                zipCode : $(dataToModify[1]).val(),
                city    : $(dataToModify[2]).val(),
                phone   : $(dataToModify[3]).val()
            },
            success : function (response) {
                
                // On data update success, the values displayed on the page takes simultaneously
                // the values of the updated inputs fields
                let inc = 0;
                for (let data of notModifiedData) {
                    $(data).text($(dataToModify[inc++]).val());
                }
            },
            error: function(xhr){
                alert("Une erreur est survenue: " + xhr.status + " " + xhr.statusText);
            }
        })
    });
});
























