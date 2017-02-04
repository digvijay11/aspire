<?php
namespace App\Http\Middleware;

use Closure;
use Config;
use DB;
class SwitchDB
{
    public function handle($request, Closure $next)
    {
        
        $pieces = explode('.', $request->getHost());
        //Config::set('connection.db',$pieces[0]);
        if(!in_array($pieces[0],array('sub1','sub2','sub3')))
            abort(404);
        else{
          //  Config::get('database.connections.'.$pieces[0].'database');  
            DB::setDefaultConnection($pieces[0]);
        }
        return $next($request);
    }
}
