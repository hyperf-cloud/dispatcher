<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Dispatcher;

use Hyperf\Contract\DispatcherInterface;

abstract class AbstractDispatcher implements DispatcherInterface
{
    /**
     * @param array ...$params
     */
    public function dispatch(...$params)
    {
        return $this->handle(...$params);
    }
}
