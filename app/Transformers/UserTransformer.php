<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * Include resources without needing it to be requested.
     *
     * @var array
     */
    protected $defaultIncludes = ['role'];

    /**
     * Turn this item object into a generic array
     *
     * @param User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id'         => $user->id,
            'name'       => $user->name,
            'email'      => $user->email,
        ];
    }

    /**
     * Includes the role into the transformer data
     * 
     * @param User $user
     * @return \League\Fractal\Resource\Item
     */
    protected function includeRole(User $user){
        return $this->item($user->role, new RoleTransformer);
    }
}

