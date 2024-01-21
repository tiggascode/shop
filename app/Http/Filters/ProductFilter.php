<?php 

namespace App\Http\Filters;

use illuminate\Database\Eloquent\Builder;

class ProductFilter extends AnbstractFilter {
    
    const CATEGORIES = 'categories';
    const COLORS = 'colors';
    const PRICE_FROM = 'price';
    const TAGS = 'tags';

    protected function getCallbacks(): array{
        [
            self::CATEGORIES => [$this, 'categories'],
            self::COLORS => [$this, 'colors'],
            self::PRICE_FROM => [$this, 'price'],
            self::TAGS => [$this, 'tags'],
        ];
    }
    protected function cetegories(Builder $builder, $value) {
        $builder->whereIn('category_id',$value);
    }
    protected function colors(Builder $builder, $value) {
        $builder->whereIn('color_id',$value);
    }
    protected function price(Builder $builder, $value) {
        $builder->whereBetween($value['from'], $value['to']);
    }
    protected function Tags (Builder $builder, $value) {
        $builder->whereHas('tags', function ($b) use ($value){
            $b->whereIn('tag_id', $value);
        });
    }
}