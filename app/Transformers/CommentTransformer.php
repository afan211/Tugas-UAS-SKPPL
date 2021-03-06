<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Comment;

/**
 * Class CommentTransformer
 * @package namespace App\Transformers;
 */
class CommentTransformer extends TransformerAbstract
{

    /**
     * Transform the \Comment entity
     * @param \Comment $model
     *
     * @return array
     */
    public function transform(Comment $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
