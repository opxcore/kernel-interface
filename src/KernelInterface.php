<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Kernel\Interfaces;

use OpxCore\Request\Interfaces\RequestInterface;
use OpxCore\Response\Interfaces\ResponseInterface;

interface KernelInterface
{
    /**
     * Handle request and transform it to response.
     *
     * @param RequestInterface $request
     *
     * @return  ResponseInterface
     */
    public function handle(RequestInterface $request): ResponseInterface;
}