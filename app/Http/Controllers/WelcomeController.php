<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Validator;
use App\Feedback;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function portfolio()
    {
        $portfolios = Portfolio::select('id','name','short_description','image','about_project','link')->latest()->get();

        return view('portfolio', compact('portfolios'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function courses()
    {
        return view('courses');
    }

    public function form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'string',
            'message' => 'string',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $subscriber = new Feedback();
            $subscriber->name = $request->name;
            $subscriber->email = $request->email;
            $subscriber->phone = $request->phone;
            $subscriber->message = $request->message;
            $subscriber->save();


            if ($request->ajax()) {
                return response()->json(['done']);
            } else {
                return redirect()->back();
            }
        }
    }
}
