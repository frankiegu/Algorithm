<?php

/**
 * List By Array
 * 简单数组实现链表结构
 */
class ListByArray
{
    private $list = null;
    private $lenght = 0;


    public function __construct()
    {
        $this->list = array();
    }

    public function printList()
    {
        foreach ($this->list as $key => $value) {
            printf("pos=%d value=%d\n", $key + 1, $value);
        }
    }

    /**
     * $pos 从1开始插入
     */
    public function insert($pos, $value)
    {
        if (($pos - 1) > $this->lenght || ($pos - 1) < 0) {
            printf("Error:插入下标 %d 越界，请在链表允许范围内插入数据。当前链表长度为 %d \n", $pos, $this->lenght);
            return $this;
        }

        for ($i = $this->lenght; $i >= $pos; $i--) {
            $this->list[$i] = $this->list[$i - 1];
        }

        $this->list[$pos - 1] = $value;

        $this->lenght++;
        return $this;
    }

    public function findKth($pos)
    {
        if ($pos > $this->lenght || $pos <= 0) {
            printf("Error:查询下标 %d 越界，请在链表允许范围内插入数据。当前链表长度为 %d \n", $pos, $this->lenght);
            return $this;
        }

        printf("%d\n", $this->list[$pos - 1]);

        return $this;
    }

    public function find($value): int
    {
        foreach ($this->list as $k => $v) {
            if ($value === $v) {
                return $k + 1;
            }
        }
        return -1;
    }


    public function delete($value)
    {
        $pos = $this->find($value);
        if ($pos === -1) {
            return $this;
        }


        for ($i = $pos - 1; $i < $this->lenght - 1; $i++) {
            $this->list[$i] = $this->list[$i + 1];
        }
        unset($this->list[$this->lenght - 1]);
        $this->lenght--;
        return $this;


    }


}

?>
