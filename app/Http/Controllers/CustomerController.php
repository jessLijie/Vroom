<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function showRegistrationForm()
    {
        $userId = Auth::id();
        $existence = Customer::where('userid', $userId)->exists();
        $result = null;
        if($existence){
            $result = Customer::where('userid', $userId)->first();
        }
        return view('register-form',compact('existence','result'));
    }

    public function registerVroom(Request $request){
        $customer = new Customer;
        $customer->userid= Auth::user()->id;
        $customer->name = $request->name;
        $customer->mobile = $request->mobile;
        $customer->status = "pending";
        $customer->eligibility = "ineligible";

        $customer -> save();

        if($customer){
        session()->flash('alert-success','Registration submitted successfully');
        }else {
            session()->flash('alert-warning','Error Occured');
        }

        return redirect()->route('home')->with('alert-success', session('alert-success'))
                                 ->with('alert-warning', session('alert-warning'));
    }

    public function cancelRegistration($id){
        // $delete = Customer::where('userid', $id);
        // $delete->delete();
        // if ($delete){
        //     session()->flash('alert-success','Cancelled Successfully');
        // } else {
        //     delete()->flash('alert-warning','Cancellation failed');
        // }
        // return redirect()->route('home')->with('alert-success', session('alert-success'))
        // ->with('alert-warning', session('alert-warning'));

        $cancel = Customer::where('userid', $id)->update(
            [
                'status'=> "rejected"
            ]
        );
        if($cancel){
            session()->flash('alert-success','Updated successfully');
            }else {
                session()->flash('alert-warning','Error Occured');
            }

            return redirect()->route('home')->with('alert-success', session('alert-success'))
                                     ->with('alert-warning', session('alert-warning'));
    }


}
