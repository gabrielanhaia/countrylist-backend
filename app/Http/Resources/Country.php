<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class Country
 * @package App\Http\Resources
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class Country extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->country_code,
            'name' => $this->country_description
        ];
    }
}
