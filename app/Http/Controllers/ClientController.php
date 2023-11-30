<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

    public function getColumnNames()
    {
        $columns = DB::select("
            SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = '$this->table_name'
        ");

        $columnNames = array_column($columns, 'COLUMN_NAME');
        return response()->json(["column_names" => $columnNames]);
    }


    public function getClientInfoFaturat(Request $request)
    {
        $vatnumber = $request->input('vatnumber');

        $faturaInfo = DB::select("SELECT * FROM $this->table_name WHERE vatnumber = :vatnumber", ['vatnumber' => $vatnumber]);

        return response()->json($faturaInfo);
    }
}
