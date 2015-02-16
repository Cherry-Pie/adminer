<?php 

namespace Yaro\Adminer;

use Yaro\Adminer\Facades\Adminer;


class AdminerController extends \Controller
{
    
    public function handle() 
    {
        $version  = preg_replace('~\.~', '_', \Config::get('adminer::version', '4.2.0'));
        $template = $version .'.adminer.index';
        
        return \View::make('adminer::'. $template);
    } // end handle
    
}