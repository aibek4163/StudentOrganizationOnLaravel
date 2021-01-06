<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    function addFAQ(Request $req){

        $faq=new FAQ;
        $faq->question=$req->question;
        $faq->answer=$req->answer;
        $faq->save();
        return redirect('admin/FAQ');
    }
    function delete($id){

       $data=FAQ::find($id);
       $data->delete();
       return redirect('admin/FAQ');
    }

    function edit(Request $req){
      
        $data=FAQ::find($req->id);
        $data->question=$req->question;
        $data->answer=$req->answer;
        $data->save();
        return redirect('admin/FAQ');


     }
}
