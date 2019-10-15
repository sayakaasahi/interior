<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartController extends Controller
{
  
  public function question()
 {
  return view('admin.question.firstquestion');
 }
 
  public function image()
 {
  return view('admin.image.firstimage');
 }
 
}

