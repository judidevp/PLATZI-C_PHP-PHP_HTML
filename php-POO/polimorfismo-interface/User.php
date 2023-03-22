<?php
class User implements Search
{
    public function all()
    {
        return "mensaje desde la clase: ". get_called_class()."()\n" ; 
    }
}



