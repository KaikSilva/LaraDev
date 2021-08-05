<?php

//  AREA DE CRIAÇÃO HELPERS

if(!function_exists('fileURL'))
{
    function fileURL($value)
    {   
        return url(mix($value));
    }
}