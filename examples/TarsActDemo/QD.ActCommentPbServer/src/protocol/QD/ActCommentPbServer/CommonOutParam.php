<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: actComment.proto

namespace Protocol\QD\ActCommentPbServer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *输出参数通用结构体
 *
 * Generated from protobuf message <code>protocol.QD.ActCommentPbServer.CommonOutParam</code>
 */
class CommonOutParam extends \Google\Protobuf\Internal\Message
{
    /**
     *接口返回码
     *
     * Generated from protobuf field <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     *接口返回提示信息
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *          接口返回码
     *     @type string $message
     *          接口返回提示信息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ActComment::initOnce();
        parent::__construct($data);
    }

    /**
     *接口返回码
     *
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *接口返回码
     *
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     *接口返回提示信息
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     *接口返回提示信息
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

