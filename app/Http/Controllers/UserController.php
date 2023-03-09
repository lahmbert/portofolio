<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->route('dashboard');
        }
        return view('welcome', ['title' => 'Home']);
    }
    public function dashboard()
    {
        if (Auth::guest()) {
            return redirect()->intended('/');
        }
        $data = mahasiswa::orderBy('nama', 'desc')->paginate(2);
        return view('pages.dashboard', ['title' => 'Dashboard'])->with('data', $data);
    }

    public function tambah_action(Request $request)
    {
        Session()->flash('nama', $request->nama);
        Session()->flash('email', $request->email);
        Session()->flash('nim', $request->nim);
        Session()->flash('telpon', $request->telpon);
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'email' => 'required|unique:mahasiswa,email',
            'telpon' => 'required|numeric|unique:mahasiswa,telpon',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'nim tidak boleh kosong',
            'nim.numeric' => 'Nim harus berupa angka',
            'nim.unique' => 'Nim telah digunakan',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email telah digunakan',
            'telpon.required' => 'No Telpon tidak boleh kosong',
            'telpon.unique' => 'No Telpon telah digunakan',
            'telpon.numeric' => 'No Telpon harus berupa angka',
        ]);
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'telpon' => $request->telpon,
        ];
        mahasiswa::create($data);
        return redirect()->to('dashboard')->with('success', 'Data berhasil ditambahkan');
    }


    public function register()
    {
        return view('auth.register', ['title' => 'Register']);
    }
    public function tambah()
    {
        if (Auth::guest()) {
            return redirect()->intended('/');
        }
        return view('pages.tambah', ['title' => 'Tambah Data']);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->to('login')->with('success', 'Registration Success. Please Login!');
    }

    public function login()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password,])) {
            $request->session()->regenerate();
            return redirect()->to('dashboard')->with('login', 'Login Success.');
        }
        return back()->with('password', 'Wrong username or password!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile()
    {
        if (Auth::guest()) {
            return redirect()->intended('/');
        }
        return view('pages.profile', ['title' => 'Profile']);
    }

    public function notification()
    {
        if (Auth::guest()) {
            return redirect()->intended('/');
        }
        return view('pages.notification', ['title' => 'Notification']);
    }

    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function login_callback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function price()
    {
        if (Auth::guest()) {
            return redirect()->intended('/');
        }
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://prepaid.iak.dev/api/pricelist',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "status": "all",
                "username": "085334679379",
                "sign": "8b5fb8c0a93944d87ff629b58ccf98b7"
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        
        $json = curl_exec($curl);

        curl_close($curl);
        $price = json_decode($json, TRUE);
        $data =$price['data']['pricelist'];
        // dd($data);
        return view('pages.price', ['title' => 'Daftar Harga'])->with('data', $data);
        

    }
}
