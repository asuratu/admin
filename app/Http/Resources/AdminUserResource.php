<?php

namespace App\Http\Resources;

use App\Models\AdminUser;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        /** @var AdminUser $model */
        $model = $this->resource;

        return [
            'id' => $model->id,
            'username' => $model->username,
            'name' => $model->name,
            'avatar' => $model->avatar,
            'created_at' => (string) $model->created_at,
        ];
    }
}