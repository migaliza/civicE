<?php 
namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fName' => 'required|string|max:255',
            'lName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'status' => 'requered|string|max:255',
            'citizenship' => 'required|string|max:255',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if(!empty($data['region'])){
           // dd($data['region']);
            return User::create([
                'fName' => $data['fName'],
                'lName' => $data['lName'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'email_token' =>bcrypt($data['email']),
                'statusRegister' =>$data['statusRegister'],
                'citizenship' =>$data['citizenship'],
                'region' => $data['region'],
                ]);
        }
        else{
            return User::create([
                'fName' => $data['fName'],
                'lName' => $data['lName'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'email_token' =>bcrypt(base64_encode($data['email'])),
                'statusRegister' =>$data['statusRegister'],
                'citizenship' =>$data['citizenship'],
                ]);

        }

    }

    /**
    *handle registration from the user
    *@param $request
    *@return Response
    */
    public function register(Request $request){
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));
        return view('email/verification');
    }

    /**
    *handle a registration request for the application
    *
    *@param $token
    *@return Response
    */
    public function verify($token){


        $user = User::where('email_token','=',urldecode($token) )->first();
        
        if(!is_null($user)){
         $user->verified =1;
         if($user->save()){
            return view('email/emailconfirm',['user' => $user]);
        }
    }
    else{
        echo 'retry';
    }
    
}
}
