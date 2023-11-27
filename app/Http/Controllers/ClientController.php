<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
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

    public function getClientInfoFaturat(Request $request){
        $vatnumber = $request->input('vatnumber');



    }
}
