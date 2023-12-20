<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Models\task;
use App\Models\aldia;
use App\Models\bluelogistics;
use App\Models\deprisa;
use App\Models\servientrega;
use App\Models\solistica;
use App\Models\tcc;
use Illuminate\Http\RedirectResponse;

class UploadController extends Controller
{
    public function index()
    {
        return view('layouts.upload');
    }

    public function aldia(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }

                    if (count($dato) >= 30) {
                        Aldia::create([
                            'Remission' =>$dato[0],
                            'Doc_Remission' =>$dato[1],
                            'Other_Document' =>$dato[2],
                            'Origin' =>$dato[3],
                            'Dane_Origin' =>$dato[4],
                            'Regional_Origin' =>$dato[5],
                            'Destination' =>$dato[6],
                            'Dane_Destination' =>$dato[7],
                            'Regional_Destination' =>$dato[8],
                            'Customer' =>$dato[9],
                            'Sender' =>$dato[10],
                            'Addressee' =>$dato[11],
                            'Tel_Addressee' =>$dato[12],
                            'Addressee_Address' =>$dato[13],
                            'Quantity' =>$dato[14],
                            'Weight' =>$dato[15],
                            'Date_Desp' =>$dato[16],
                            'Date_Comp' =>$dato[17],
                            'Status_Remittance' =>$dato[18],
                            'Event_Remiage' =>$dato[19],
                            'Status' =>$dato[20],
                            'Status_Guide' =>$dato[21],
                            'Shipment_First_Delivery' =>$dato[22],
                            'Second_Delivery_Shipment' =>$dato[23],
                            'Delivery_Event_Date' =>$dato[24],
                            'Delivery_Event_Time' =>$dato[25],
                            'Delivery_Date' =>$dato[26],
                            'Delivery_Time' =>$dato[27],
                            'Days' =>$dato[28],
                            'Measurement' =>$dato[29],
                            'Last_Date' =>$dato[30],
                            'Complied' =>$dato[31],
                            'Plate' =>$dato[32],
                            'New' =>$dato[33],
                            'Plate2' =>$dato[34],
                            'Responsible' =>$dato[35],
                            'Observation' =>$dato[36],
                            'Responsible2' =>$dato[37],
                            'Product' =>$dato[38],
                            'Service_Type' =>$dato[39],
                            'Customer_Division2' =>$dato[40],
                            'Responsibility_Distribution' =>$dato[41],
                            'Invoice' =>$dato[42],
                            'Responsibility_Distribution2' =>$dato[43],
                            'Invoice2' =>$dato[44],
                            'Invoice_Date' =>$dato[45],
                            'Vlr_Decl' =>$dato[46],
                            'Cost_Protection' =>$dato[47],
                            'Volume' =>$dato[48],
                            'Total_Coburged' =>$dato[49],
                            'Volume2' =>$dato[50],
                            'Work_Weight' =>$dato[51],
                            'Operation_Type' =>$dato[52],
                            'Remarks' =>$dato[53],
                            'Reexrtc' =>$dato[54],
                            'Transp' =>$dato[55]
                        ]);

                    } 
        
                }
        
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Aldia con exito');

        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Aldia!!');
        }
    }

    public function importar(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $dato) {
                    if (count($dato) >= 30) {
                        Task::create([
                            'guide' => $dato[0], // Asegúrate de que el índice coincida con la estructura de tus datos
                            'conveyor' => $dato[1],
                            'client' => $dato[2],
                            'elaboration_date' => $dato[3],
                            'origin' => $dato[4],
                            'client_documentation' => $dato[5],
                            'viv' => $dato[6],
                            'addressee' => $dato[7],
                            'address' => $dato[8],
                            'phone' => $dato[9],
                            'destination_city' => $dato[10],
                            'declared_value' => $dato[11],
                            'parts' => $dato[12],
                            'shipment_type' => $dato[13],
                            'type_route' => $dato[14],
                            'delivery_days' => $dato[15],
                            'scheduled_date' => $dato[16],
                            'presentation_date' => $dato[17],
                            'delivery_appointments' => $dato[18],
                            'delivery_status' => $dato[19],
                            'causal_description' => $dato[20],
                            'causal_amplification' => $dato[21],
                            'causal_amplification2' => $dato[22],
                            'responsible' => $dato[23],
                            'time' => $dato[24],
                            'return_status_fulfilled' => $dato[25],
                            'return_date_fulfilled' => $dato[26],
                            'department_of_origin' => $dato[27],
                            'destination_department' => $dato[28],
                            'weight' => $dato[29],
                        ]);

                    } 
            
                }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo del Infoestatus con exito');
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo del Infoestatus!!');
        }
    }

    public function bluelogistics(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0){
                        continue;
                    }
                    if (count($dato) >= 30) {
                        bluelogistics::create([
                            'Consigment' =>$dato[0],
                            'Recipient' =>$dato[1],
                            'Origin_City' =>$dato[2],
                            'Destination_City' =>$dato[3],
                            'Parts' =>$dato[4],
                            'Weight' =>$dato[5],
                            'Kilos_Volume' =>$dato[6],
                            'Declared_Value' =>$dato[7],
                            'Freight_Value' =>$dato[8],
                            'Cost_Handling' =>$dato[9],
                            'Total_value' =>$dato[10],
                            'Customer_Division' =>$dato[11],
                            'Special_Service' =>$dato[12],
                            'Nit' =>$dato[13],
                            'Invoice_Id' =>$dato[14],
                            'Expedition' =>$dato[15],
                            'Client_Document' =>$dato[16],
                            'Date_Desp' =>$dato[17],
                            'Observations' =>$dato[18],
                            'Status_Guide' =>$dato[19],
                            'Deliver_date' =>$dato[20],
                            'Payment_Form' =>$dato[21],
                            'Closing' =>$dato[22],
                            'Router_Liquidator' =>$dato[23],
                            'Commercial' =>$dato[24],
                            'New_Consignment' =>$dato[25],
                            'Last_Date_Causal' =>$dato[26],
                            'Recipient_Address' =>$dato[27],
                            'Kilos_Collected' =>$dato[28],
                            'Service' =>$dato[29],
                            'Recipent_Phone' =>$dato[30],
                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Bluelogistics con exito');
                
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Bluelogistics!!');
        }        
    }

    public function deprisa(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0){
                        continue;
                    }
                    if (count($dato) >= 30) {
                        Deprisa::create([
                            'Route' =>$dato[0],
                            'Remittance' =>$dato[1],
                            'Date_Desp' =>$dato[2],
                            'Place' =>$dato[3],
                            'Customer_Division' =>$dato[4],
                            'Sender_address' =>$dato[5],
                            'Sender_CPC' =>$dato[6],
                            'Origin' =>$dato[7],
                            'Recipient' =>$dato[8],
                            'Consignee_Address' =>$dato[9],
                            'CP_consignee' =>$dato[10],
                            'Destination' =>$dato[11],
                            'Date_recorded' =>$dato[12],
                            'Departure_date' =>$dato[13],
                            'Arrival_Date' =>$dato[14],
                            'Delivery_Date' =>$dato[15],
                            'Doc_Remi' =>$dato[16],
                            'Quantity' =>$dato[17],
                            'Weight' =>$dato[18],
                            'Volume' =>$dato[19],
                            'Incidence' =>$dato[20],
                            'New' =>$dato[21],
                            'Expansion_incidence' =>$dato[22],
                            'Locator' =>$dato[23],
                            'Remarks' =>$dato[24],
                            'Remarks_1' =>$dato[25],
                            'Reimbursement' =>$dato[26],
                            'Freight' =>$dato[27],
                            'Service_Type' =>$dato[28],
                            'Guide_Status' =>$dato[29],
                            'Receiver_Name' =>$dato[30],
                            'NIT_Receiver' =>$dato[31],
                            'Other_Receiver' =>$dato[32],
                            'Paid' =>$dato[33],
                            'Customs_Declared_Value' =>$dato[34],
                            'Theoretical_Delivery_Date' =>$dato[35],
                            'Transp' =>$dato[36],

                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Deprisa con exito');
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Deprisa!!');
        } 
        
        
    }

    public function servientrega(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0){
                        continue;
                    }
                    if (count($dato) >= 30) {
                        Servientrega::create([
                            'State' =>$dato[0],
                            'Grounds_for_Mass_Annulment' =>$dato[1],
                            'Consigment' =>$dato[2],
                            'Date_Desp' =>$dato[3],
                            'Type_of_service' =>$dato[4],
                            'Shipping_Mpdate'  =>$dato[5],
                            'Doc_Remi'  =>$dato[6],
                            'Amount' =>$dato[7],
                            'Trip_Type' =>$dato[8],
                            'Delivery_Time' =>$dato[9],
                            'Vlr_Decl' =>$dato[10],
                            'Way_to_Pay' =>$dato[11],
                            'Conveyance' =>$dato[12],
                            'Total_Weight'  =>$dato[13],
                            'Total_Volume' =>$dato[14],
                            'Freight_Value' =>$dato[15],
                            'Freight_Sobre_Value' =>$dato[16],
                            'Liquidated_Value_Identification' =>$dato[17],
                            'Identification' =>$dato[18],
                            'Reference' =>$dato[19],
                            'Recipient_Address' =>$dato[20],
                            'Postal_Code' =>$dato[21],
                            'Addressee' =>$dato[22],
                            'Recipent_Tel'  =>$dato[23],
                            'Destination' =>$dato[24],
                            'Destination_Department' =>$dato[25],
                            'Email' =>$dato[26],
                            'Cell_Phone_Number' =>$dato[27],
                            'Origin' =>$dato[28],
                            'Department_Sender' =>$dato[29],
                            'Sender' =>$dato[30],
                            'Sender_Id' =>$dato[31],
                            'From_Address'  =>$dato[32],
                            'Senders_Postal_Code' =>$dato[33],
                            'Sender_Phone' =>$dato[34],
                            'Custom_Field1' =>$dato[35],
                            'Custom_Field2' =>$dato[36],
                            'Observations'  =>$dato[37],
                            'Guide_Type' =>$dato[38],
                            'Shipping_Envelope' =>$dato[39],
                            'Security_Bag'  =>$dato[40],
                            'Customer_Division' =>$dato[41],
                            'Collection' =>$dato[42],
                            'Total_Value_to_Collect' =>$dato[43],
                            'Bill' =>$dato[44],
                            'Shipping_Status' =>$dato[45],
                            'Shipment_Date' =>$dato[46],
                            'Stauts_Guide'  =>$dato[47],
                            'Date_of_Delivery'  =>$dato[48],
                            'Envelope_Box_Number' =>$dato[49],
                            'Cost_Center_Name'  =>$dato[50],
                            'Digital_Return' =>$dato[51],
                            'Collection_Request_Number' =>$dato[52],
                            'Scheduled_Date_by_User_Collection' =>$dato[53],
                            'Scheduled_Time_by_User_Collection' =>$dato[54],
                            'Collection_scheduling_message' =>$dato[55],
                            'New_Scheduled_Collection Date' =>$dato[56],
                            'New_Scheduled_Collection_Time' =>$dato[57],
                            'Office_That_Prints' =>$dato[58],
                            'Office_Print_Date' =>$dato[59],
                            'ReverseGuidance_StatusDate' =>$dato[60],
                            'If_Apply'  =>$dato[61],
                            'Destination_Dane'  =>$dato[62],
                            'Transp' =>$dato[63],

                            

                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Servientrega con exito');
        
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Servientrega!!');
        } 
        
        
    }

    public function solistica(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    
                    if (count($dato) >= 30) {
                        Solistica::create([
                            'Remittance' =>$dato[0],
                            'Nit_Rremittant' =>$dato[1],
                            'Tariff_Code' =>$dato[2],
                            'Customer_Division' =>$dato[3],
                            'Doc_Remi' =>$dato[4],
                            'Dane_Origin' =>$dato[5],
                            'City_Orig(Spa)' =>$dato[6],
                            'Dane_Destination' =>$dato[7],
                            'City_Dest(Spa)' =>$dato[8],
                            'Distribution_Zone' =>$dato[9],
                            'Destination_Code' =>$dato[10],
                            'Nit_or_Cc_Target' =>$dato[11],
                            'Addressee' =>$dato[12],
                            'Consignee_Address' =>$dato[13],
                            'Dry_Load_Cases' =>$dato[14],
                            'Cold_Chain_Boxes' =>$dato[15],
                            'Quantity' =>$dato[16],
                            'Kilos_Dry_Load' =>$dato[17],
                            'Kilos_Cold_Chain_Kilos' =>$dato[18],
                            'Total_Kilos' =>$dato[19],
                            'Exp_Date' =>$dato[20],
                            'Time_of_Processing' =>$dato[21],
                            'Delivery_Date' =>$dato[22],
                            'Delivery_Time' =>$dato[23],
                            'Time' =>$dato[24],
                            'New_Cause' =>$dato[25],
                            'Cause_Manager_Of_The_Cause' =>$dato[26],
                            'Internal_Cause_Manager_Of_The_Cause' =>$dato[27],
                            'Status' =>$dato[28],
                            'Status_Guide' =>$dato[29],
                            'Remarks' =>$dato[30],
                            'Executive_Note' =>$dato[31],
                            'Response_From_New_Notices' =>$dato[32],
                            'Delivery_Doc' =>$dato[33],
                            'Solids_Invoice_No' =>$dato[34],
                            'Document_No_2' =>$dato[35],
                            'Document_No_3' =>$dato[36],
                            'Document_No_4' =>$dato[37],
                            'Return_Index' =>$dato[38],
                            'Shipping_Invoice_Index' =>$dato[39],
                            'Promised_Delivery_Date' =>$dato[40],
                            'Basic_Service_Promise_of_Service' =>$dato[41],
                            'Service_Type' =>$dato[42],
                            'Purchase_Order' =>$dato[43],
                            'Digitization' =>$dato[44],
                            'Fulfillment_Indicator' =>$dato[45],
                            'Cause_Queue_No_1' =>$dato[46],
                            'Queue_of_Appeal_No_2' =>$dato[47],
                            'Cause_Queue_No_3' =>$dato[48],
                            'Queue_Of_Appeal_Nr_4' =>$dato[49],
                            'Appointment_Dispatch' =>$dato[50],
                            'First_Appointment_Date' =>$dato[51],
                            'Appointment_Note' =>$dato[52],
                            'Transp' =>$dato[53],
                            'Origin' =>$dato[54],
                            'Destination' =>$dato[55],


                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Solistica con exito');
        
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Solistica!!');
        } 
    }

    public function tcc(Request $request): RedirectResponse
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();
            
            $datos = Excel::toArray(new UploadController, $path);
            
            if (!empty($datos) && is_array($datos[0])) {
                $datosImportar = $datos[0];
                
                foreach ($datosImportar as $indice => $dato) {
                    if($indice === 0 or empty($dato[0])){
                        continue;
                    }
                    if (count($dato) >= 27) {
                        Tcc::create([
                            'Remittance' =>$dato[0],
                            'Date_Disp' =>$dato[1],
                            'Doc_Remi' =>$dato[2],
                            'Origin' =>$dato[3],
                            'Destination' =>$dato[4],
                            'Service_Type' =>$dato[5],
                            'Client_Division' =>$dato[6],
                            'Location _Sender' =>$dato[7],
                            'Recipient' =>$dato[8],
                            'Destination_Headquarters' =>$dato[9],
                            'Phone_Telephone_Addressee' =>$dato[10],
                            'Addressee_Address' =>$dato[11],
                            'Quantity' =>$dato[12],
                            'Packages' =>$dato[13],
                            'Packages2' =>$dato[14],
                            'Actual_Weight' =>$dato[15],
                            'Weight_Volume' =>$dato[16],
                            'Vlr_Decl' =>$dato[17],
                            'Guide_Status' =>$dato[18],
                            'Estimated_Date' =>$dato[19],
                            'Delivery_Days' =>$dato[20],
                            'Delivery_Date' =>$dato[21],
                            'Novelty' =>$dato[22],
                            'New_New3' =>$dato[23],
                            'Remarks' =>$dato[24],
                            'Dane_City_Origin_City' =>$dato[25],
                            'Dane_Destination_City' =>$dato[26],
                            'Transp' =>$dato[27],


                        ]);

                    } 
            
                 }
            
            }

            return redirect()->route('upload')->with('Cargado', 'Se ha cargado el archivo de Tcc con exito');
        
        }
        else
        {
            return redirect()->route('upload')->with('CargaFallida', '¡Ups, parece que has olvidado subir el archivo de Tcc!!');
        } 
    }
}
