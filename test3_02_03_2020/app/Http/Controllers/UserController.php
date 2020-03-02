<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                      

                           $button =  '<a href="'.url("/users/" . $row->id. "/edit").'" title="Edit User" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>';

                           $button.=  '&nbsp;&nbsp;<a href="'.url('/users' . '/' . $row->id).'" title="Edit User" class="btn btn-danger btn-sm" onclick="return show_warning(this);" id='.$row->id.'><i class="fa fa-trash" aria-hidden="true"></i> </a>';

                            return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('index'); 
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'contact'=>'required',
            'city' =>'required',
            'profile_pic'=>'required|image|mimes:jpeg,png,jpg'
        ]);

        $image = $request->file('profile_pic');
        $new_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("images"),$new_name);
        $requestData = $request->all();
      
        $requestData['profile_pic'] = $new_name;

        // dd($requestData);
         
        User::create($requestData);

        return redirect('users')->with('success', 'User Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'contact'=>'required',
            'city' =>'required',
            'profile_pic'=>'image|mimes:jpeg,png,jpg'
        ]);
        $requestData = $request->all();
        // dd($requestData);

        if($request->file('profile_pic'))
        {
            $image = $request->file('profile_pic');
            $new_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("images"),$new_name);
            $requestData = $request->all();
            $requestData['profile_pic'] = $new_name;
        }
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('users')->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        echo true;exit;
    }
}
