<?php
# 策略模式
# 将一组特定的行为或算法封装成类，以适应某些上下文环境
interface Strategy
{
    public function title();
    public function content();
}
class PostNoe implements Strategy
{
    public function title() {
        echo '文章1的标题';
    }
    public function content() {
        echo '文章1的内容';
    }
}
class PostTwo implements Strategy
{
    public function title() {
        echo '文章2的标题';
    }
    public function content() {
        echo '文章2的内容';
    }
}
class Post
{
    private $strategy;
    public function show() {
        $this->strategy->title();
        $this->strategy->content();
    }
    public function setStrategy(Strategy $strategy) {
        $this->strategy = $strategy;
    }
}
$post = new Post();
$post->setStrategy(new PostTwo);
$post->show();
