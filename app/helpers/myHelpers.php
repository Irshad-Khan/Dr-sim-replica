<?php

function getPriviousRouteName()
{
    $url = url()->previous();
    return app('router')
        ->getRoutes($url)
        ->match(app('request')->create($url))
        ->getName();
}
