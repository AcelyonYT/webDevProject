/**
 * Gets the file we want to import html from
 * Creates an AJax request to get the file
 * @param {*} CategoryFileName Name of the file with the html
 */
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
/**
 * Allows us to transfer data when we start dragging elements
 * @param {*} CurrentEvent The event that gets passed into from the ondrag event
 */
function StartDrag( CurrentEvent ) {
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}
/**
 * Allows us to drop an element
 * @param {*} CurrentEvent The event that would make it not droppable
 */
function AllowDrop( CurrentEvent ) {
    CurrentEvent.preventDefault();
}
/**
 * Starts getting the item data and setting it to a clone
 * we check if the item already exist
 * if it does we want to increase the count on it
 * if it doesn't we want to create a clone of the item
 * We then call the compute functions to give us our new price
 * @param {*} CurrentEvent The event that would hold all the data of the dragged item
 * @param {*} DestinationID The place we want the clone to be
 */
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
/**
 * Tells the user if they want to remove the item
 * set the current item to the item we want to get from the destination
 * get the count of that item
 * if the count is 0, we remove it
 * if the count is more than 0 we set it to the new value
 * we call compute functions to get the new price
 * @param {*} DestinationID The parent of the child node we are trying to get
 * @param {*} item The id of the child node
 * @param {*} string Helps us edit the string to the new count
 * @returns if the result is false
 */
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
/**
 * Changes the value of the total by getting the price value and adding
 * it for every item we have including how much of the item we have
 */
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
/**
 * computes how much tax would be
 */
function ComputeTax() {
    let totalValue = Number( document.getElementById( 'totalval' ).getAttribute( "data-point-value" ) );
    let taxValue = Math.ceil( ( totalValue * .06 ) * 100 ) / 100;
    document.querySelector(".tax").innerHTML = `<p class="tax">Tax: <span id="taxval" data-point-value=${taxValue} >${taxValue}</span></p>`;
}
/**
 * adds the tax and the value together to into a grand total
 */
function ComputeSubtotal() {
    let totalValue = Number( document.getElementById( 'totalval' ).getAttribute( "data-point-value" ) );
    let taxValue = Number( document.getElementById( 'taxval' ).getAttribute( "data-point-value" ) );
    let subtotalValue = Math.ceil( ( totalValue + taxValue ) * 100 ) / 100;
    document.querySelector(".subtotal").innerHTML = `<p class="subtotal">Subtotal: ${subtotalValue}</p>`;
}