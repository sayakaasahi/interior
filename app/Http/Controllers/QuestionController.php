<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

  public function firstquestion()
 {
  return view('question.firstquestion');
 }
  public function firstquestion_save()
 {
  setcookie('country','1');
  setcookie('natural','1');
  setcookie('simple','1');
  setcookie('vintage','1');
  return redirect('question/secondquestion');
 }

  public function secondquestion()
 {
  return view('question.secondquestion');
 }
  public function secondquestion_save()
 {
  setcookie('country','1');
  return redirect('question/thirdquestion');
 }

  public function thirdquestion()
 {
  return view('question.thirdquestion');
 }
  public function thirdquestion_save()
 {
  return redirect('question/fourthquestion');
 }
 
  public function fourthquestion()
 {
  return view('question.fourthquestion');
 }
  public function fourthquestion_save()
 {
  return redirect('question/lastquestion');
 }
 
  public function lastquestion()
 {
  return view('question.lastquestion');
 }
 //  public function lastquestion_save()
 // {
 //  return redirect('answer/#');
 // }
 
 public function return()
 {
  return view('form.start');
 }
 
 public function answer()
 {
  return view('form.answer');
 }

}
