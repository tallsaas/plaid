<?php

namespace Obsidian;

use Obsidian\Attributes\Web\TagName;
use Obsidian\Attributes\Web\ClassName;
use Obsidian\Attributes\Web\Style;

class Component
{
  protected TagName $tagName;

  protected Collection $className;

  protected Collection $style;

  public function __construct(TagName $tagName, )
  {
    //
  }

  public function for(Collection $collection, mixed $itemType): void
  {
    //
  }

  public function className(string|array $className): void
  {
    $this->className = is_array($className)
  }

}