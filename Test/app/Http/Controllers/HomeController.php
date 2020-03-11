<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterFromRequest;
use App\Model\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function addnew()
    {
        return view('addnew');
    }

    public function storeuser(RegisterFromRequest $request)
    {
        $registers = new Register();
        $registers->id = $request->get('id');
        $registers->address = $request->get('address');
        $registers->payment = $request->get('payment');
        $registers->user_id = Auth::id();
        $mess = "";
        if ($registers->save()) {
            $mess = 'Add success, Please wait for us to respond';
        }

        return view('welcome', compact('registers'))->with(trans('mess'), $mess);

    }

    public function show_user()
    {
        $registers = Register::with('user')->get();
        // dd($registers);
        return view('show', compact('registers'));
    }

    public function delete_register(Request $request)
    {
        $registers = Register::findOrfail($request->get('id'));
        $registers->delete();

        return redirect('show')->with(trans('mess_del'), trans('messages.delsuccess'));
    }

    public function update_register(Request $request, $id)
    {
        $registers = Register::findOrFail($id);
        
        $registers->status = $request->get('status');
        $registers->save();
        return redirect()->back();
    }

}
