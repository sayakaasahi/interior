<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{

  public function indicate()
 {
  return view('admin.terms.terms');
 }

}
