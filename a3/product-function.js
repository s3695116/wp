
var quantity = document.getElementById("quantity");
var plusButton = document.getElementById("plusButton");
var minusButton = document.getElementById("minusButton");
var sumbit = document.getElementById("submit");
var price = document.getElementById("PRICE");
function PlusClicked()
{
    var n = quantity.value;
    n++;
    quantity.value = n;
    document.getElementById("total_price").innerHTML = (price.value * quantity.value).toFixed(2);
}

function MinusClicked()
{
    var n = quantity.value;
    if(n > 0)
    {
        n--;
    }
    quantity.value = n;
    document.getElementById("total_price").innerHTML = (price.value * quantity.value).toFixed(2);
}

function UpdatePrice()
{
    document.getElementById("total_price").innerHTML = (price.value * quantity.value).toFixed(2);
}

submit.onclick=function(event)
{
    if(quantity.value == 0)
    {
        event.preventDefault();
        alert("You must choose at least one item to pay!")
    }
    
    if(document.getElementById("oid").value == "choose size")
    {
        event.preventDefault();
        alert("You must choose a size!")
    }
}
