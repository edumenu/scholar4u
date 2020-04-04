<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'post_title' => $this->post_title,
            'user_id' => $this->user_id,
            'post_user_name' => $this->post_user_name,
            'post_user_picture' => $this->post_user_picture,
            'post_category' => $this->post_category,
            'post_comment_count' => $this->post_comment_count,
            'post_view_count' => $this->post_view_count,
            'post_likes' => $this->post_comment_count,
            'post_dislikes' => $this->post_view_count,
        ];
    }
}
