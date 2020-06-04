<?php

namespace App\Repository\Eloquent;

use App\Post;
use App\Repository\PostRepositoryInterface;
use Illuminate\Support\Collection;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param post $model
    */
   public function __construct(Post $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }
}