<?php
namespace App\Filament\Resources\TagResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\TagResource;
use App\Filament\Resources\TagResource\Api\Requests\CreateTagRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = TagResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Tag
     *
     * @param CreateTagRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateTagRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}