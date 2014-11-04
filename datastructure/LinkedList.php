<?php
/**
 * Copyright © 2006-2013 chenguofeng All rights reserved
 * Author: chenguofeng
 * Date:
 * Description:
 */
class Node
{
    private $Data; //节点数据
    private $Next; //下一节点

    public function setData($value)
    {
        $this->Data = $value;
    }

    public function setNext($value)
    {
        $this->Next = $value;
    }

    public function getData()
    {
        return $this->Data;
    }

    public function getNext()
    {
        return $this->Next;
    }

    public function __construct($data, $next)
    {
        $this->setData($data);
        $this->setNext($next);
    }
}

class LinkList
{
    private $header; //头节点
    private $size; //长度
    public function getSize()
    {
        $i = 0;
        $node = $this->header;
        while ($node->getNext() != null) {
            $i++;
            $node = $node->getNext();
        }
        return $i;
    }

    public function setHeader($value)
    {
        $this->header = $value;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function __construct()
    {
        header("content-type:text/html; charset=utf-8");
        $this->setHeader(new Node(null, null));
    }

    /**
     * @author MzXy
     * @param  $data --要添加节点的数据
     *
     */
    public function add($data)
    {
        $node = $this->header;
        while ($node->getNext() != null) {
            $node = $node->getNext();
        }
        $node->setNext(new Node($data, null));
    }

    /**
     * @author MzXy
     * @param  $data --要移除节点的数据
     *
     */
    public function removeAt($data)
    {
        $node = $this->header;
        while ($node->getData() != $data) {
            $node = $node->getNext();
        }
        $node->setNext($node->getNext());
        $node->setData($node->getNext()->getData());
    }

    /**
     * @author MzXy
     * @param  遍历
     *
     */
    public function get()
    {
        $node = $this->header;
        if ($node->getNext() == null) {
            print("数据集为空!");
            return;
        }
        while ($node->getNext() != null) {
            print('[' . $node->getNext()->getData() . '] -> ');
            if ($node->getNext()->getNext() == null) {
                break;
            }
            $node = $node->getNext();
        }
    }

    /**
     * @author MzXy
     * @param  $data --要访问的节点的数据
     * @param 此方法只是演示不具有实际意义
     *
     */
    public function getAt($data)
    {
        $node = $this->header->getNext();
        if ($node->getNext() == null) {
            print("数据集为空!");
            return;
        }
        while ($node->getData() != $data) {
            if ($node->getNext() == null) {
                break;
            }
            $node = $node->getNext();
        }
        return $node->getData();
    }

    /**
     * @author MzXy
     * @param  $value --需要更新的节点的原数据  --$initial---更新后的数据
     *
     */
    public function update($initial, $value)
    {
        $node = $this->header->getNext();
        if ($node->getNext() == null) {
            print("数据集为空!");
            return;
        }
        while ($node->getData() != $data) {
            if ($node->getNext() == null) {
                break;
            }
            $node = $node->getNext();
        }
        $node->setData($initial);
    }
}

$lists = new LinkList();
$lists->add(1);
$lists->add(2);
$lists->add(3);
$lists->add('hello');
$lists->get();

echo '<pre>';
print_r($lists);
echo '</pre>';

?>
