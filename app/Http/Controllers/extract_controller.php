<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Exception;

use Illuminate\Support\Facades\Storage;

class extract_controller extends Controller
{
    
    public function verificarCodVerifica()
    {
        try {
            $data_decoded_s = isset($_GET['parametro']) ? urldecode($_GET['parametro']) : '';
            $data =  str_replace(" ","+",$data_decoded_s);
            if ($data) {
                return redirect()->route('detalle', ['parametro' => $data]);
            } else {
                return view('no');
            }
        } catch (Exception $e) {
       
            \Log::error('Error en redirect: ' . $e->getMessage());
            return view('no');        
        
        }
    }

    public function redirect(request $request)
    {   
        try {
            $dato = $request->query('parametro');
    
            if ($dato) {
                $decodificar_base64 = base64_decode($dato);
                $descom = gzuncompress($decodificar_base64);
                $json_decodes1 = json_decode($descom);
            
                $cedula = $json_decodes1->cc;
                $length = strlen($cedula);

                if ($length <= 4) {
                    return $cedula;
                }
            
                $lastFour = substr($cedula, -4);
            
                $maskedPart = str_repeat('*', $length - 4);
            
                $cedula = $maskedPart . $lastFour;
            

                if ($json_decodes1) {
                    return view('detalle', ['content' => $json_decodes1, 'cedula' => $cedula]);
                } else {
                    return view('no');
                }
            } else {
                return view('no');
            }
        } catch (Exception $e) {
            \Log::error('Error en redirect: ' . $e->getMessage());
            return view('no');        
        }
        
    }


}
