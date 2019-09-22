<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
        $this->validate(request(), [
            'contest_image' => 'image|mimes:jpg,png,jpeg|max:4000',
            'payment_receipt' => 'image|mimes:jpg,png,jpeg|max:4000'
        ]);
        $registerUser =  new Contest();
        $registerUser->first_name = $request->input('first_name');
        $registerUser->last_name = $request->input('last_name');
        $registerUser->email = $request->input('email');
        $registerUser->phone_no = $request->input('phone_no');
        $registerUser->whatsApp_no = $request->input('whatsApp_no');
        $registerUser->dob = $request->input('dob');
        $registerUser->gender = $request->input('gender');
        $registerUser->state_of_res = $request->input('state_of_res');
        $registerUser->birthmonth = $request->input('birthmonth');
        if ($request->hasFile('contest_image')) {
            $image = $request->file('contest_image');
            $postUserImg = 'contest_image' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/user_image/' . $postUserImg));
            $registerUser->contest_image = $postUserImg;
        }
        $registerUser->contest_fee = $request->input('contest_fee');
        if ($request->hasFile('payment_receipt')) {
            $image = $request->file('payment_receipt');
            $postUserReceipt =  'payment_receipt' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/user_receipt/' . $postUserReceipt));
            $registerUser->payment_receipt = $postUserReceipt;
        }
        $registerUser->pay_reference = $request->input('pay_reference');
        $registerUser->referrer = $request->input('referrer'); 
        $registerUser->contest_year = date('Y');
        // if($registerUser->pay_reference ===null){
        //     return back()->with('success', 'Something went wrong, kindly try again!.');
        // }else{
            $registerUser->status = 1;
            $registerUser->save();
            return back()->with('success', 'Your registration was successful.');

        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function show(Contest $contest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function edit(Contest $contest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contest $contest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contest $contest)
    {
        //
    }
}
