<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\ModelHasRoles;
use Closure;


class AdminMiddleware
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

            $user_id = Auth::id();
            $model = ModelHasRoles::where('user_id',$user_id)->first();
            if($model->role_id == 1)
            {
                echo "<script type='text/javascript'>alert('Вам нужны права администратора!');</script>";
                return redirect('home');
            }
            return $next($request);
    }
}
