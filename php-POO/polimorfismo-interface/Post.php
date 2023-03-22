<?php
 
class Post implements Search
{
    public function all()
    {
        return "mensaje para desde la clase: ".get_called_class()."()\n";        
    }
}

