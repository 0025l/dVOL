<?php

namespace App\Http\Controllers;
use App\modelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $kategori = $request->kategori;
        $data = modelUser::where('email',$email)->first();
       
            if (Hash::check($password, optional($data)->password)) {
            	if($data->kategori=="BPBD"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('kategori',$data->kategori);
                Session::put('login',TRUE);
                return redirect('homekoor');
           		}
           	if($data->kategori=="FKKRS"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('kategori',$data->kategori);
                Session::put('login',TRUE);
                return redirect('indexpengelola');
            }
            if($data->kategori=="Staff IT"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('kategori',$data->kategori);
                Session::put('login',TRUE);
                return redirect('indexstaffit');
            }
            if($data->kategori=="Ketua Komunitas"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('kategori',$data->kategori);
                Session::put('login',TRUE);
                return view('indexketkom', [$data->name]);
            }
        }

            else{
                return redirect('login')->with('alert','Password atau Email Salah !'. Hash::check($password, optional($data)->password));
            }
        }

    public function destroy($id)
    {
        $data = modelUser::where('id',$id)->first();
        $data->delete();
        return redirect()->route('indexstaffit')->with('alert-success','Data deleted');
    }
    
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->kategori = "Ketua Komunitas";
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('indexpengelola')->with('alert-success','Kamu berhasil menambah akun');
    }
}