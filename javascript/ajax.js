function createAjax( ResultId, fileName, Category) {
    let xmlhttp;
    if ( window.XMLHttpRequest ) {
        xmlhttp = new XMLHttpRequest;
    } else {
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }

    if( ResultId != null ){
        xmlhttp.onreadystatechange = () =>  {
            if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
                document.getElementById( ResultId ).innerHTML = xmlhttp.responseText;
            }
        }
    }

    xmlhttp.open( "POST", fileName, true );

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    let Argument = `Category=${Category}`;

    xmlhttp.send(Argument);
}