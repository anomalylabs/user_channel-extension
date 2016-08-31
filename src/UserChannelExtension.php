<?php namespace Anomaly\UserChannelExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

class UserChannelExtension extends Extension
{

    /**
     * This extension provides the user
     * channel for notification broadcasting.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.notifications::channel.user';
}
