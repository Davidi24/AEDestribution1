<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $table_name = 'fatura_fiskalizim';

    public function getClients()
    {
        $clients = DB::select("
            SELECT
                [IdClient],
                [idcompany],
                [businessname],
                [vatnumber],
                [idcontact],
                [notes],
                [IdInternalRevenueService],
                [Certification],
                [Agency],
                [WithoutVat],
                [TypeOfBusiness],
                [IdEconomicSector],
                [TaxPayerStatus],
                [Municipality],
                [CertPath],
                [IdCountry],
                [extrafields]
            FROM [NexusServer].[dbo].[Client]
        ");

        return response()->json(["message" => $clients]);
    }





    public function getClientInfoFaturat(Request $request)
    {
        $vatnumber = $request->input('vatnumber');
        $perPage = 30;

        $faturaInfo = DB::table($this->table_name)
            ->where('vatnumber', $vatnumber)
            ->paginate($perPage);

        return response()->json($faturaInfo);
    }


    function createUserView() {
        $renderedView = View::make("Pages.createuser")->render();
        return response()->json(["message" => $renderedView]);
    }

    function CreateClient(Request $request){

        $requestValue = $request->input('request');
        $responseValue = $request->input('response');
        $typeValue = $request->input('type');
        $vatNumberValue = $request->input('vatnumber');
        $businessUnitValue = $request->input('businessunit');
        $tcrValue = $request->input('tcr');
        $aedIdValue = $request->input('aedid');
        $createdAtValue = $request->input('createdat');
        $statusValue = $request->input('status');
        $lastRetryValue = $request->input('lastretry');
        $retryNrValue = $request->input('retrynr');
        $extraFieldsValue = $request->input('extrafields');

        try {
            // Assuming you have a 'Client' model
            DB::table('fatura_fiskalizim')->insert([
                'request' =>  $requestValue,
                'response' =>   $responseValue,
                'type' =>         $typeValue,
                'vatnumber' => $vatNumberValue,
                'businessunit' =>  $businessUnitValue,
                'tcr' =>   $tcrValue,
                'aedid' =>    $aedIdValue,
                'createdat' => $createdAtValue,
                'status' =>    $statusValue ,
                'lastretry' =>   $lastRetryValue,
                'retrynr' =>  $retryNrValue,
                'extrafields' =>  $extraFieldsValue,
            ]);

            return response()->json(["message" => "Client created successfully"]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
