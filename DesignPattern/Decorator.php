<?php
#代码实例（出自php设计模式）
interface Component
{
    public function operation();
}

/**
 * 装饰角色
 */
class Decorator implements Component
{
    protected $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation()
    {
        $this->component->operation();
    }
}

/**
 * 具体装饰类A
 */
class ConcreteDecoratorA extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function operation()
    {
        parent::operation();
        $this->addedOperationA();//新添加的操作
    }

    public function addedOperationA()
    {
        echo 'Add Operation A <br />';
    }
}

/**
 * 具体装饰类B
 */
class ConcreteDecoratorB extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function operation()
    {
        parent::operation();
        $this->addedOperationB();//新添加的操作
    }

    public function addedOperationB()
    {
        echo 'Add Operation B <br />';
    }
}

/**
 * 具体构件
 */
class ConcreteComponent implements Component
{
    public function operation()
    {
        echo 'Concrete Component operation <br />';
    }
}

/**
 * 客户端
 */
class Client
{
    public static function main()
    {
        $component = new ConcreteComponent();
        $decoratorA = new ConcreteDecoratorA($component);
        $decoratorB = new ConcreteDecoratorB($decoratorA);

        $decoratorA->operation();
        $decoratorB->operation();
    }
}

Client::main();

// 输出
// Concrete Component operation <br />
// Add Operation A <br />
//
// Concrete Component operation <br />
// Add Operation A <br />
// Add Operation B <br />
