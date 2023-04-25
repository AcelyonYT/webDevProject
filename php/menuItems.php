<?php
    $Server = "127.0.0.1";
    $Username = "root";
    $Password = "test";
    $Database = "homework";

    $Connection = new mysqli( $Server, $Username, $Password, $Database );

    if ( $Connection->connect_error )
    {
        echo "<h2>Database Error</h2>\n";
        die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
    }

    $SQL = "select ITEM_ID, ITEM_NAME, ITEM_PRICE from MENU where ITEM_CATEGORY = '".$_POST['Category']."';";

    $Results = $Connection->query( $SQL );

    if ( $Results )
    {
        echo "<h2>".$_POST['Category']."</h2>\n";

        while( $Row = $Results->fetch_row() )
        {

            echo "<div id=".$Row[0]." class='topbottom whiteText item' data-point-value=".$Row[2]." draggable='true' ondragstart='StartDrag( event );'>".$Row[1]."<span class='price'>$".$Row[2]."</span></div>\n";

        }
    }
    else
    {
        echo "<p>No results returned from the query</p>\n";
    }

    $Connection->close();
?>