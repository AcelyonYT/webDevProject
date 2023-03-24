function GetCategory( CategoryFileName ) {
    let xmlhttp;
    if ( window.XMLHttpRequest ) {
        xmlhttp = new XMLHttpRequest;
    } else {
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }
    xmlhttp.onreadystatechange = () =>  {
        if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
            document.getElementById( "categoryDisplay" ).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open( "GET", CategoryFileName, true );
    xmlhttp.send();
}
function StartDrag( CurrentEvent ) {
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}
function AllowDrop( CurrentEvent ) {
    CurrentEvent.preventDefault();
}
function Drop( CurrentEvent, DestinationID ) {
    CurrentEvent.preventDefault();
    let DataID = CurrentEvent.dataTransfer.getData( "text/html" );
    let movingItem = document.getElementById( DataID );
    let string = movingItem.innerHTML;
    let Destination = document.getElementById( DestinationID );
    let itemExist = document.querySelector(`div[id="${DestinationID}"] div[id="${movingItem.id}"]`);
    if(itemExist == null){
        let cloneItem = movingItem.cloneNode( true );
        cloneItem.setAttribute("data-count", 1);
        cloneItem.addEventListener( "dblclick", () => { RemoveItem( DestinationID, movingItem.id, string ) } );
        cloneItem.innerHTML.concat(" x1");
        Destination.appendChild( cloneItem );
    }else{
        let Count = Number( itemExist.getAttribute("data-count") ) + 1;
        itemExist.setAttribute("data-count", Count);
        itemExist.innerHTML = `${string} x${Count}`;
    }
    ComputeTotal();
    ComputeTax();
    ComputeSubtotal();
}
function RemoveItem( DestinationID, item, string ){
    let Result = window.confirm("Do you want to remove this item from your order?");
    if(!Result) return;
    let currentItem = document.querySelector(`div[id="${DestinationID}"] div[id="${item}"]`);
    let Count = Number( currentItem.getAttribute("data-count") ) - 1;
    if(Count == 0){
        currentItem.parentNode.removeChild(currentItem);
    }else{
        currentItem.setAttribute("data-count", Count);
        currentItem.innerHTML = `${string} x${Count}`;
    }
    ComputeTotal();
    ComputeTax();
    ComputeSubtotal();
}
function ComputeTotal() {
    let Orders = document.querySelectorAll( "div[id='orderlist'] div" );
    let value = 0;
    for( let i=0; i < Orders.length; i++ ) {
        let count = Number( Orders[i].getAttribute("data-count") );
        for(let j = 0; j < count; j++){
            value += Number( Orders[i].getAttribute( "data-point-value" ) );
        }
    }
    document.querySelector(".total").innerHTML = `<p class="total">Total: <span id="totalval" data-point-value=${value}>${value}<span></p>`;
}
function ComputeTax() {
    let totalValue = Number( document.getElementById( 'totalval' ).getAttribute( "data-point-value" ) );
    let taxValue = Math.ceil( ( totalValue * .06 ) * 100 ) / 100;
    document.querySelector(".tax").innerHTML = `<p class="tax">Tax: <span id="taxval" data-point-value=${taxValue} >${taxValue}</span></p>`;
}
function ComputeSubtotal() {
    let totalValue = Number( document.getElementById( 'totalval' ).getAttribute( "data-point-value" ) );
    let taxValue = Number( document.getElementById( 'taxval' ).getAttribute( "data-point-value" ) );
    let subtotalValue = Math.ceil( ( totalValue + taxValue ) * 100 ) / 100;
    document.querySelector(".subtotal").innerHTML = `<p class="subtotal">Subtotal: ${subtotalValue}</p>`;
}