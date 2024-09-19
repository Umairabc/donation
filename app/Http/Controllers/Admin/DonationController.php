<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
    
    public function index()
    {
        $donations = Donation::all();
        return view('admin.donation.index',compact('donations'));
    }

    public function create()
    {
        return view('admin.donation.add');
    }

    public function store(Request $request)
    {
        Donation::create($request->all());
        return redirect()->route('donation.index')->with('success','donation add successfully');
    }

    public function delete($id)
    {
        Donation::find($id)->delete();
        return redirect()->back()->with('success','donation delete successfully');
    }

    public function edit($id)
    {
        $donation =  Donation::find($id);
        return view('admin.donation.edit',compact('donation'));
    }
    public function update(Request $request,$id)
    {
        Donation::find($id)->update($request->all());
        return redirect()->route('donation.index')->with('success','donation update successfully');
    }
}
