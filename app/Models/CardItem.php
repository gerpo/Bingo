<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardItem extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function valueData()
    {
        return $this->belongsTo(ItemValue::class, 'id');
    }

    public static function makeRandom(int $type = ItemValue::TEXT_TYPE): self
    {
        return tap(new self(), function ($cardItem) use ($type) {
            $cardItem->value_id = ItemValue::where('type', $type)->inRandomOrder()->first()->id;
        });
    }
}
