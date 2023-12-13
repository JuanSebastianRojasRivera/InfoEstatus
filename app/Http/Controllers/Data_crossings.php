<?php
use Illuminate\Support\Facades\DB;

class MiControlador extends Controller
{
    public function actualizarTabla()
    {
        // Realiza la consulta para encontrar los datos que coincidan
        $datosActualizar = DB::table('tasks')
            ->select('client')
            ->whereIn('client', function ($query) {
                $query->select('old_names')->from('changesclients');
            })
            ->get();

        foreach ($datosActualizar as $dato) {
            $shortName = DB::table('changesclients')
                ->where('old_names', $dato->client)
                ->value('short_name'); // Obtiene el valor de 'short_name' en base a 'old_names'

            DB::table('tasks')
                ->where('client', $dato->client)
                ->update(['client' => $shortName]); // Actualiza 'clients' con 'short_name'
        }

        return "Datos actualizados correctamente";
    }
}
