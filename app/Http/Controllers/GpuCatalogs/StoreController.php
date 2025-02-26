<?php

namespace App\Http\Controllers\GpuCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\GpuCatalogs\StoreRequest;
use App\Models\GpuCatalog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        Log::info('Запрос на создание продукта:', $request->all());
        $data = $request->validated();
        Log::info('Данные после валидации:', $data);
        if ($request->hasFile('preview_image') && $request->file('preview_image')->isValid()) {
            Log::info('Файл загружен:', [
                'original_name' => $request->file('preview_image')->getClientOriginalName(),
                'mime_type' => $request->file('preview_image')->getClientMimeType(),
                'size' => $request->file('preview_image')->getSize(),
            ]);
            $path = Storage::disk('public')->put('images', $request->file('preview_image'));
            if ($path) {
                $data['preview_image'] = $path;
                Log::info('Изображение сохранено по пути:', ['path' => $path]);
            } else {
                Log::error('Не удалось сохранить изображение.');
                return back()->withErrors(['preview_image' => 'Не удалось сохранить изображение.']);
            }
        } else {
            Log::error('Некорректный файл изображения или файл отсутствует.');
            return back()->withErrors(['preview_image' => 'Некорректный файл изображения.']);
        }
        GpuCatalog::create($data);
        return redirect()->route('gpus.index');
    }
}
