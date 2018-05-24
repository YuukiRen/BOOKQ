# List model

1. Admin
2. Book
3. User
4. Category
5. Messages
6. Rating
7. Request
8. Tag
9. Transaction

# List controller

1. Admin controller
2. Books controller
3. Home controller
4. Lend controller
5. Messages controller
6. Report controller
7. Search controller
8. Transaction controller
9. User controller
10. Auth mechanism controller 

# List fungsional pada BookQ

1. Register admin account (hidden)
2. Login admin account
3. Admin Authentication
4. Register user account
5. Login user account
6. Forgor user password
7. User Authentication
8. Lend book
9. Borrow book
10. Give rating
11. Give review
12. Send messages to other user
13. Retrieve messages
14. Searching book to borrow
15. Report book
16. Ban user (admin)
17. Ban book (admin)
18. Delete book
19. Sort book from the reported (admin)
20. Modify user profil

# Syntax 

1. Authenticate

```php
<?php

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':  
                if (Auth::guard($guard)->check()) {
                    return redirect('admin/home');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
?>



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

	protected function authenticated(Request $request, $user)
	{
	    return redirect('/home')->with('info','You are logged in!');
	}

}
```

To use redirection

```php

public function __construct(){
        $this->middleware('auth');//matiin kalo lagi testing mode
    }

```


2. Register controller

```php
<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/profile/{{$users->id}}/edit';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

```


```php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Category;
use App\Transaction;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $users = Auth::user();
        $id = $users->id;
        $books = Book::where('user_id', $id)->get();
        $requests_lend = Transaction::where('id_lender',$id)->get();
        $requests_borrow = Transaction::where('id_booker',$id)->get();
        $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        
        return view('myProfile', compact('users','requests_lend','requests_borrow','activities','books'));
        
        // dd($users);
        
    }
    public function showother(Request $request,$id)
    {
        
        $users = Auth::user();
        $books = Book::where('user_id',$id)->get();
        // dd($books);
        $requests_lend = Transaction::where('id_lender',$id)->get();
        $requests_borrow = Transaction::where('id_booker',$id)->get();
        $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        
        if($users->id == $id){
            return view('myProfile', compact('users','requests_lend','requests_borrow','activities','books'));
        }
        else{
            $users = User::find($id);
            return view('otherProfile', compact('users','activities','books'));
        }
        // dd($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id){

        $users=Auth::user();
        $category=Category::all();
        // dd($category);
        return view('editprofile',compact('category','users'));
    }

    public function edit_profile(Request $request)
    {

        $this->validate($request,[
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'complete_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'fav_book' => 'required',
        ]);
        $users = User::find(Auth::user()->id);
        // if($request->user_image === NULL){
        //   $name = "images/no-cover.jpeg";  
        // }
        // else{
        //   $name = Storage::disk('local')->put('images', $request->image);
        // }
        //bisa kaya gini juga

        if($request->hasFile('user_image')){
        
            $name = Storage::disk('local')->put('images', $request->user_image);
            $users->user_image = $name;
        }
        $users->id = Auth::user()->id;
        $users->complete_name = $request->input('complete_name');
        $users->nim = $request->input('nim');
        $users->address = $request->input('address');
        $users->line_id = $request->input('line_id');
        $users->phone_number = $request->input('phone_number');

        $users->about_me = $request->input('about_me');
        $users->fav_book = $request->input('fav_book');
        $users->save();     
 
        return redirect('profile')->with('info','Profile updated!');    
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

```


---