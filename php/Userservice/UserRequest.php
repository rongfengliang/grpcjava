<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: userservice.proto

namespace Userservice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>userservice.UserRequest</code>
 */
class UserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string userid = 1;</code>
     */
    private $userid = '';

    public function __construct() {
        \GPBMetadata\Userservice::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string userid = 1;</code>
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>string userid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkString($var, True);
        $this->userid = $var;

        return $this;
    }

}

