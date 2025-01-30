<?php

namespace Illuminate\Validation\Concerns;

trait HasDataAwareness
{
    /**
     * The data under validation.
     *
     * @var array
     */
    protected $data;

    /**
     * Set the current data under validation.
     *
     * @param  array  $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
