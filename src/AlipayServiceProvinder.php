<?php
/***
 *                        ,%%%%%%%%,
 *                      ,%%/\%%%%/\%%
 *                     ,%%%\c "" J/%%%
 *            %.       %%%%/ o  o \%%%
 *            `%%.     %%%%    _  |%%%
 *             `%%     `%%%%(__Y__)%%'
 *             //       ;%%%%`\-/%%%'
 *            ((       /  `%%%%%%%'
 *             \\    .'          |
 *              \\  /       \  | |
 *               \\/         ) | |
 *                \         /_ | |__
 *                (___________)))))))
 * @author：gaoyuan
 * @created_time：2017-12-07 13:52
 * When I wrote this, only God and I understood what I was doing
 * Now, God only knows
 */

namespace Renyi666\Alipay;


use Illuminate\Support\ServiceProvider;

class AlipayServiceProvinder extends  ServiceProvider
{

    public function boot()
    {
        // Publish the config file to
        $this->publishes([
            __DIR__.'/config/alipay.php' => config_path('alipay.php'),
        ]);
    }
}