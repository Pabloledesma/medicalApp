<?php

namespace App;

trait HasRoles {
	
	public function assignRole($role)
    {
        if(is_string($role)){
            return $this->roles()->save(
                Role::whereName($role)->firstOrFail()
            );
        }
        
        return $this->roles()->attach($role);
    }

    public function removeRole(Role $role)
    {
        return $this->roles()->detach($role);
    }

    public function hasRole($role)
    {
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }
}