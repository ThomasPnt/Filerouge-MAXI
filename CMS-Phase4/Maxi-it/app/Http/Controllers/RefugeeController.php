<?php

namespace App\Http\Controllers;

use App\Refugee;
use Illuminate\Http\Request;

class RefugeeController extends Controller
{
    public function addToList(Request $request)
    {
        $data = $request->all();

        //Verifications
        $data['nbAdult'] = intval($data['nbAdult'] );
        $data['nbChild'] = intval($data['nbChild'] );
        if (array_key_exists('accommodation', $data)) {
            $data['accommodation'] = true;
        } else {
            $data['accommodation'] = false;
        }

        $this->validate($request, [
            'contactName' => 'required',
            'nbAdult' => 'required|integer',
            'nbChild' => 'required|integer',
        ]);

        Refugee::create($data);
    }

    public function removeFromList($id)
    {
        $refugee = Refugee::find($id);
        $refugee->delete();
    }

    public function editInfos()
    {
        $refugee = Refugee::where('id', session('id'));
        $refugee->update($request->except('_token'));
        return redirect("/profile");
    }


}
