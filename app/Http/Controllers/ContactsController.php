<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{

    public function saveContact(Request $request)
    {
        if (empty($request->subjectuser)) {
            return redirect()->route('home')
            ->with(['danger' => 'It is necessary to fill in all the fields of the form.']);
        }
        if (empty($request->name)) {
            return redirect()->route('home')
            ->with(['danger' => 'It is necessary to fill in all the fields of the form.']);
        }
        if (empty($request->email)) {
            return redirect()->route('home')
            ->with(['danger' => 'It is necessary to fill in all the fields of the form.']);
        }
        if (empty($request->comments)) {
            return redirect()->route('home')
            ->with(['danger' => 'It is necessary to fill in all the fields of the form.']);
        }


        $email = new ContactsMail($request->subjectuser, $request->name, $request->email, $request->comments);
        //echo $request->name;
	//return $email->render(); //Testare html della mail
	$email->from('noreply@example.com', 'CvWeb');
        Mail::to('trottabiagio94@gmail.com')->send($email); // Metodo per inviare la mail

        return redirect()->back()
        ->with(['success' => 'We have successfully received your data.']);

    }
}
