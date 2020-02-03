
$("document").ready(() => {

    // Here, all is an array, 4 arrays of : add, remove buttons, quantity text, and quantity input
    // Each product added to the shop has an index, starting from 0 to the number of products - 1
    let incQuantity = $(".incrementQuantity");
    let decQuantity = $(".decrementQuantity");
    let quantityText = $(".productQuantityText");
    let quantityInput = $(".productQuantityInput");

    for (let i=0; i<quantityText.length; i++) {

        // Initial value is the one displayed, in the cart view, it takes the product quantity
        // Otherwise, in one product view or all listed products view it takes value 1
        let count = parseInt($(quantityText[i]).text());

        // Initial start the decrement button is disabled if its quantity is > 1
        // disabled bootrap class, apply an opacity of may be 0.5 to the button
        $(decQuantity[i]).removeClass(count > 1 ? "disabled" : "");

        $(incQuantity[i]).click(() => {
            count += 1;

            // Write the quantity for displaying it to the user
            $(quantityText[i]).html(count);
            // Change the value of the input quantity for further submit of the form
            $(quantityInput[i]).val(count);
            // Add CSS effect, meaning the button is activated
            $(decQuantity[i]).removeClass(count > 1 ? "disabled" : "");
        });

        $(decQuantity[i]).click(() => {

            // The quantity is fixed to a minimum value of 1
            count = count > 1 ? count -= 1 : 1;
            $(quantityText[i]).html(count);
            $(quantityInput[i]).val(count);
            // Add CSS effect, meaning the button is disabled
            $(decQuantity[i]).addClass(count < 2 ? "disabled" : "");
        });
    }
});
