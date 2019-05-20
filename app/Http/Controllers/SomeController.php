<?php

namespace App\Http\Controllers;

use App\settings;
use App\users;
use App\user_plans;
use App\plans;
use App\withdrawals;
use App\deposits;
use App\cp_transactions;
use App\tp_transactions;
use App\wdmethods;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Traits\CPTrait;

class SomeController extends Controller
{
    use CPTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

     //return settings form
    public function settings(Request $request){
      include'currencies.php';
      return view('settings')->with(array(
        'settings' => settings::where('id', '=', '1')->first(),
        'wmethods' => wdmethods::where('type', 'withdrawal')->get(),
        'cpd' => cp_transactions::where('id', '=', '1')->first(),
        'currencies' => $currencies,
        'title' =>'System Settings'));
      //return view('settings')->with(array('settings' => settings::where('id', '=', '1')->first(),'title' =>'System Settings'));
    }
    
    //Add withdrawal and deposit method
    public function addwdmethod(Request $request){
        $method = new wdmethods;
        $method->name=$request['name'];
        $method->minimum=$request['minimum'];
        $method->maximum=$request['maximum'];
        $method->charges_fixed=$request['charges_fixed'];
        $method->charges_percentage=$request['charges_percentage'];
        $method->duration=$request['duration'];
        $method->type=$request['type'];
        $method->status=$request['status'];
        $method->save();
        return redirect()->back()->with('message','Method added successful!');
        
    }
    
    //Update withdrawal and deposit method
    public function updatewdmethod(Request $request){
        
        wdmethods::where('id', $request['id'])
          ->update([
          'name'=>$request['name'],
          'minimum'=>$request['minimum'],
          'maximum'=>$request['maximum'],
          'charges_fixed'=>$request['charges_fixed'],
          'charges_percentage'=>$request['charges_percentage'],
          'duration'=>$request['duration'],
          'type'=>$request['type'],
          'status'=>$request['status'],
          ]);
          return redirect()->back()
          ->with('message', 'Action Successful');
        
    }
    
    //Delete withdrawal and deposit method
    public function deletewdmethod($id){
        wdmethods::where('id',$id)->delete();
        return redirect()->back()->with('message','Withdrawal method deleted successful!');
    }

        //save Setttings to DB
        public function updatesettings(Request $request){
          $this->validate($request, [
            'logo' => 'mimes:jpg,jpeg,png|max:500',
            ]);
          /*if($request['payment_mode']=='BTC'){
            $currency='BTC';
          }elseif($request['payment_mode']=='ETH'){
            $currency='ETH';
          }else{
            $currency=$request['currency'];
          }*/
          
          $settings = settings::where('id', '=', '1')->first();
          if(empty($request->file('logo'))){
            $image=$settings->logo;
          }else{
           //process logo
          $img=$request->file('logo');
          $upload_dir='images';
          $image=$img->getClientOriginalName();
          $move=$img->move($upload_dir, $image);
          }

          if(isset($request['trade_mode']) and $request['trade_mode']=='on'){
            $trade_mode="on";
          }else{
            $trade_mode="off";
          }

          settings::where('id', $request['id'])
          ->update([
          'site_name'=>$request['site_name'],
          'description'=>$request['description'],
          'keywords'=>$request['keywords'],
          'site_title'=>$request['site_title'],
          'currency'=>$request['currency'],
          's_currency'=>$request['s_currency'],
          'payment_mode'=>$request['payment_mode1'].$request['payment_mode2'].
          $request['payment_mode3'].$request['payment_mode4'].$request['payment_mode5'],
          'logo'=>$image,
          'site_address'=>$request['site_address'],
          'btc_address'=>$request['btc_address'],
          'ltc_address'=>$request['ltc_address'],
          's_s_k'=>$request['s_s_k'],
          's_p_k'=>$request['s_p_k'],
          'eth_address'=>$request['eth_address'],
          'bank_name'=>$request['bank_name'],
          'account_name'=>$request['account_name'],
          'account_number'=>$request['account_number'],
          'contact_email'=>$request['contact_email'],
          'tawk_to'=>strip_tags($request['tawk_to']),
          'update'=>$request['update'],
          'referral_commission'=>$request['ref_commission'],
          'trade_mode'=>$trade_mode,
          ]);
          return redirect()->back()
          ->with('message', 'Action Sucessful');
    }

