function GetCategory( CategoryFileName ) {
    let xmlhttp;
    if ( window.XMLHttpRequest ) {
        xmlhttp = new XMLHttpRequest;
    } else {
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }
    xmlhttp.onreadystatechange = () =>  {
        if ( xmlhttp.readyState != 4 && xmlhttp.status != 200 ) return console.log("Error with the ready state!");
        document.getElementById( "categoryDisplay" ).innerHTML = xmlhttp.responseText;
    }
    xmlhttp.open( "GET", CategoryFileName, true );
    xmlhttp.send();
}
function StartDrag( CurrentEvent ) {
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}
function Drop( CurrentEvent, DestinationID ) {
    AllowDrop();
    let DataID = CurrentEvent.dataTransfer.getData( "text/html" );
    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ) );
}
function AllowDrop( CurrentEvent ) {
    CurrentEvent.preventDefault();
}
function ComputeTotal() {
    let Orders = document.querySelectorAll( "div[id='orderlist'] div" );
    let value = 0;
    for( let i=0; i< Orders.length; i++ ) {
        value += Number( Orders[i].getAttribute( "data-point-value" ) );
    }
    document.querySelector(".total").innerHTML = `<p class="total">Total: <span id="totalval" data-point-value=${value}>${value}<span></p>`;
}

//Finding tax for items in the cart
function ComputeTax() {
    var totalValue = Number(document.getElementById('totalval').getAttribute("data-point-value"));
    var taxValue = Math.ceil((totalValue * .06)*100)/100;
    document.querySelector(".tax").innerHTML = `<p class="tax">Tax: <span id="taxval" data-point-value=${taxValue} >${taxValue}</span></p>`;
}

//Subtotal of the cart (total + tax)

function ComputeSubtotal() {
    var totalValue = Number(document.getElementById('totalval').getAttribute("data-point-value"));
    var taxValue = Number(document.getElementById('taxval').getAttribute("data-point-value"));
    var subtotalValue = Math.ceil((totalValue + taxValue)*100)/100;
    document.querySelector(".subtotal").innerHTML = `<p class="subtotal">Subtotal: ${subtotalValue}</p>`;
}