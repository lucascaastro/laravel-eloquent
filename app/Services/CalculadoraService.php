<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    /**
     * @var PostRepository
     */

    public function sum(int $num1, int $num2)
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
}