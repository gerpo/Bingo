<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Card extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CardItem::class, 'card_id', 'id');
    }

    public static function generateItems(int $amount = 9, int $type = ItemValue::TEXT_TYPE): Collection
    {
        $items = collect();

        for ($i = 0; $i < $amount; $i++) {
            $items->add(
                tap(CardItem::makeRandom($type), fn ($cardItem) => $cardItem->position = $i)
            );
        }

        return $items;
    }

    public static function makeCardforUser(User $user, int $amount = 9, int $type = ItemValue::TEXT_TYPE): self
    {
        return tap(new self(), function ($card) use ($user, $amount, $type) {
            $user->card()->save($card);
            $card->items()->saveMany($card::generateItems($amount, $type));
        });
    }
}
