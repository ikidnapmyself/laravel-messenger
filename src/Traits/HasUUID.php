<?php

namespace Cmgmyr\Messenger\Traits;

use Webpatser\Uuid\Uuid;

trait HasUUID
{
    /**
     * Boot model class.
     */
    protected static function bootHasUUID()
    {
        static::creating(function ($model) {
            /**
             * @var \Illuminate\Database\Eloquent\Model $model
             */
            if (!$model->getKey())
            {
                $model->{$model->getKeyName()} = Uuid::generate(4)->string;
            }
        });
    }

    /**
     * Do not increment primary key.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Return primary key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}