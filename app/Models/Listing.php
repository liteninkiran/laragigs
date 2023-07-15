<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public static function all($columns = ['*']) {
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'jgflsfsdf',
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'gfhjldkfjhgfhj',
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
