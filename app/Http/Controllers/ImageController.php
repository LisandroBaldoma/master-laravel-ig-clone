<?php

namespace App\Http\Controllers;

use App\Models\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create(){
        return view('image.create');
    }
    public function save(Request $request){


        // Validacion
        $validate= $this->validate($request, [
            'description' => 'required',
            'image_path' => 'required|image'
        ]);
        // Recogiendo los datos
        $image_path = $request -> file('image_path');
        $description = $request -> input('description');
        // asiganr valores a nuevo objeto
        $user = Auth::user();
        $image = new Image();

        $image-> description = $description;
        $image-> user_id = $user->id;
        // subir fichero

        if($image_path){
            $image_path_name = time().$image_path-> getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image-> image_path = $image_path_name;
        }

        $image->save();
        return redirect()->route('dashboard')->with([
            'message' => ('La foto ha sido subida correctamente')
        ]);
    }
}
