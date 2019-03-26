<?php
    if (isset($_ENV["CLEARDB_DATABASE_URL"]))
        echo($_ENV["CLEARDB_DATABASE_URL"]);
        $var_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $var_server   = $cleardb_url["host"];
        $var_username = $cleardb_url["user"];
        $var_password = $cleardb_url["pass"];
        $var_db       = substr($cleardb_url["path"],1);
        echo($var_url     );
        echo($var_server  );
        echo($var_username);
        echo($var_password);
        echo($var_db      );
    else
        echo("No");
        ?>