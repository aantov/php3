<?php

function isPrime($value)
{
        if ($value < 2) 
        {
                return FALSE;
        }
        for ($i = 2; $i <= ($value/ 2); $i++) 
        {
                if($value % $i == 0) 
                {
                        return FALSE;
                }
        }
        return TRUE;
}

?>