<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{

    public static function getAll()
    {
        $result = DB::table('articles')->get();
        return $result;
    }
    
    public static function get($id)
    {
        $result = DB::table('articles')->where('id',$id)->first();
        return $result;
    }
    public static function saveArtikel($data)
    {
        $slug = str_replace(' ','-',$data['judul']);
        $result = DB::table('articles')
                  ->insert([
                    'judul' => $data['judul'],
                    'isi' => $data['isi'],
                    'slug' => $slug,
                    'user_id' => 1,
                    'tag' => $data['tag']
                  ]);
        return $result;
    }

    public static function editArtikel($id, $data){
        $slug = str_replace(' ','-',$data['judul']);
        DB::table('articles')->where('id', $id)->update([
                    'judul' => $data['judul'],
                    'isi' => $data['isi'],
                    'slug' => $slug,
                    'user_id' => 1,
                    'tag' => $data['tag']
        ]);
    }
    public static function destroy($id)
    {
        $result = DB::table('articles')->where('id',$id)->delete();
        return $result;
    }

    public static function contohUser()
    {
        for($i = 0; $i < 5; $i++){
            DB::table('users')->insert([
                'email' => 'contohuser'.$i.'@gmail.com',
                'password' => 'admin123'
            ]);
        } 
    }
}
