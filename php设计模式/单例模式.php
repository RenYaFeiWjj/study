<?php

class Test
{
    private static $instance = null;
    private $name = '';

    /**
     * @return Test|null
     * 任亚飞
     * 单例模式指只需要实例化一次
     * 场景如: 配置类、session类、Cache类、File类、Database类
     */
    public static function getInstance()
    {
        //控制住基类，在源头上限制这个类，使其无法生成多个对象，如果已经生成过，直接返回
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getName()
    {
        return $this->name = "张三";
    }

    private function __construct()
    {
    }

    /**
     * 任亚飞
     * 不允许克隆
     */
    private function __clone()
    {
    }

    /**
     * 任亚飞
     * 不允许重建
     */
    private function __wakeup()
    {
    }
}

echo Test::getInstance()->getName();