<?php

namespace App\Http\Controllers;

use App\Mail\mailon;
use App\Models\about;
use App\Models\contact;
use App\Models\home;
use App\Models\navbar;
use App\Models\roayt;
use App\Models\sabka;
use App\Models\services;
use App\Models\shahda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    //
    
  
    public function index(){
        $nav=navbar::where('id','=',"1")->first();
        $home=home::where('id','=',"1")->first();
        $about=about::where('id','=',"1")->first();
        $services=services::where('id','=',"1")->first();
        $roayt=roayt::where('id','=',"1")->first();
        $sabkas=sabka::all();
        $contact=contact::where('id','=',"1")->first();
        return view('index',compact('contact','nav','home','about','services','roayt','sabkas'));
    }


    public function login(){
        return view('login');
    }

    public function log_in(Request $request){
    
            $email=$request->email ;
            $uson=User::where('email','=',$email)->first();
            if (Hash::check($request->password,$uson->password)) {
                $role=$uson->role;
                session::put('name',$uson->name);
                session::put('role',$uson->role);


            if($role=='admin'){
                return redirect()->to('/admin');
                
            }
            }
            else{
                return "password is not correct";
            }}
           
       
public function admin(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.admino',compact('session','user'));
}

public function navbar(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.navbar',compact('session','user'));
}

public function nav_logo(Request $request){
    $validate=$request->validate([
        'logo_image'=>'required'
    ]);
    if($validate){
        $image=$request->file('logo_image');
        $extension=$image->getClientOriginalExtension();
        $image_name=time().'.'.$extension;
        $image_name_path='/storage/logo/'.$image_name;
        $image->move('storage/logo',$image_name);
        navbar::where('id','=','1')->update([
            'logo_image'=>$image_name_path
            ]);}
            return redirect()->back();
    }
public function head(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.head',compact('session','user'));
}
public function he_ad(Request $request){
    $image=$request->file('image');
    $extension=$image->getClientOriginalExtension();
    $image_name=time().'.'.$extension;
    $image_name_path='/storage/head/'.$image_name;
    $image->move('storage/head',$image_name);
home::where('id','=','1')->update([
    'image'=>$image_name_path,
    'title1'=>$request->title1,
    'text1'=>$request->text1,
    'title2'=>$request->title2,
    'text2'=>$request->text2
    ]);
    return redirect()->back();
}

public function about(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.about',compact('session','user'));
}

public function abo_ut(Request $request){
    $image=$request->file('image');
    $extension=$image->getClientOriginalExtension();
    $image_name=time().'.'.$extension;
    $image_name_path='/storage/head/'.$image_name;
    $image->move('storage/head',$image_name);
about::where('id','=','1')->update([
    'image'=>$image_name_path,
    'text1'=>$request->text1,
    'text2'=>$request->text2
    ]);
    return redirect()->back();
}
public function services(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.services',compact('session','user'));
}

public function ser_vices(Request $request){
    $image=$request->file('image');
    $extension=$image->getClientOriginalExtension();
    $image_name=time().'.'.$extension;
    $image_name_path='/storage/services/'.$image_name;
    $image->move('storage/services',$image_name);

    $image1=$request->file('image1');
    $extension1=$image1->getClientOriginalExtension();
    $image_name1=time().'.'.$extension1;
    $image_name_path1='/storage/services/a/'.$image_name1;
    $image1->move('storage/services/a',$image_name1);

    $image2=$request->file('image2');
    $extension2=$image2->getClientOriginalExtension();
    $image_name2=time().'.'.$extension2;
    $image_name_path2='/storage/services/b/'.$image_name2;
    $image2->move('storage/services/b',$image_name2);

    $image3=$request->file('image3');
    $extension3=$image3->getClientOriginalExtension();
    $image_name3=time().'.'.$extension3;
    $image_name_path3='/storage/services/c/'.$image_name3;
    $image3->move('storage/services/c',$image_name3);

    $image4=$request->file('image4');
    $extension4=$image4->getClientOriginalExtension();
    $image_name4=time().'.'.$extension4;
    $image_name_path4='/storage/services/d/'.$image_name4;
    $image4->move('storage/services/d',$image_name4);

    $image5=$request->file('image5');
    $extension5=$image5->getClientOriginalExtension();
    $image_name5=time().'.'.$extension5;
    $image_name_path5='/storage/services/e/'.$image_name5;
    $image5->move('storage/services/e',$image_name5);

    $image6=$request->file('image6');
    $extension6=$image6->getClientOriginalExtension();
    $image_name6=time().'.'.$extension6;
    $image_name_path6='/storage/services/f/'.$image_name6;
    $image6->move('storage/services/f',$image_name6);



services::where('id','=','1')->update([
    'image'=>$image_name_path,
    'text'=>$request->text,

    'image1'=>$image_name_path1,
    'title1'=>$request->title1,
    'text1'=>$request->text1,

    'image2'=>$image_name_path2,
    'title2'=>$request->title2,
    'text2'=>$request->text2,

    'image3'=>$image_name_path3,
    'title3'=>$request->title3,
    'text3'=>$request->text3,

    'image4'=>$image_name_path4,
    'title4'=>$request->title4,
    'text4'=>$request->text4,

    'image5'=>$image_name_path5,
    'title5'=>$request->title5,
    'text5'=>$request->text5,

    'image6'=>$image_name_path6,
    'title6'=>$request->title6,
    'text6'=>$request->text6,
    ]);
    return redirect()->back();
}

