<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrestamoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->prestamo_id,
            'fecha_prestamo' => $this->fecha_prestamo,
            'fecha_devolucion_esperada' => $this->fecha_devolucion_esperada,
            'fecha_devolucion_real' => $this->fecha_devolucion_real,
            'usuario_id' => $this->usuario_id,
            'libro_id' => $this->libro_id,
            'estado' => $this->estado,

        ];
    }
}
