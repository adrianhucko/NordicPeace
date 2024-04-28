<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => UserResource::make($this->whenLoaded('user')),
            'photos' => PostPhotoResource::collection($this->whenLoaded('photos')),
            'comments' => PostCommentResource::collection($this->whenLoaded('comments')),
            'body' => $this->body,
            'created_at' => Carbon::parse($this->created_at)->diffForHumans(),
        ];
    }
}
