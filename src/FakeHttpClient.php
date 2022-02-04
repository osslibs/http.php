<?php

namespace osslibs\HTTP;

class FakeHttpClient implements HttpClient
{
    /**
     * @var HttpResponse
     */
    private $response;

    public function __construct(HttpResponse $response)
    {
        $this->response = $response;
    }

    public function send(HttpRequest $request): HttpResponse
    {
        return $this->response;
    }
}
