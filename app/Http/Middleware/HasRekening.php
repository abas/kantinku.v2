<?php

namespace App\Http\Middleware;

use Closure;
use Auth,Session;
use App\Rekening,App\User;

class HasRekening
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::find(Auth::user()->id);
        // dd($user);
        $rekening = Rekening::where('id_user',$user->id)->get()->first();
        if(
            $rekening->atasnama == 'null' &&
            $rekening->no_rekening == 'null' &&
            $rekening->jening_rekening == 'NULL'
        ){
            return $next($request);
        }
        Session::flash('rekening-notset',true);
        return redirect(route('admin-userprofile'));
    }
}
