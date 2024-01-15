<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Classes\simple_html_dom;
use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Project;
use App\Models\Regulation;
use App\Models\Role;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request as Request_g;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class CostsConstructionController extends Controller
{
  /**
   * Redirect to user-management view.
   *
   */
  public function CostConstruction()
  {
    $prices = Price::where('user_id', Auth::id())->get();
    $arr = [];
    foreach ($prices as $price) {
      $arr[$price->name] = $price->price;
    }
    return view('construction.costs', ['prices' => $arr]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $columns = [
      1 => 'id',
      2 => 'name',
      3 => 'username',
      4 => 'email',
      5 => 'email_verified_at',
      6 => 'contact',
    ];

    $search = [];

    $totalData = User::count();

    $totalFiltered = $totalData;

    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $users = User::offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $users = User::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->orWhere('username', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = User::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->orWhere('username', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->count();
    }

    $data = [];

    if (!empty($users)) {
      // providing a dummy id instead of database ids
      $ids = $start;

      foreach ($users as $user) {
        $nestedData['id'] = $user->id;
        $nestedData['fake_id'] = ++$ids;
        $nestedData['username'] = $user->username;
        $nestedData['name'] = $user->name;
        $nestedData['email'] = $user->email;
        $nestedData['email_verified_at'] = $user->email_verified_at;
        $nestedData['contact'] = $user->contact;

        $data[] = $nestedData;
      }
    }
    return response()->json([
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'code' => 200,
      'data' => $data,
    ]);
    /*if ($data) {

    } else {
      return response()->json([
        'message' => 'Internal Server Error',
        'code' => 500,
        'data' => [],
      ]);
    }*/
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // dd($request->all());
    //Price::where('user_id',Auth::id())->delete();

    foreach ($request->all() as $key => $param) {
      $price = Price::where('user_id', Auth::id())->where('name', $key)->first();
      if (!$price) {
        $price = new Price();
      }
      $price->name = $key;
      $price->price = $param;
      $price->user_id = Auth::id();
      $price->save();
    }
    return response()->json('Created');

  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $where = ['id' => $id];

    $users = User::with('roles')->where($where)->first();

    return response()->json($users);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $users = User::where('id', $id)->delete();
  }

  public function renewal_code_fetch(Request $request)
  {
    ini_set('max_execution_time', 3600); // 3600 seconds = 60 minutes
    set_time_limit(3600);
    try {
      $client = new Client([
        // Base URI is used with relative requests
        'verify' => false,
        'timeout'  => 5000,
      ]);
      $headers = [
        'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Accept-Language' => 'en-US,en;q=0.9,fa;q=0.8',
        'Cache-Control' => 'max-age=0',
        'Connection' => 'keep-alive',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Cookie' => 'eservice_mashhad_ir_analytic_key=822ad60a623f85dda6f48c7719e9d502; eservice_mashhad_ir_analytic_key=1868702ad1a25dd77b8bd6e996221e5c; SAMANPORTALSID_mashhadir=l0ft8h5i6datftdco31lcjq233; cookiesession1=678B2880EEC5CC386D3C3A056E3B3A70; SCREEN_SIZE=1920x1080; cookiesession1=678B2880E661567300E1AFFD7FA03AD1',
        'Origin' => 'https://eservice.mashhad.ir',
        'Referer' => 'https://eservice.mashhad.ir/fa/page/341316',
        'Sec-Fetch-Dest' => 'document',
        'Sec-Fetch-Mode' => 'navigate',
        'Sec-Fetch-Site' => 'same-origin',
        'Sec-Fetch-User' => '?1',
        'Upgrade-Insecure-Requests' => '1',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        'sec-ch-ua' => '"Not_A Brand";v="8", "Chromium";v="120", "Google Chrome";v="120"',
        'sec-ch-ua-mobile' => '?0',
        'sec-ch-ua-platform' => '"Windows"'
      ];
      $options = [
        'form_params' => [
          'nosaziCode1' => $request->renewal_code_1,
          'nosaziCode2' => $request->renewal_code_2,
          'nosaziCode3' => $request->renewal_code_3,
          'nosaziCode4' => $request->renewal_code_4,
          'nosaziCode5' => $request->renewal_code_5,
          'nosaziCode6' => $request->renewal_code_6,
          'nosaziCode7' => $request->renewal_code_7,
          'reportsRadio' => 'fshZabete',
          'SearchBtn' => 'جستجو'
        ]];
      $request_g = new Request_g('POST', 'https://eservice.mashhad.ir/fa/page/341316', $headers);
      $res = $client->sendAsync($request_g, $options)->wait();


      $html = new simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);

      $html->load($res->getBody()->getContents(), true, true);
      //dd($res->getStatusCode());
      //dd($html->load($res->getBody()->getContents(), true, true));
      if(count($html->find('div[id="__divBotDetail"] table')) > 0){
        //create project
        $project = Project::where('user_id',Auth::id())->where('renewal_code',$request->renewal_code_7.$request->renewal_code_6.$request->renewal_code_5.$request->renewal_code_4.$request->renewal_code_3.$request->renewal_code_2.$request->renewal_code_1)->first();
        if(!$project){
          $project = new Project();
        }
        $project->title = Str::random(10);
        $project->renewal_code = $request->renewal_code_7.$request->renewal_code_6.$request->renewal_code_5.$request->renewal_code_4.$request->renewal_code_3.$request->renewal_code_2.$request->renewal_code_1;
        $project->user_id = Auth::id();
        $project->save();
        foreach($html->find('div[id="fshMainDiv"] table[class="list"] tr[class="list-even"] td[class="list-normal-first"]') as $index=>$param) {

          if($index == 0 && $param->innertext){
            $amount = explode(':',$param->innertext);
            $amount_s = trim(str_replace(' ', '', $amount[1]));
            if(!$amount_s){
              return response()->json(['message' => "Property information is incomplete"], 500);
            }
            $project->approved_area = $amount_s;
            $project->save();
          }
        }

        foreach($html->find('div[id="__divBotDetail"] table') as $index=>$table) {
          if($index == 1){
            Regulation::where('project_id',$project->id)->delete();
            foreach ($table->find('tbody tr[class="list-even"]') as $list){
              //create regulation
              $regulation = new Regulation();
              $regulation->project_id = $project->id;
              foreach ($list->find('td') as $index=>$td){
                if($index == 0){
                  $regulation->title = trim($td->innertext);
                }
                if($index == 1){
                  $regulation->unit = trim($td->innertext);
                }
                if($index == 2){
                  $regulation->amount = trim($td->innertext);
                }
                if($index == 3){
                  $regulation->description = trim($td->innertext);
                }
              }
              $regulation->save();
            }
          }
        }
        //Density
        $regulation = Regulation::where('project_id',$project->id)->where('title','تراکم')->first();
        if($regulation && $regulation->description){
          $numbers =array();
          $alpha = array();
          $array = str_split($regulation->description);
          for($x = 0; $x< count($array); $x++){
            if(is_numeric($array[$x]))
              array_push($numbers,$array[$x]);
            else if($array[$x] == ".")
              array_push($numbers,$array[$x]);
            else
              array_push($alpha,$array[$x]);
          }// end for

          //$alpha = implode($alpha);

          if(count($numbers)){
            $numbers_n = implode($numbers);
            $project->foundation = $numbers_n;
            $project->save();
          }

        }


        $arr_p = [];
        $arr_p['regulation'] = Regulation::where('project_id',$project->id)->where('title','زیربنا در طبقات')->get()->toArray();
        $arr_p['project'] = $project->toArray();
        return response()->json($arr_p);
      }
    } catch (\Exception $e) {
      return response()->json(['message' => "Server error","code"=>$e->getMessage()], 500);
    }


  }
}
