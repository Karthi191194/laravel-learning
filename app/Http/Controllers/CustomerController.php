<?php
/*learning2*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//inculding Customer model
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        //retreiving all  the data from model
        $customers['customers'] = Customer::all();
        //print_r($customers['customers']->toArray()); //converts the output object to array
        return view('customer', $customers);
    }
    /*TO GET REQUEST DATA*/
    public function store(Request $request){
        //retrives all the reqeuest values
        //return $request->all();
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_no = $request->phone;
        //the variables set to the oblect "$customer" should be same as column names
        if($customer->save()){
            echo "Inserted Successfully...";
        }else{
            echo "Error in submitting..";
        }
    }
    /*update*/
    public function show($id){
        $customers['customers'] = Customer::find($id) ;
        return view('customer-edit', $customers);
    }
    public function update(Request $request){
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_no = $request->phone;
        //the variables set to the oblect "$customer" should be same as column names
        if($customer->save()){
            echo "Updated Successfully...";
        }else{
            echo "Error in submitting..";
        }
    }
    /*update through api*/
    public function apistore(Request $request){
        //if input name is same as the column name
        Customer::create($request->all());
        echo 'Success';
    }
}
