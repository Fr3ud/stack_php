<?php

class Stack
{
  /** @var Node */
  private $last;

  public function __construct()
  {
    $this->last = null;
  }

  public function put(string $item) : void
  {
    $this->last = new Node($item, $this->last);
  }

  /**
   * @return string|null
   * @throws Exception
   */
  public function get() : ?string
  {
    if ($this->isEmpty()) 
      throw new Exception("Stack is empty");
    
    $item = $this->last->getItem();
    $this->last = $this->last->getNext();
    return $item;
  }

  public function isEmpty() : bool
  {
    return $this->last == null;
  }
}