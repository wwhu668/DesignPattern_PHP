<?php
# 观察者，当事件发生者(事件触发),观察者自动更新 update
class Logic1 implements SplObserver
{
    public function update(SplSubject $subject) {
        echo 'Logic1\n';
    }
}
class Logic2 implements SplObserver
{
    public function update(SplSubject $subject) {
        echo 'Logic2\n';
    }
}

# 事件发生者
abstract Event implements SplSubject
{
    // 观察者对象集合
    private $observers;
    // 添加观察者
    public function attach(SplObserver $observer) {
        $this->observers[] = $observer;
    }
    public function detach(SplObserver $observer) {
        if($index = array_search($observer, $this->observers)) {
            unset($this->observers[$index]);
        }
    }
    // 通知
    public function notify() {
        // 遍历观察者对象，逐一执行 观察者 update
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class EventTrigger extends Event
{
    // 事件发生
    public function trigger() {
        echo 'event trigger';
        // 通知
        $this->notify();
    }
}
