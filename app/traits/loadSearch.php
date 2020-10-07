<?php
namespace App\traits;

use App\Models\Video;
use Illuminate\Http\Request;

trait loadSearch
{
    public function loadSearch(Request $request)
    {
        if($request->ajax()){

            if($request->id > 0)
            {
                $videos = Video::publish()->where('id','<',$request->id)->where('name','like','%'.$request->segment.'%')->orderBy('id','desc')->paginate(9);

            }
            $last_id = '';
            $array = [];
            $array['data']='';

            if(! $videos->isEmpty())
            {
                foreach($videos as $video)
                {
                    $array['data'] .= '
                                            <div class="col-lg-4 col-md-6">
                                                    <a href="'.route('website.video',$video->id).'">
                                                    </a>
                                                    <div class="card" style="width: 20rem;margin-bottom: 70px;">
                                                    <a href="'.route('website.video',$video->id).'">
                                                    <img class="card-img-top" src="'.asset("uploads/videos/$video->image").'" alt="Card image cap">
                                                    </a>
                                                    <div class="card-body"><a href="'.route('website.video',$video->id).'">
                                                    <h4 class="card-title" style="text-align: right">'.$video->name.'</h4>
                                                        <br>
                                                    </a>
                                                    <a href="'.route('website.video',$video->id).'" class="btn btn-primary">مشاهدة الفيديو</a>
                                                    </div>
                                                </div>
                                            </div>';

                            $last_id = $video->id;
                }

                         $array['data'].='
                                <div class="col-sm-12">
                                    <button type="button" style="float:right" class="btn btn-danger btn-round ml-auto mr-auto" data-search='.$request->segment.' id="load_more_data_search" data-id='.$last_id.'>مشاهده المزيد</button>
                                </div>
                          ';
                        $array['response']='success';

            }
            else{

                $array['response']='error';
            }

            return response()->json($array);

        }
    }
}
