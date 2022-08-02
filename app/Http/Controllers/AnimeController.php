<?php

namespace App\Http\Controllers;
use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimeController extends Controller
{
    public function welcome()
    {
        return view ('welcome');
    }

    public function showAnimeInfo()
    {
        return view ('anime');
    }

    public function showAnimeList()
    {
        $data=Anime::where('id','!=',null)->get();
        return view ('animelist',compact('data'));
    }

    public function addAnime(Request $request)
    {
        $animeID=Str::random(5);
        if(Anime::where('animeID',$animeID)->exists()){
            $animeID=Str::random(5);
        }


        $anime= new Anime;
        $anime->name=$request->aname;
        $anime->release_date=$request->rdate;
        $anime->no_of_episodes=$request->eps;
        $anime->rating=$request->rate;
        $anime->animeID=$animeID;
        $anime->save();

        return redirect()->back();   
    }

  

    public function editAnime(Request $request){
        $id = $request->animeId;

        Anime::where(['animeID'=>$id])->update([
            'name'=>$request->animeName,
            'rating'=>$request->animeRating,
            'release_date'=>$request->animeDate,
            'no_of_episodes'=>$request->animeEps
        ]);

        return redirect()->back();

    }

    public function deleteAnime($animeID){
        Anime::where(['animeID'=>$animeID])->delete();
        return redirect()->back();

       

        // $data = Anime::findOrFail($animeID);
        // $data->delete();
        // return redirect()->back();
    }


}
