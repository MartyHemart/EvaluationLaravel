<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
      public function getForm()
        {
          return view('contact');
        }

      public function postForm(ContactRequest $request) // function  pour permettre l'envoi du e-mail
        {
          Mail::send('email_contact', $request->all(), function($message)
          {
            $message->to('marty.hemart@hotmail.fr')->subject('Contact');
          });

          return view('confirm');
        }
}
