<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResResource extends JsonResource
{
    protected $status;
    protected $message;

    /**
     * ResResource constructor. (Response Resource)
     *
     * @param  mixed $resource
     * @param  mixed $status
     * @param  mixed $message
     * @return void
     */
    public function __construct($resource, $status, $message)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->resource,
        ];
    }
}
