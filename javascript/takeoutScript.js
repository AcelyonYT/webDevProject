//AJAX

function GetCategory(CategoryFileName)
{
    var xmlhttp;

    if ( window.XMLHttpRequest )
    {
        xmlhttp = new XMLHttpRequest;
    }
    else
    {
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (( xmlhttp.readyState == 4 ) &&
            ( xmlhttp.status == 200 ))
        {
            document.getElementById( "categoryDisplay" ).innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open( "GET", CategoryFileName, true );

    xmlhttp.send();
}

//Drag and Drop

function StartDrag( CurrentEvent )
{
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}

function AllowDrop( CurrentEvent )
{
    CurrentEvent.preventDefault();
}

function Drop( CurrentEvent, DestinationID )
{
    CurrentEvent.preventDefault();

    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );
    
    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));

    debugger;
    ComputeTotal();
    ComputeTax();
    ComputeSubtotal();
}

//Finding cart total

function ComputeTotal()
{
    var Orders = document.querySelectorAll( "div[id=\"orderlist\"] div" );

    var value = 0;
    for( var i=0; i<Orders.length; i++ )
    {
        value = Number(value) + Number(Orders[i].getAttribute( "data-point-value" ));
    }
    document.querySelector(".total").innerHTML = '<p class="total">Total: <span id="totalval" data-point-value="' + value +'" >' + value + '</span></p>';
}

//Finding tax for items in the cart

function ComputeTax()
{
    var totalValue = Number(document.getElementById('totalval').getAttribute("data-point-value"));
    var taxValue = Math.ceil((totalValue * .06)*100)/100;
    document.querySelector(".tax").innerHTML = '<p class="tax">Tax: <span id="taxval" data-point-value="' + taxValue +'" >' + taxValue + '</span></p>';
}

//Subtotal of the cart (total + tax)

function ComputeSubtotal()
{
    var totalValue = Number(document.getElementById('totalval').getAttribute("data-point-value"));
    var taxValue = Number(document.getElementById('taxval').getAttribute("data-point-value"));
    var subtotalValue = Math.ceil((totalValue + taxValue)*100)/100;
    document.querySelector(".subtotal").innerHTML = '<p class="subtotal">Subtotal: ' + subtotalValue + '</p>';
}