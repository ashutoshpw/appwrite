<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Attribute extends Model
{
    public function __construct()
    {
        $this
            ->addRule('key', [
                'type' => self::TYPE_STRING,
                'description' => 'Attribute Key.',
                'default' => '',
                'example' => 'fullName',
            ])
            ->addRule('type', [
                'type' => self::TYPE_STRING,
                'description' => 'Attribute type.',
                'default' => '',
                'example' => 'string',
            ])
            ->addRule('status', [
                'type' => self::TYPE_STRING,
                'description' => 'Attribute status. Possible values: `available`, `processing`, `deleting`, or `failed`',
                'default' => '',
                'example' => 'available',
            ])
            ->addRule('size', [
                'type' => self::TYPE_STRING,
                'description' => 'Attribute size.',
                'default' => 0,
                'example' => 128,
            ])
            ->addRule('required', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'Is attribute required?',
                'default' => false,
                'example' => true,
            ])
            ->addRule('array', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'Is attribute an array?',
                'default' => false,
                'example' => false,
                'required' => false
            ])
        ;
    }

    /**
     * Get Name
     * 
     * @return string
     */
    public function getName():string
    {
        return 'Attribute';
    }

    /**
     * Get Collection
     * 
     * @return string
     */
    public function getType():string
    {
        return Response::MODEL_ATTRIBUTE;
    }
}