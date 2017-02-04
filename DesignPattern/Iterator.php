<?php 
class TestIterator implements Iterator
{
    private $data;
    private $index;
    private $count;

    public function __construct($data)
    {
        $this->data = $data;
        $this->index = 0;
        $this->count = count($this->data);
    }

    public function rewind()
    {
        echo __METHOD__;
        $this->index = 0;
    }

    public function valid()
    {
        echo __METHOD__;
        return $this->index < $this->count;
    }

    public function key()
    {
        echo __METHOD__;
        return $this->index;
    }

    public function current()
    {
        echo __METHOD__;
        $row = $this->data[$this->index];
        // $row['ip'] = gethostbyname($row['url']);
        return $row;
    }

    public function next() {
        echo __METHOD__;
        $this->index ++;
    }
}

$array = array(
	array('url' => 'www.zeroplace.cn'),
	array('url' => 'www.baidu.com'),
	array('url' => 'www.sina.com.cn'),
	array('url' => 'www.google.com'),
	array('url' => 'www.qq.com'),
);

$d = new TestIterator($array);
foreach($d as $k => $v) {
    echo '---------------';
    echo $v['url'];
    echo '###############';
}
// TestIterator::rewind
// TestIterator::valid
// TestIterator::current
// TestIterator::key
// ---------------
// www.zeroplace.cn
// ###############
// TestIterator::next
// TestIterator::valid
// TestIterator::current
// TestIterator::key
// ---------------
// www.baidu.com
// ###############
// TestIterator::next
// TestIterator::valid
// TestIterator::current
// TestIterator::key
// ---------------
// www.sina.com.cn
// ###############
// TestIterator::next
// TestIterator::valid
// TestIterator::current
// TestIterator::key
// ---------------
// www.google.com
// ###############
// TestIterator::next
// TestIterator::valid
// TestIterator::current
// TestIterator::key
// ---------------
// www.qq.com
// ###############
// TestIterator::next
// TestIterator::valid
