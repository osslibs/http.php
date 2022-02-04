<?php

namespace osslibs\HTTP;

class HttpRequest
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var string|null
     */
    private $data;

    /**
     * HttpRequest constructor.
     * @param string $method
     * @param string $url
     * @param array $headers
     * @param mixed $data
     */
    public function __construct(string $method, string $url, array $headers = [], $data = null)
    {
        $this->method = $method;
        $this->url = $url;
        $this->headers = $headers;
        $this->data = $data;
    }

    public function method(): string
    {
        return $this->method;
    }

    public function uri(): string
    {
        return $this->url;
    }

    public function headers(): array
    {
        return $this->headers;
    }

    public function data()
    {
        return $this->data;
    }
}
