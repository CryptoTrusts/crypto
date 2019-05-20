<?php

namespace App\Http\Controllers;

use App\agents;
use App\users;
use App\settings;
use App\confirmations;
use App\gh;
use App\ph;
use App\plans;
use App\user_plans;
use App\account;
use App\deposits;
use App\withdrawals;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{ 
    
    public function sendmail(Request $request){
        $settings=settings::where('id', '=', '1')->first();
        
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = $request['message'];
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
            
        Mail::bcc(users::all())->send(new NewNotification($objDemo));
        
        return redirect()->back()->with('message','Your message was sent successful!');
    }


    public function index()
    {
      $settings=settings::where('id', '=', '1')->first();
        return view('invest.index')->with(array(
          'settings' => $settings,
          'title' => $settings->site_title,
          'mplans' => plans::where('type','Main')->get(),
          'pplans' => plans::where('type','Promo')->get(),
          'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
          'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
          'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
          'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
          'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
          'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        ));
    }

    //Licensing and registration route
   public function licensing(){
      
    return view('home.licensing')
    ->with(array(
      'mplans' => plans::where('type','Main')->get(),
          'pplans' => plans::where('type','Promo')->get(),
          'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
          'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
          'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
          'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
          'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
          'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
          'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
      'title' => 'Licensing, regulation and registration',
      'settings' => settings::where('id', '=', '1')->first(),
    ));
  }

    //Terms of service route
    public function terms(){
      
      return view('home.terms')
      ->with(array(
        'mplans' => plans::where('type','Main')->get(),
            'pplans' => plans::where('type','Promo')->get(),
            'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
            'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
            'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
            'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        'title' => 'Terms of Service',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
    }

    //Privacy policy route
    public function privacy(){
      
      return view('home.privacy')
      ->with(array(
        'mplans' => plans::where('type','Main')->get(),
            'pplans' => plans::where('type','Promo')->get(),
            'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
            'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
            'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
            'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        'title' => 'Privacy Policy',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
    }

     //service route
     public function services(){
      
      return view('invest.services')
      ->with(array(
        'mplans' => plans::where('type','Main')->get(),
            'pplans' => plans::where('type','Promo')->get(),
            'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
            'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
            'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
            'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        'title' => 'FAQs',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
    }

     //about route
     public function about(){
      
      return view('invest.about')
      ->with(array(
        'mplans' => plans::where('type','Main')->get(),
            'pplans' => plans::where('type','Promo')->get(),
            'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
            'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
            'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
            'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        'title' => 'About',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
    }

     //Contact route
     public function contact(){
      
      return view('invest.contact')
      ->with(array(
        'mplans' => plans::where('type','Main')->get(),
            'pplans' => plans::where('type','Promo')->get(),
            'amount1'=>array_random([4543.12,245.3,955.75,2540,860.22,5570.89,370,4230.23,587,60,89,432,200.76,140,410.34,103.34]),
            'amount2'=>array_random([10.12,99.234,15357.75,230,8670.22,5200.89,3540,450.23,5,60,809,4654,2050.76,11340,410.34,103.34]),
            'amount3'=>array_random([1075.312,2764.3,509.7,2450,850.22,650.89,1340,4230.23,5,460,897,4987,2043.76,15440,410.34,14303.34]),
            'name1'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name2'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'name3'=>array_random(['Marc Smith','Marco Verratti','Emilia Bella','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Mark Spencer','Jack Dr','Victor Oris']),
            'country1'=>array_random(['Netherland','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country2'=>array_random(['Spain','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
            'country3'=>array_random(['Isreal','Italy','Germany','United states','London','Egypt ','South Africa','Mexico','Brazil','Chad','India','Canada']),
        'title' => 'Contact',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
    }

    //send contact message to admin email
    public function sendcontact(Request $request){

      $settings=settings::where('id','1')->first();
    	
      $to = $settings->contact_email;
      $subject = "Contact message from ".$settings->site_name;
      $msg = substr(wordwrap($request['message'],70),0,350);
      $headers = "From: ".$request['name'].": ".$request['email']."\r\n";
      //send email
      mail($to,$subject,$msg,$headers);

      return redirect()->back()
      ->with('message', ' Your message was sent successfully!');
  
  }

    //update Profile photo to DB
    public function updatephoto(Request $request){
        
        $this->validate($request, [
        'photo' => 'mimes:jpg,jpeg,png|max:5000',
        ]);

          //photo
          $img=$request->file('photo');
          $upload_dir='images';
          
          $image=$img->getClientOriginalName();
          $move=$img->move($upload_dir, $image);
          users::where('id', $request['id'])
          ->update([
          'photo' => $image,
          ]);
          return redirect()->back()
          ->with('message', 'Photo Updated Sucessful');
    }

    //return add account form
    public function accountdetails(Request $request){
      return view('updateacct')->with(array(
        'title'=>'Update account details',
        'settings' => settings::where('id', '=', '1')->first()
        ));
    }
    //update account and contact info
    public function updateacct(Request $request){
    
          users::where('id', $request['id'])
          ->update([
          'bank_name' => $request['bank_name'],
          'account_name' =>$request['account_name'], 
          'account_no' =>$request['account_number'], 
          'btc_address' =>$request['btc_address'], 
          'eth_address' =>$request['eth_address'], 
          ]);
          return redirect()->back()
          ->with('message', 'User updated Sucessful');
    }

    //return add change password form
    public function changepassword(Request $request){
      return view('changepassword')->with(array('title'=>'Change Password','settings' => settings::where('id', '=', '1')->first()));
    }

    //Update Password
    public function updatepass(Request $request){
        if(!password_verify($request['old_password'],$request['current_password']))
        {
          return redirect()->back()
          ->with('message', 'Incorrect Old Password');
        }
        $this->validate($request, [
        'password_confirmation' => 'same:password',
        'password' => 'min:6',
        ]);

          users::where('id', $request['id'])
          ->update([
          'password' => bcrypt($request['password']),
          ]);
          return redirect()->back()
          ->with('message', 'Password Updated Sucessful');
    } 

    //Reset Password
    public function resetpswd(Request $request, $id){
        users::where('id', $id)
        ->update([
        'password' => bcrypt('user01236'),
        ]);
        return redirect()->route('manageusers')
        ->with('message', 'Password has been reset to default');
  }  
  
  //Delete deposit
  public function deldeposit(Request $request, $id){
    deposits::where('id', $id)->delete();
    return redirect()->back()
    ->with('message', 'Deposit history has been deleted!');
  }

  //Delete user
  public function deluser(Request $request, $id){
    //delete the user's withdrawals and deposits
    $deposits=deposits::where('user',$id)->get();
    if(!empty($deposits)){
        foreach($deposits as $deposit){
            deposits::where('id', $deposit->id)->delete();
        }
    }
    $withdrawals=withdrawals::where('user',$id)->get();
    if(!empty($withdrawals)){
        foreach($withdrawals as $withdrawals){
            withdrawals::where('id', $withdrawals->id)->delete();
        }
    }
    //delete the user plans
    $userp=user_plans::where('user',$id)->get();
    if(!empty($userp)){
        foreach($userp as $p){
            //delete plans that their owner does not exist 
        user_plans::where('id',$p->id)->delete();
        }
    }
    //delete the user from agent model if exists
     $agent=agents::where('agent',$id)->first();
    if(!empty($agent)){
        agents::where('id', $agent->id)->delete();
    }
    users::where('id', $id)->delete();
    return redirect()->route('manageusers')
    ->with('message', 'User has been deleted!');
  }  

    public function referuser(){
      return view('referuser')->with(array(
        'title'=>'Refer user',
        'settings' => settings::where('id', '=', '1')->first()));

    }

    // pay with card option
    public function paywithcard(Request $request, $amount){
      require_once'billing/config.php';
      
      $t_p=$amount*100; //total price in cents

    //session variables for stripe charges
    $request->session()->put('t_p', $t_p);
    $request->session()->put('c_email', Auth::user()->email);

    echo'<link href="'.asset('css/bootstrap.css').'" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="'.asset('js/bootstrap.min.js').'"></script>';
    return('<div style="border:1px solid #f5f5f5; padding:10px; margin:150px; color:#d0d0d0; text-align:center;"><h1>You will be redirected to your payment page!</h1>
    
    <h4 style="color:#222;">Click on the button below to proceed.</h4>

    <form action="charge" method="post">
    <input type="hidden" name="_token" value="'.csrf_token().'">
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="'.$stripe['publishable_key'].'"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-name="'.$set->site_name.'"
          data-description="Account fund"
          data-amount="'.$t_p.'"
          data-locale="auto">
      </script>
    </form>
    </div>

    ');
    }

    //stripe charge customer
    public function charge(Request $request){
      include'billing/charge.php';

  //process deposit and confirm the user's plan
  //confirm the users plan

  users::where('id',Auth::user()->id)
  ->update([
  'confirmed_plan' => Auth::user()->plan,
  'activated_at' => \Carbon\Carbon::now(),
  'last_growth' => \Carbon\Carbon::now(),
  ]);
    //get plan
    $p=plans::where('id',Auth::user()->plan)->first();
    //get settings 
    $settings=settings::where('id', '=', '1')->first();
    $earnings=$settings->referral_commission*$p->price/100;

    if(!empty(Auth::user()->ref_by)){
  //increment the user's referee total clients activated by 1
  agents::where('agent',Auth::user()->ref_by)->increment('total_activated', 1);
  agents::where('agent',Auth::user()->ref_by)->increment('earnings', $earnings);
    }
  

  //save deposit info
  $dp=new deposits();

  $dp->amount= $up;
  $dp->payment_mode= 'Credit card';
  $dp->status= 'processed';
  $dp->proof= 'stripe';
  $dp->plan= Auth::user()->plan;
  $dp->user= Auth::user()->id;
  $dp->save();

  echo '<h1 style="border:1px solid #f5f5f5; padding:10px; margin:150px; color:#d0d0d0; text-align:center;">Successfully charged '.$set->currency.''.$up.'!<br/>
  <small style="color:#333;">Returning to dashboard</small>
  </h1>';

  //redirect to dashboard after 5 secs
echo'
  <script>
  window.setTimeout(function(){
    window.location.href = "../";
  }, 5000);
  </script>
    ';
  }

}
