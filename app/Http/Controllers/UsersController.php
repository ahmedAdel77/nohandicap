<?php
namespace App\Http\Controllers;
//$codeWallDebugTutorial = true;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // check for correct user
        if(auth()->user()->isAdmin !== 1){
            return redirect('/products')->with('error', 'Unauthorized page');
        }

        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:11',
        ]);

        $user->update($request->all());

        return redirect('profile/show')
                         ->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $products = Product::all()->where('user_id', $user->id);

        foreach ($products as $product) {
            $product->delete();
        }

        $user->delete();

        return redirect()->home()
                         ->with('success', 'Account Deleted');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function ban(Request $request, $id)
    {
        $user = User::find($id);

        if($request["isBanned"]=="on"){
            $user->isBanned = 1;
        }else{
            $user->isBanned = 0;
        }
        $user->save();

        if ($user->isBanned == 0) {
            return redirect()->route('users.index')->with('success','UnBanned Successfully..');

        } else {
            return redirect()->route('users.index')->with('success','Bannned Successfully..');
        }

    }

}

