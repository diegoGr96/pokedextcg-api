<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{
    const DEFAULT_PAGE = 1;
    const DEFAULT_PAGE_SIZE = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, Request $request)
    {
        $req = [
            'name' => $name,
            'page' => $request['page'],
            'pageSize' => $request['pageSize'],
        ];

        $validator = Validator::make($req, [
            'page' => 'required|integer',
            'pageSize' => 'integer',
        ]);

        try {
            if ($validator->fails()) {
                return response()->json(['error_msg' => 'bad_request', 'error' => $validator->errors()], 422);
            } else {
                $pokemonAPI = new Client(['base_uri' => env('POKEMONTCG_API_BASE_URL')]);

                $response = $pokemonAPI->request(
                    'GET',
                    'v2/cards',
                    [
                        'query' => [
                            'q' => 'name:' . $name,
                            'page' => ($request->has('page') && $request->get('page') > 0) ? $request->get('page') : self::DEFAULT_PAGE,
                            'pageSize' => ($request->has('pageSize') && $request->get('pageSize') > 0) ? $request->get('pageSize') : self::DEFAULT_PAGE_SIZE,
                        ]
                    ]
                );

                $resultPokemon = json_decode($response->getBody()->getContents());

                $result = array();
                foreach ($resultPokemon->data as $pokemon) {
                    $result[] = [
                        'id' => $pokemon->id,
                        'name' => $pokemon->name,
                        'images' => $pokemon->images,
                    ];
                }

                return response()->json($result);
            }
        } catch (Exception $ex) {
            return response()->json(['error_msg' => 'server_error'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
