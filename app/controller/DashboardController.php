<?php

use Ganymed\Auth\Auth;
use Ganymed\Controller;

class DashboardController extends Controller {

    /*
     * /dashboard GET route method which checks if the session
     * is authorized to view this page.
     */
    public function index()
    {
        $view = view('dashboard.partials.dashboard')->with(['session' => $this->session]);
        $this->response->fromView($view);
    }

    public function logout(Auth $auth)
    {
        $auth->logout();
        flash('Logout successful');
        redirect('/login');
    }

}