public function roayt(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.roayt',compact('session','user'));
}

public function ro_ayt(Request $request){
    $image1=$request->file('image1');
    $extension1=$image1->getClientOriginalExtension();
    $image_name1=time().'.'.$extension1;
    $image_name_path1='/storage/roayt/a/'.$image_name1;
    $image1->move('storage/roayt/a',$image_name1);

    $image2=$request->file('image2');
    $extension2=$image2->getClientOriginalExtension();
    $image_name2=time().'.'.$extension2;
    $image_name_path2='/storage/roayt/b/'.$image_name2;
    $image2->move('storage/roayt/b',$image_name2);

roayt::where('id','=','1')->update([
    'image1'=>$image_name_path1,
    'image2'=>$image_name_path2,
    'title1'=>$request->title1,
    'title2'=>$request->title2,
    'text1'=>$request->text1,
    ]);
    return redirect()->back();
}

public function sabka(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.sabka',compact('session','user'));
}

public function sab_ka(Request $request){
    $image=$request->file('image');
    $extension=$image->getClientOriginalExtension();
    $image_name=time().'.'.$extension;
    $image_name_path='/storage/sabka/'.$image_name;
    $image->move('storage/sabka',$image_name);

sabka::create([
    'image'=>$image_name_path,
    'text'=>$request->text
    ]);
    return redirect()->back();
}

public function sabka_all(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    $sabkas=sabka::all();
    $n=1;
    return view('admino.sabka_all',compact('n','session','user','sabkas'));
}

public function delete(Request $request,$id){
    $sabka=sabka::where('id','=',$id)->delete();
    if($sabka){
        return redirect()->back();
   }}

   public function shahda(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.shahda',compact('session','user'));
}

public function sha_hda(Request $request){
    $image=$request->file('image');
    $extension=$image->getClientOriginalExtension();
    $image_name=time().'.'.$extension;
    $image_name_path='/storage/shahda/'.$image_name;
    $image->move('storage/shahda',$image_name);
    shahda::create([
        'image'=>$image_name_path,
        'title'=>$request->title,
        'code'=>$request->code
        ]);
        return redirect()->back();
    }

    public function shahda_all(){
        if(session::has('name')){
            $session=session::get('name');
        }
        $user=User::where('name','=',$session)->first();
        $shahdas=shahda::all();
        $n=1;
        return view('admino.shahda_all',compact('n','session','user','shahdas'));
    
    }

    public function deleteon(Request $request,$id){
        $shahda=shahda::where('id','=',$id)->delete();
        if($shahda){
            return redirect()->back();
       }}

       public function get(Request $request){
        $code=$request->code ;
        $shahda=shahda::where('code','=',$code)->first();
        if($shahda){
        return view('coden',compact('shahda'));
        }
        else{
            return "<h2 >not found</h2>";
        }
       }

public function search(Request $request){
$title=$request->search ;
$shahdas=shahda::query()
->where('title', 'LIKE', "%{$title}%")
->get();
if($shahdas){
    return view('search',compact('shahdas'));
    }
    else{
        return "<h2 >not found</h2>";
    }

}

public function senr(Request $request){

$name=$request->name ;
$phone=$request->phone ;
$email=$request->email ;
$massage=$request->massage;
$admin=contact::where('id','=',"1")->first();
$admin_email=$admin->email;
$details= [
    'name' => $name,
    'phone' => $phone,
    'email' => $email,
    'massage' => $massage
];
$mail=Mail::to($admin_email)->send(new mailon($details));
if($mail){
    return redirect()->back();
}
}

public function contact(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admino.contact',compact('session','user'));
}


public function cont_act(Request $request){
    contact::where('id','=','1')->update([
        'location'=>$request->location,
        'number'=>$request->number,
        'email'=>$request->email,
        'text'=>$request->text,
        'facebook'=>$request->facebook,
        'twitter'=>$request->twitter,
        'instgram'=>$request->instgram,
        'youtube'=>$request->youtube,
        'color'=>$request->color
        ]);
        return redirect()->back();
}

public function logout(){
    session::forget('name');
    session::forget('role');
    return redirect()->to('/kkk');
}




}