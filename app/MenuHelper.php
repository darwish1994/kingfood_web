<?php

use App\Models\HeaderMenu;

class  MenuHelper
{
    static public  function getHeaderMenu()
    {
        $header = HeaderMenu::all();
        return $header;

    }
}
