<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Classes\simple_html_dom;
use App\Http\Controllers\Controller;
use App\Models\Price;
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
    $prices = Price::where('user_id',Auth::id())->get();
    $arr = [];
    foreach($prices as $price){
      $arr[$price->name] = $price->price;
    }
    return view('construction.costs',['prices'=> $arr]);
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

   foreach($request->all() as $key=>$param){
     $price = Price::where('user_id',Auth::id())->where('name',$key)->first();
     if(!$price){
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
    //dd($request->all());
   /* $response = Http::get('https://eservice.mashhad.ir/fa/page/341316', [
      'name' => 'Taylor',
      'page' => 1,
    ]);*/

   /* $client = new Client([
      // Base URI is used with relative requests
      'verify' => false,
    ]);
    $params = [
      'query' => [
        'option_1' => "asd",
        'option_2' => "string"
      ]
    ];
    $response = $client->request('GET','https://eservice.mashhad.ir/fa/page/341316',$params);

    dd($response->getBody());*/

    $client = new Client([
      // Base URI is used with relative requests
      'verify' => false,
      'timeout'  => 1000.0,
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
        'nosaziCode1' => '0',
        'nosaziCode2' => '0',
        'nosaziCode3' => '0',
        'nosaziCode4' => '4',
        'nosaziCode5' => '3',
        'nosaziCode6' => '2',
        'nosaziCode7' => '1',
        'reportsRadio' => 'fshZabete',
        'SearchBtn' => 'جستجو'
      ]];
    $request = new Request_g('POST', 'https://eservice.mashhad.ir/fa/page/341316', $headers);
    $res = $client->sendAsync($request, $options)->wait();


    $html = new simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);

    $html->load($res->getBody()->getContents(), true, true);
    //dd($res->getStatusCode());
    //dd($html->load($res->getBody()->getContents(), true, true));

    foreach($html->find('div[id="__divBotDetail"] table') as $index=>$table) {
      if($index == 1){
        foreach ($table->find('tbody tr[class="list-even"]') as $list){
          foreach ($list->find('td') as $index=>$td){
            dd($td->innertext);
          }
        }
      }

      /*if($a->innertext == 'دانلود آهنگ') {
        $links[] = $a;
      }*/

    }

  }
}
