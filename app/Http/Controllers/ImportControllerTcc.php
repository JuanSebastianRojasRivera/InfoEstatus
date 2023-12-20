<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\tcc;

class ImportControllerTcc extends Controller
{
    public function importartcc(Request $request)
    {
        if ($request->hasFile('documento2')) {
            $path = $request->file('documento2')->getRealPath();
            
            $datos = Excel::toArray(new ImportController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportartcc = $datos[0];
                
                foreach ($datosImportartcc as $dato) {
                    if (count($dato) >= 40) {
                        tcc::create([
                            'Remittance' => $dato[0], // Asegúrate de que el índice coincida con la estructura de tus datos
                            'Date_Disp' => $dato[1],
                            'Doc_Remi' => $dato[2],
                            'Origin' => $dato[3],
                            'Destination' => $dato[4],
                            'Service_Type' => $dato[5],
                            'Client_Division' => $dato[6],
                            'Location _Sender' => $dato[7],
                            'Recipient' => $dato[8],
                            'Destination_Headquarters' => $dato[9],
                            'Phone_Telephone_Addressee' => $dato[10],
                            'Addressee_Address' => $dato[11],
                            'Quantity' => $dato[12],
                            'Packages' => $dato[13],
                            'Packages2' => $dato[14],
                            'Actual_Weight' => $dato[15],
                            'Weight_Volume' => $dato[16],
                            'Vlr_Decl' => $dato[17],
                            'Guide_Status' => $dato[18],
                            'Estimated_Date' => $dato[19],
                            'Delivery_Days' => $dato[20],
                            'Delivery_Date' => $dato[21],
                            'Novelty' => $dato[22],
                            'New_New3' => $dato[23],
                            'Remarks' => $dato[24],
                            'Dane_City_Origin_City' => $dato[25],
                            'Dane_Destination_City' => $dato[26],
                            'Transp' => $dato[27],

                        
                            
                        ]);

                 } 
            
            }
            
        }
        
    }
    
     return "Datos actualizados correctamente";
    
}
}
