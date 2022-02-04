<?php

namespace osslibs\HTTP;

interface HttpClient
{
    /**
     * @param HttpRequest $request
     * @return HttpResponse
     * @throws ClientRequestException
     * @throws ServerErrorException
     * @throws ConnectionException
     */
    public function send(HttpRequest $request): HttpResponse;
}
