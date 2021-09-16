<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($id)
    {   
        return [
            'id_company'=>$this->id,
            'name'=>$this->name,
            'website'=>$this->website_url,
            'logo'=>$this->logo_path,
        ];
    }
}
