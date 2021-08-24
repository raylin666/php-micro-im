<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Helpers;

use Hyperf\DbConnection\Db;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Redis\Redis;
use Hyperf\Utils\ApplicationContext;

class AppHelper extends Helper
{
    /**
     * 获取容器
     * @return \Psr\Container\ContainerInterface
     */
    protected function getContainer()
    {
        return ApplicationContext::getContainer();
    }

    /**
     * 获取请求类
     * @return RequestInterface|mixed
     */
    protected function getRequest()
    {
        return $this->getContainer()->get(RequestInterface::class);
    }

    /**
     * 获取响应类
     * @return ResponseInterface|mixed
     */
    protected function getResponse()
    {
        return $this->getContainer()->get(ResponseInterface::class);
    }

    /**
     * 获取 DB 服务
     * @return Db|mixed
     */
    protected function getDB()
    {
        return $this->getContainer()->get(Db::class);
    }

    /**
     * 获取 Redis 服务
     * @return Redis|mixed
     */
    protected function getRedis()
    {
        return $this->getContainer()->get(Redis::class);
    }
}
