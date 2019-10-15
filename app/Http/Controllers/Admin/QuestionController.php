<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

  public function secondquestion()
 {
  return view('admin.question.secindquestion');
 }

  public function thirdquestion()
 {
  return view('admin.question.thirdquestion');
 }
 
  public function fourthquestion()
 {
  return view('admin.question.fourthquestion');
 }
 
  public function lastquestion()
 {
  return view('admin.question.lastquestion');
 }
 
 public function return()
 {
  return view('admin.form.start');
 }
 
 public function answer()
 {
  return view('admin.form.answer');
 }

}
