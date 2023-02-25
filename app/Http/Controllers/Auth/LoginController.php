<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Socialprofile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback(Request $request)
    {
        $estado=false;
        $user=null;
        $mensaje='';
        DB::beginTransaction();
        try {
            $user = Socialite::driver('google')->userFromToken($token);

            
            $token = $request->token;
            
            if (!is_null($user)) {

                $validaEmail=User::where("email",$user->getEmail())->first();

                $estado = true;
                if(is_null($validaEmail)){
                    $userT = new User();
                    $userT->name = $user->getName();
                    $userT->email = $user->getEmail();
                    $userT->save();                    
                }

                // $buscaSP==Socialprofile::where(    )

                $socialProfile=new Socialprofile();
                $socialProfile->usuario_id=$userT->id_usuario;
                $socialProfile->social_id=$user->getId();
                $socialProfile->social_avatar=$user->getAvatar();
                $socialProfile->social_name='Google';
                $socialProfile->save();
            }
            $mensaje='Ingreso exitoso';
        } catch (\Exception $ex) {
            $estado=false;
            $user=null;
            $mensaje='Hubo un error '.$ex->getMessage();
            DB::rollback();
        }
        DB::commit();


        return ['estado' => $estado, 'user' => $user,'mensaje'=>$mensaje];
    }
}
