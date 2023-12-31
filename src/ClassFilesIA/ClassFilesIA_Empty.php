<?php

namespace Donquixote\ClassDiscovery\ClassFilesIA;

class ClassFilesIA_Empty implements ClassFilesIAInterface {

  /**
   * {@inheritdoc}
   */
  public function getIterator(): \Traversable {
    return new \EmptyIterator();
  }

  /**
   * {@inheritdoc}
   */
  public function withRealpathRoot(): static {
    return $this;
  }
}
