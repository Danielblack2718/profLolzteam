<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

\Carbon\Carbon::setLocale('ru');
class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image,
            'content' => $this->content,
            'created_at' =>  $this->created_at->diffForHumans(['locale' => 'ru']),
            'comments' => CommentResource::collection($this->comments)
        ];
    }
}
