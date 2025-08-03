<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = 'Register Customer';
        $customer = new Customer;
        $data = compact('url', 'title', 'customer');
        return view('customer')->with($data);
    }

    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->state = $request['state'];
        $customer->status = $request['status'];
        $customer->country = $request['country'];
        $customer->points = $request['points'];
        $customer->gender = $request['gender'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }

    public function view()
    {
        $customer = Customer::all();
        // echo "<pre>";
        // print_r($customer); 
        // echo "</pre>";
        // die;
        $data = compact('customer');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer/view');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $title = 'Edit Customer';
            $data = compact('customer', 'url', 'title');
            return view('customer')->with($data);
        }
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer');
        }

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->state = $request['state'];
        $customer->status = $request['status'];
        $customer->country = $request['country'];
        $customer->points = $request['points'];
        $customer->gender = $request['gender'];
        if (!empty($request['password'])) {
            $customer->password = md5($request['password']);
        }
        $customer->save();

        return redirect('/customer');
    }
}
