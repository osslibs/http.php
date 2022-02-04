<?php

namespace osslibs\HTTP;

class HttpResponse
{
    /**
     * @var int
     */
    private $status;

    /**
     * @var string[]
     */
    private $headers = [];

    /**
     * @var mixed
     */
    private $data;

    public function __construct(int $status, array $headers = [], $data = null)
    {
        $this->status = $status;
        $this->headers = $headers;
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return string[]
     */
    public function headers()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function data()
    {
        return $this->data;
    }

    public function throwForStatus()
    {
        if ($this->status >= 500) {
            throw new ServerErrorException("HTTP CODE: {$this->status}\n{$this->data}", $this->status);
        }

        if ($this->status >= 400) {
            throw new ClientRequestException("HTTP CODE: {$this->status}\n{$this->data}", $this->status);
        }
    }
}