      //Trading history route
     public function tradinghistory(){
      
      return view('thistory')
      ->with(array(
        
        't_history' => tp_transactions::where('user',Auth::user()->id)->orderBy('id', 'desc')
               ->paginate(12),
        'title' => 'Trading History',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
  }
  
  //save CoinPayments credentials to DB
        public function updatecpd(Request $request){

          cp_transactions::where('id', '1')
          ->update([
          'cp_p_key'=>$request['cp_p_key'],
          'cp_pv_key'=>$request['cp_pv_key'],
          'cp_m_id'=>$request['cp_m_id'],
          'cp_ipn_secret'=>$request['cp_ipn_secret'],
          'cp_debug_email'=>$request['cp_debug_email'],
          
          ]);
          return redirect()->back()
          ->with('message', 'Action Sucessful');
    }


    //payment route
    public function payment(Request $request){
      
      return view('payment')
      ->with(array(
        'amount'=>$request->session()->get('amount'),
        'payment_mode'=>$request->session()->get('payment_mode'),
        'pay_type' => $request->session()->get('pay_type'),
        'plan_id' => $request->session()->get('plan_id'),
        'title' => 'Make deposit',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
  }

    //top up route
    public function topup(Request $request){
      $user=users::where('id',$request['user_id'])->first();
      $user_bal=$user->account_bal;
      users::where('id', $request['user_id'])
          ->update([
          'account_bal'=> $user_bal + $request['amount'],
          ]);
          return redirect()->route('manageusers')
          ->with('message', 'Action Successful!');
    }

    //Return payment page
    public function deposit(Request $request){
       /*
         //fetch user plan
    $dplan=plans::where('id',Auth::user()->plan)->first();
    
    if(count($dplan)<1){
        return redirect()->route('mplans')
      ->with('message', 'Please choose an investment plan first.');
    }
  
  
    if($request['amount'] != $dplan->price){
        return redirect()->back()->with('message',"The amount must be your current plan price. $dplan->price.");
    }*/
      //store payment info in session
      $request->session()->put('amount', $request['amount']);
      $request->session()->put('payment_mode', $request['payment_mode']);

      if(isset($request['pay_type'])){
      $request->session()->put('pay_type', $request['pay_type']);
      $request->session()->put('plan_id', $request['plan_id']);
      }

      return redirect()->route('payment')
      ->with(array(
        'title' => 'Make deposit',
        'settings' => settings::where('id', '=', '1')->first(),
      ));
  }

  //Save deposit requests
  public function savedeposit(Request $request){

      $this->validate($request, [
      'proof' => 'mimes:jpg,jpeg,png|max:4000',
      ]);
        
        //screenshot
        $img=$request->file('proof');
        $upload_dir='uploads';
        
        $image=$img->getClientOriginalName();
        $move=$img->move($upload_dir, $image);
        //end screenshot process
        
        if($request['pay_type']=='plandeposit'){
          //add the user to this plan for approval
          users::where('id',Auth::user()->id)
          ->update([
            'plan'=> $request['plan_id'],
          ]);
          $plan=$request['plan_id'];
        }
        else{
          $plan=Auth::user()->plan;
        }
       
    $dp=new deposits();

    $dp->amount= $request['amount'];
    $dp->payment_mode= $request['payment_mode'];
    $dp->status= 'Pending';
    $dp->proof= $image;
    $dp->plan= $plan;
    $dp->user= Auth::user()->id;
    $dp->save();

    // Kill the session variables
    $request->session()->forget('plan_id');
    $request->session()->forget('pay_type');
    $request->session()->forget('payment_mode');
    $request->session()->forget('amount');

  return redirect()->route('deposits')
  ->with('message', 'Action Sucessful! Please wait for system to validate this transaction.');
}

    //Save withdrawal requests
     public function withdrawal(Request $request){
            
            $method=wdmethods::where('id',$request['method_id'])->first();
            $charges_percentage = $request['amount'] * $method->charges_percentage/100;
            $to_withdraw = $request['amount'] + $charges_percentage + $method->charges_fixed;

            if(Auth::user()->account_bal < $to_withdraw){
               return redirect()->back()
            ->with('message', 'Sorry, your account balance is insufficient for this request.'); 
            }
            
            //get user last investment package
            $last_user_plan=user_plans::where('user',Auth::user()->id)
            ->where('active','yes')
            ->orderby('activated_at','ASC')->first();
            
            if(count($last_user_plan) < 1){
                return redirect()->back()->with('message','You can not make withdrawal yet. You must have an investment running.');
            }
            
           //if 30 days has reached since activation
           /*if($last_user_plan->activated_at->diffInDays() < 30){
               return redirect()->back()->with('message','Your investment(s) is not due for withdrawal yet. You must wait till 30 days after your last investment.');
           }*/
           
          //get user
         $user=users::where('id',Auth::user()->id)->first();
         
         $amount= $request['amount'];
         $ui = $user->id;
         
         if($request['payment_mode']=='Bitcoin'){
            if(empty($user->btc_address)){
                return redirect()->route('acountdetails')
                ->with('message', 'You must set up your coins wallet address before you can withdraw.');
            }
          $coin="BTC"; 
          $wallet=$user->btc_address;
          //create transaction
         return $this->cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw);
         }elseif($request['payment_mode']=='Ethereum'){
            if(empty($user->eth_address)){
                return redirect()->route('acountdetails')
                ->with('message', 'You must set up your coins wallet address before you can withdraw.');
            }
          $coin="ETH"; 
          $wallet=$user->eth_address;
          //create transaction
         return $this->cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw);
         }elseif($request['payment_mode']=='Litecoin'){
            if(empty($user->ltc_address)){
                return redirect()->route('acountdetails')
                ->with('message', 'You must set up your coins wallet address before you can withdraw.');
            }
          $coin="LTC";  
          $wallet=$user->ltc_address;
          //create transaction
        return $this->cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw);
         }else{
           //save withdrawal info
            $dp=new withdrawals();
                      
            //$dp->txn_id= $txn_id;         
            $dp->amount= $amount;
            $dp->to_deduct= $to_withdraw;
            $dp->payment_mode= "Bank transfer";
            $dp->status= 'Pending';
            $dp->user= $user->id;
            
            $dp->save();  
            
            return redirect()->back()
          ->with('message', 'Action Sucessful! Please wait for system to process your request.');
         }
         
          
    }

}
