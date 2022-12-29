<?php

require('script.php');

$parse->get_tpl('index.tpl');

$cool_site = " ";
$some_content = " ";


if(!empty($_REQUEST['cool_site']) && !empty($_REQUEST['some_content']))
{
    $cool_site = trim($_REQUEST['cool_site']);
    $some_content = trim($_REQUEST['some_content']);
}

else
{
    echo "Not set data \n";
    exit;
}

$parse->set_tpl('{COOL_SITE}', $cool_site);
$parse->set_tpl('{SOME_CONTENT}', $some_content);

$parse->tpl_parse();

echo $parse->template;



?>