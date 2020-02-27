<?php

namespace App\Models;

trait QueryHelper {

    public function scopeOrdered($query, $field = 'id', $direction = 'asc') {
        return $query->orderBy($field, $direction);
    }
}
