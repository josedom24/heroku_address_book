<?php
    if (isset($_ENV["CLEARDB_DATABASE_URL"]))
        echo($_ENV["CLEARDB_DATABASE_URL"]);
    else
        echo("No");
        ?>