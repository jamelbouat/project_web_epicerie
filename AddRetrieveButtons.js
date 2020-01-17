$("document").ready(() => {

    let incQuantity = $("#incrementQuantity");
    let decQuantity = $("#decrementQuantity");
    let quantity = $("#productQuantity").text();
    quantity = parseInt(quantity);

    incQuantity.click(() => {
        quantity += 1;
        $("#productQuantity").text(quantity);
        decQuantity.removeClass(quantity > 1 ? "disabled" : "");
    });

    decQuantity.click(() => {
        quantity = quantity > 1 ? quantity -= 1 : 1;
        $("#productQuantity").text(quantity);
        decQuantity.addClass(quantity < 2 ? "disabled" : "");
    });
});
