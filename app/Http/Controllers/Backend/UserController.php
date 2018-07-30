<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
Use Socialite;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function redirectToFacebook()
     {
       return Socialite::driver('facebook')->redirect();
     }

    public function handleFacebook()
    {
      try{
        $sociaUser = Socialite::driver('facebook')->user();
      }
      catch(\Exception $e){
        return redirect('/');
      }

      $user = User::where('facebook_id',$sociaUser->getId() )->first();

      if(!$user){
        // if($sociaUser->getEmail())
        // {
            $createUser = new User ;

            $createUser->name = $sociaUser->getName();
            $createUser->email = 'dfadfad@fdafd.com'; //$sociaUser->getEmail();
            $createUser->facebook_id = $sociaUser->getId();
            $createUser->password = bcrypt('123peter');
            // $createUser->profile_picture = $sociaUser->getAvatar();
            $createUser->save();

            auth()->login($createUser);
            return redirect()->to('/home')->with('success_login', 'Successfully Login with facebook');
         // }else{
         //   return redirect()->to('/login')->with('login_failed', "Sorry! You didn't select Email id. Please try again later");
         // }
      }else{
        auth()->login($user);
        return redirect()->to('/home')->with('success_login', 'Successfully Login with facebook');
      }
      // $user->token;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
