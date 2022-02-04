<?php

namespace osslibs\HTTP;

class ThrowForStatusHttpClient implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function send(HttpRequest $request): HttpResponse
    {
        $response = $this->client->send($request);
        $response->throwForStatus();
        return $response;
    }
}
