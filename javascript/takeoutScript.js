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

}

function ComputeTotal()
{
    var Orders = document.querySelectorAll( "div[id=\"orderlist\"] div" );

    var value = 0;
    for( var i=0; i<GradeList.length; i++ )
    {
        value = Number(value) + Number(Orders[i].getAttribute( "data-point-value" ));
    }
    document.querySelector(".total").innerHTML = '<p class="total">Total: ' + value + '</p>';
}