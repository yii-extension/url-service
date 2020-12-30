<?php

declare(strict_types=1);

namespace Yii\Extension\Service;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Yiisoft\Router\UrlGeneratorInterface;

final class ServiceUrl
{
    private ResponseFactoryInterface $responseFactory;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(
        ResponseFactoryInterface $responseFactory,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->responseFactory = $responseFactory;
        $this->urlGenerator = $urlGenerator;
    }

    public function run(string $url): ResponseInterface
    {
        return $this->responseFactory
            ->createResponse(302)
            ->withHeader('Location', $this->urlGenerator->generate($url));
    }
}
