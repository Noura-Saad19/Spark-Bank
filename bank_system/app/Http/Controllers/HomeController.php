<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transfer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function viewAllCustomers()
    {
        $data['customers'] = Customer::select('id', 'name', 'email', 'balance')->get();
        return view('viewAllCustomer')->with($data);
    }

    public function transferMoney()
    {
        $data['customers'] = Customer::select('email')->get();
        return view('transferMoney')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sender_email' => 'required|email',
            'receiver_email' => 'required|email',
            'money' => 'required|numeric',
        ]);
        $sender_balance = Customer::select('balance')->where('email', $request->sender_email)->get();
        $receiver_balance = Customer::select('balance')->where('email', $request->receiver_email)->get();
        if ($sender_balance[0]->balance < $request->money) {
            Transfer::create([
                'sender_email' => $request->sender_email,
                'receiver_email' => $request->receiver_email,
                'transferred_amount' => $request->money,
                'sender_balance' => $sender_balance[0]->balance,
                'receiver_balance' => $receiver_balance[0]->balance,
                'status' => "Failed"
            ]);
            $request->session()->flash('fail', 'Transfer Failed');
            return redirect(url("viewallcustomer"));
        } else {
            Transfer::create([
                'sender_email' => $request->sender_email,
                'receiver_email' => $request->receiver_email,
                'transferred_amount' => $request->money,
                'sender_balance' => $sender_balance[0]->balance - $request->money,
                'receiver_balance' => $receiver_balance[0]->balance + $request->money,
                'status' => "Done"
            ]);
            Customer::where('email', $request->sender_email)->update(['balance' => $sender_balance[0]->balance - $request->money]);
            Customer::where('email', $request->receiver_email)->update(['balance' => $receiver_balance[0]->balance + $request->money]);

        }

        $request->session()->flash('msg', 'Transfer done successfully');
        return redirect(url("viewallcustomer"));
    }

    public function viewOneCustomer($email)
    {
        $data['customers'] = Transfer::select('sender_email', 'receiver_email',
            'transferred_amount', 'sender_balance', 'receiver_balance', 'status')
            ->where('sender_email', $email)->orWhere('receiver_email', $email)->get();;
        return view('viewOneCustomer')->with($data);
    }

    public function transferMoneey($id)
    {
        $data['transfer'] = Customer::findOrFail($id);
        return view('transferMoneey')->with($data);
    }

    public function aboutUs()
    {
        return view('aboutus');
    }
}
