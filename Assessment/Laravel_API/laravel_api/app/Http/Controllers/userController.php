<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use App\Models\admin;

use Illuminate\Support\Facades\Validator;  // for validation add this 
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userlogin(Request $request)
    {
      $validate=Validator::make($request->all(),[
            'email'=>'Required|email',
            'password'=>'Required'
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
			
			$user=user::where('email' , '=' , $request->email)->first();	
			if(! $user || ! Hash::check($request->password,$user->password))
			{
				return response()->json([
					'status'=>201,
					'msg'=>"user Login Failed due to Wrong Creadantial"
					]);
			}
			else
			{
				
				
					return response()->json([
					'status'=>200,
					'msg'=>"user Login Success",
					
					]);
				
				
			}
		}
	 }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       	$validate=Validator::make($request->all(),[
            'name'=>'Required',
            'email'=>'Required|email',
            'password'=>'Required',
			'file'=>'Required'
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
			$data=new user;
			$data->name=$request->name;
			$data->email=$request->email;
			$data->password=Hash::make($request->password);	
			
			//create tocken 
			//$token=$data->createToken($data->email.'_Token')->plainTextToken;
			//$token=$data->token=Hash::make($request->email);
			if($request->hasFile('file'))
			{
				$file=$request->file('file');		
				$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
				$file->move('upload/customer/',$filename);  // use move for move image in public/images
				$data->file=$filename;
			}
			$data->save();
			return response()->json([
			'status'=>200,
			
			'message'=>"Regioster Success"
			]);
			//return 	student::create($request->all());
		}
    }

    /**
     * Display the specified resource.
     */
    public function allshow(user $user)
    {
        $data=user::all();
	   return response()->json([
	   'status'=>200,
	   'user'=>$data
	   ]);
    }
	public function single_show(user $user,$id)
    {
         $data=user::find($id);
		 return response()->json([
		 'status'=>200,
		 'students'=>$data
		 ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user,$id)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'email'=>'Required|email',
            //'password'=>'Required'
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
			$data=user::find($id);
			$data->name=$request->name;
			$data->email=$request->email;
			//$data->password=Hash::make($request->password);
			$data->update();
			return response()->json([
			'status'=>200,
			'message'=>"Update Success"
			]);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user,$id)
    {
       
       user::find($id)->delete();
		return response()->json([
		'status'=>200,
		'msg'=>"Delete Success"
		]);
    }
}
