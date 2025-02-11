<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class AjaxController extends Controller
{
    public function mesaj(ContactFormRequest $request){
        $data = $request->all();
        $data['ip'] = request()->ip();

         $request -> validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ],[
            'name.required' => 'İsim ve soyisim zorunlu',
            'email.required' => 'Email adresi zorunlu',
            'email.email' => 'Lütfen geçerli bir mail adresi girin',
            'subject.required' => 'Konu zorunlu',
            'message.required' => 'Mesaj zorunlu'
        ]);
        

        Contact::create($data);

        return back()->with(['message'=>'Başarıyla Gönderildi']);
       
    }
}
