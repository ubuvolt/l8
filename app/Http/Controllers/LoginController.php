<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function login(Request $request) {
        $inputEmail = $request->input('inputEmail');
        $inputPassword = $request->input('inputPassword');

        if ($this->loginDetails($inputEmail, $inputPassword)) {
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('error', 'Login Failed!');
        }
    }

    /**
     * @param string $inputEmail
     * @param string $inputPassword
     * 
     * @return boolean
     */
    private function loginDetails(string $inputEmail, string $inputPassword): bool {

        $loginValidation = false;
        $loginDetailsArray = ['ubuvolt@gmail.com' => 'asdf'];

        if (array_key_exists($inputEmail, $loginDetailsArray)) {
            if ($loginDetailsArray[$inputEmail] == $inputPassword) {
                $loginValidation = true;
            }
        }

        return $loginValidation;
    }

}
