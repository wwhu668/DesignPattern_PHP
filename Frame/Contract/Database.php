<?php

namespace Frame\Contract;

interface Database
{
    public function connect(Array $config);
    public function query($sql);
    public function close();
}
