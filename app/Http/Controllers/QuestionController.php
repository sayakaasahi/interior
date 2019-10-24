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

  public function secondquestion()
 {
  return view('question.secondquestion');
 }

  public function thirdquestion()
 {
  return view('question.thirdquestion');
 }
 
  public function fourthquestion()
 {
  return view('question.fourthquestion');
 }
 
  public function lastquestion()
 {
  return view('question.lastquestion');
 }
 
 public function return()
 {
  return view('form.start');
 }
 
 public function answer()
 {
  return view('form.answer');
 }

}
