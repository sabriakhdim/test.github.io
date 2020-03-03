<?php namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DropboxController extends BaseController {

  // composer require benjamincrozat/laravel-dropbox-driver

  /**
   * Permet de donner une array contenant les liens partagé Dropbox par Album
   * 
   * @param String $albumName
   */
  public function getFromDropbox($albumName) {
    
    if (file_exists(public_path().'/link/'.$albumName.".json")) {
      $photos=json_decode(file_get_contents(public_path().'/link/'.$albumName.".json"));
      return view('photo', compact('photos', 'albumName'));
    }else {
      return "Cet album n'existe pas";
    }
  }

  /**
   * Mets à jour les fichiers json contenant les liens vers chaque photo Dropbox
   * Affiche tout les détails de la mise à jour
   */
  public function updateAllAlbumDropbox() {

    $albums=array("Maternity","Newborn","Sitters","Family");
    $info = "<pre>Les photos ont été mise à jour :) \n";

    foreach ($albums as $albumName) {
      $i = 0;
      $info .= "\n".$albumName." :\n";
      $da = Storage::disk('dropbox')->files($albumName);
      $photos = array();
      foreach ($da as $d) {
        try {
          $img = Storage::disk('dropbox')
            ->getDriver()
            ->getAdapter()
            ->getClient()
            ->listSharedLinks($d,true);
          $pieces = explode("?", $img[0]['url']);
          array_push($photos, $pieces[0]."?raw=1");
          $info .= $pieces[0]."?raw=1"."\n";
          $i++;
        } catch (\Throwable $th) {
          //throw $th;
        }
      }
      $info .= "Total : ".$i."\n";
      file_put_contents(public_path().'/link/'.$albumName.".json",json_encode($photos));
    }
    echo $info."</pre>";
  }
}
