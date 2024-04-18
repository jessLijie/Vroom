<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $registration = Customer::orderBy('created_at')->get();
        $eligibleCount = 0;
        foreach ($registration as $register) {
            if ($register->status == 'approved' && $register->downpayment >= 10) {
                if ($eligibleCount < 10) {
                    $register->eligibility = 'eligible';
                    $register->loanamount = 200000*(100-$register->downpayment)/100;
                    $eligibleCount++;
                } else {
                    $register->eligibility = 'ineligible';
                }
            } else {
                $register->eligibility = 'ineligible';
            }
            $register->save();

        }

        return view('home', compact('registration'));
    }


    public function updateCustomer(Request $request)
    {
        $userid = $request->userid;
        $updateInfo = Customer::where('userid', $userid)->update(
            [
                'downpayment' => $request->downpayment,
                'status' => $request->status
            ]
        );
        $registration = Customer::all();
        if ($updateInfo) {
            session()->flash('alert-success', 'Updated successfully');
        } else {
            session()->flash('alert-warning', 'Error Occured');
        }

        return redirect()->route('home', compact('registration'))->with('alert-success', session('alert-success'))
            ->with('alert-warning', session('alert-warning'));
    }



}
