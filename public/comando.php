<?php

if (isset($_GET['ip'])) {
    echo "ip valida";
    if (isset($_GET['c']) && $_GET['c'] == 't') {
        shell_exec("lanzatelnet.cmd " . $_GET['ip']);
        header("Location: tiendas");
    } else {
        shell_exec("lanzaping.cmd " . $_GET['ip']);
        header("Location: tiendas");
    }
}

