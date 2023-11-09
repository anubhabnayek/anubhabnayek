<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\GenderValidationRule;
use App\Rules\LanguageValidationRule;
use Hash;
use Alert;
//load create mail file
use App\Mail\signupemail;
use Mail;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('website/signup');
    }
	
	 public function login()
    {
        return view('website/signin');
    }
	public function login_auth(Request $request)
    {
		$validated = $request->validate([
				
			'username' => 'required',
			'password' => 'required|max:8|max:12',]);
		$data=user::where('username','=',$request->username)->first();
        if($data){
		   if(Hash::check($request->password,$data->password))
		   { 
		   Alert::success('Congrats','You\'ve Successfully Login');
		   return redirect('/');
		   }
		   else{
			 Alert::success('Failed', 'Wrong password');
			 return redirect()->back();  
		   }
	   }
	   else{
		   
		   Alert::success('Failed', 'Wrong Email');
		   return redirect()->back();
	   }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
			'name' => 'required|string|max:255',			
			'email' => 'required|email',
			'password' => 'required|max:8|max:12',
			'username' => 'required',
			'phone'  =>'required',
			'file' =>'required|image',
			'gender' => ['required', new GenderValidationRule],
			'language' => ['required', new LanguageValidationRule],		
		]);	

        $data=new user;
		$data->name=$request->name;
		$data->email=$request->email;
	    $data->username=$request->username;

		$data->password=Hash::make($request->password);
		$data->gender=$request->gender;
		$data->phone=$request->phone;
		$data->language=implode(",",$request->language); // string convert
		
		$file=$request->file('file');
		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension(); // 545646545_img.png
		//$file->move('upload/customer/',$filename);
		$data->file=$filename;
		
	    
		
		//$file=
		
		$data->save();
		/*$maildata=array("nameemail"=>$nameemail,"email"=>$email);
		Mail::to($email)->send(new signupemail($maildata));*/	
		
	    Alert::success('Congrats', 'You\'ve Successfully Registered');

		return back();
		
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
