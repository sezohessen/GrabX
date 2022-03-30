<?php
use App\Models\Image;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

if(!function_exists('default_lang')){
    function default_lang($lang='en'){
        session()->put('app_locale', $lang);
        App::setLocale($lang);
        return true;
    }
}
if(!function_exists('site_base')){
    function site_base(){
        //return 'https://3arabiat.homeberry.co';
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'] ;
    }
}
if(!function_exists('find_image')){
    function find_image($img, $base=null){
        $src= '';
        if (@$img->name and @$img->base) {
            if (strpos($img->base, 'http') !== false or strpos($img->base, 'https') !== false) {
                $src = $img->base . $img->name ;
            }else{
                $src = site_base().$img->base.@$img->name;
            }
        }elseif(@$img->name){
            $src = url($img->base.@$img->name);
        }
        return $src;
    }
}
if(!function_exists('LangDetail')){
    function LangDetail($eng,$ar){
        return Session::get('app_locale')=='en' ? ($eng ? $eng : $ar) : $ar;
    }
}
if(!function_exists('add_Image')){
    function add_Image($file,$id,$base,$update = NULL)
   {
       $Image = $id ? Image::findOrFail($id) : NULL;
       $extension = $file->getClientOriginalExtension();
       $fileName = time() . rand(11111, 99999) . '.' . $extension;
       $destinationPath = public_path() . $base;
       $file->move($destinationPath, $fileName);
       if($Image)
       {
           //Delete Old image
           try {
               $file_old = $destinationPath . $Image->name;
               unlink($file_old);
               if(!$update)$Image->delete();
           } catch (Exception $e) {
               echo 'Caught exception: ',  $e->getMessage(), "\n";
           }

       }
        //Update new image
       if($update){
           $Image->name = $fileName;
           $Image->base = $base;
           $Image->save();
       }else{
           $Image = Image::create(['name'=> $fileName, 'base' =>  $base]);
       }
       return $Image->id;

   }
}
if(!function_exists('file_encode')){
   function file_encode($file,$base,$id=null){
       $extension = $file->getClientOriginalExtension();
       $fileName = time() . rand(11111, 99999) . '.' . $extension;
       $destinationPath = public_path() . $base;
       $file->move($destinationPath, $fileName);
       if($id){//For update
           $Image = Image::find($id);
           //Delete Old image
           try {
               $file_old = $destinationPath.$Image->name;
               unlink($file_old);
           } catch (Exception $e) {
               echo 'Caught exception: ',  $e->getMessage(), "\n";
           }
           //Update new image
           $Image->name = $fileName;
           $Image->base = $base;
           $Image->save();
           return $Image->id;
       }else{
           $Image = Image::create(['name'=> $fileName, 'base' => $base]);
           return $Image->id;
       }
   }
}
if(!function_exists('delete_file')){
   function delete_file($file){
       try{
           $Image = Image::find($file);
           //Delete Old image
           $file_old = $Image->base . $Image->name;
           unlink(public_path().$file_old);
       }catch(Exception $e){
           return null;
       }
   }
}
if(!function_exists('view_image')){
   function view_image($image){
       if (filter_var($image->base ?? '', FILTER_VALIDATE_URL) === FALSE) {
           return asset($image->base . $image->name);
       }
       return null;
   }
}
