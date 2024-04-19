<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

  
class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }
    public function registerClinic()
    {
        return view('register_clinic');
    }
    public function login()
    {
        return view('auth/login');
    }


}