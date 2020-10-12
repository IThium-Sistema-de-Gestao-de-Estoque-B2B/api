<?php

namespace App\Transformers;

use App\Entities\Role;
use League\Fractal\TransformerAbstract;

class RoleTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @param Role $role
     * @return array
     */
    public function transform(Role $role)
    {
        return [
            'id'          => $role->id,
            'slug'        => $role->slug,
            'name'        => $role->name,
        ];
    }
}
