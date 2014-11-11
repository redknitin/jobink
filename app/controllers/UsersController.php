<?php
/**
 * Created by PhpStorm.
 * User: Reddy
 * Date: 11/10/2014
 * Time: 9:41 PM
 */

class UsersController extends BaseController {
    protected $layout = 'layouts.main';

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('only' => array('getDashboard')));
    }

    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->passes()) {
            $user = new User();
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('users/login')->with('message', 'Thank you for registering!');
        } else {
            return Redirect::to('users/register')->with('message', 'An error occurred')->withErrors($validator)->withInput();
        }
    }

    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }

    public function postSignin() {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            return Redirect::to('users/dashboard')->with('message', 'Logged in');
        } else {
            return Redirect::to('users/login')->with('message', 'Authentication failed')->withInput();
        }
    }

    public function getDashboard() {
        $this->layout->content = View::make('users.dashboard');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('users/login')->with('message', 'Logged out');
    }
}