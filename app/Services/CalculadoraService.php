<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CalculadoraService
{
    /**
     * @var PostRepository
     */

    public function sum($num1, $num2)
    {

        DB::beginTransaction();
        try {
            $result = $num1 + $num2;
        } catch (\Throwable $th) {
            DB::rollBack();
            logger()->error($th);
            return [
                'success' => false,
                'message' => 'Erro ao fazer soma'
            ];
        }
        DB::commit();
        return [
            'success' => true,
            'message' => 'Soma feita com sucesso',
            'data' => $result
        ];
    }
    public function div($num1, $num2)
    {

        DB::beginTransaction();
        try {
            if ($num2 == 0) {
                return [
                    'success' => false,
                    'message' => 'Divisão por zero'
                ];
            }
            $result = $num1 / $num2;
        } catch (\Throwable $th) {
            DB::rollBack();
            logger()->error($th);
            return [
                'success' => false,
                'message' => 'Erro ao fazer div'
            ];
        }
        DB::commit();
        return [
            'success' => true,
            'message' => 'Div feita com sucesso',
            'data' => $result
        ];
    }
}