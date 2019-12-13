<?php


namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\ImagePost;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Input;
class GalleryImageController
{
    public function celaGaleria(){
        $images = GalleryImage::all();
        return view('galeria')->with('images',$images);
    }
//    public function removeFromDB($id) {
//        $GalleryImage = GalleryImage::find($id);
//        $GalleryImage->delete();
//        return redirect()->action('GalleryImageController@celaGaleria');
//    }
    public function removeFromDB($id) {
        $ImagePost = ImagePost::where('gallery_image_id',$id);
        $ImagePost->delete();
        $GalleryImage = GalleryImage::find($id);
        $GalleryImage->delete();


        $destinationPath = public_path() . '/assets/images';
        File::delete($destinationPath.'/'.$GalleryImage->imgPath);
        echo "Delete successfully";
        exit;
    }

    public function insertGalleryImage(Request $request) {
    $files= $request->input('picture');
    $names= $request->input('nazov');
    $captions= $request->input('popis');

    for($i=0;$i<count($request->picture);$i++){
        $request->picture[$i]->storeAs('images',time().'-'.$request->picture[$i]->getClientOriginalName());
        $GalleryImage = new GalleryImage();
        $GalleryImage->imgPath = time().'-'.$request->picture[$i]->getClientOriginalName();
        $GalleryImage->title =$names[$i];
        $GalleryImage->caption =$captions[$i];
        $GalleryImage->alt =$names[$i];
        $GalleryImage ->save();
    }

        return redirect()->action('GalleryImageController@celaGaleria');
    }
}