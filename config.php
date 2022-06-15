<?php

$db = pg_connect("host=localhost dbname=tugasakhir_rpl user=postgres password= Noval_rm");

// fungsi query dari database ke page
function query($query) 
    {
        global $db;
        $result = pg_query($db,$query);
        $rows = [];
        while ($row = pg_fetch_assoc($result))
            $rows[] = $row;
        return $rows;
    }
?>