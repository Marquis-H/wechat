<?php
/**
 * Created by PhpStorm.
 * User: marquis
 * Date: 2020/6/11
 * Time: 下午2:47
 */

namespace EasyWeChat\MiniProgram\SubscribeMessage;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['subscribe_message'] = function ($app) {
            return new Client($app);
        };
    }
}
