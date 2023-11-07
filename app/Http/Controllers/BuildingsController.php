<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Building;
use App\Models\Akimage;

class BuildingsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::with('address','akimage','plan')->orderby("year_built",'desc')->simplePaginate(15);
        return view('Building.index',compact(['buildings']));  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Building::create($request->all());
        return redirect('buildings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $buildid
     * @return \Illuminate\Http\Response
     */
    public function show($build)
    {        
        $building = Building::with('address','akimage')->find($build);
               
        if(isset($building)) {
            if(preg_match('/YLTAD28 \d+/',$building->drawinglocation,$match)){
                $location = $match[0];
            }
            
            list($prevPage,$nextPage) = nextChapter('App\Models\Building','buildid',$building->buildid,'');
            
            if(strlen($building->client)>1){ 
                $builds = Building::where('client', 'like', "%".$building->client."%")->get();
                return view('Building.show', compact(['building']))->with('prevPage',$prevPage)->with('nextPage', $nextPage)->with('builds', $builds);
            }

        } else {

                return view('Building.show', compact(['building']))->with('prevPage',$prevPage)->with('nextPage', $nextPage);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $buildid
     * @return \Illuminate\Http\Response
     */
    public function edit($build)
    {
        $building = Building::findOrFail($build);
        return view('Building.edit', compact('building'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $buildid
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $build)
    {
        $building = Building::findOrFail($build);
        $building->update($request->all());
        return redirect('buildings'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $buildid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $build)
    {
        //
    }   

    public function menu($menu)
    {
        if ($menu == 'other'){
            $buildings =  Building::where('keywords','')->orderby("buildid",'desc')->simplePaginate(15);
        }
        elseif ($menu=='all')
        {
            $buildings = Building::simplePaginate(15);
        }
        else
        {
            $buildings =  Building::where('keywords','like','%' . $menu . '%')->orderby("buildid",'desc')->simplePaginate(15);
        }
            return view('Building.index', compact('buildings'));
    }

    public function plmenu($menu)
    {
        list($min,$max) = explode("-", $menu);
        $buildings = Building::where('plan_plid','!=',0)->whereBetween('year_built',[$min,$max])->orderBy('year_built')->orderBy('client')->simplePaginate(15);
        return view('Plan.landing', compact('buildings'));
    }

    // public function demolished()
    // {
    //     $buildings =  Building::with('addresses')->where('keywords','like','%demolished%')->orderby("buildid",'desc')->paginate(15);
    //     return view('Building.index', compact(['buildings','addresses']));

    // }
    // public function endangered(){

    //     $buildings =  Building::with('addresses')->where('keywords','like','%endangered%')->orderby("buildid",'desc')->paginate(15);
    //     return view('Building.index', compact(['buildings','addresses']));

    // }

    }
