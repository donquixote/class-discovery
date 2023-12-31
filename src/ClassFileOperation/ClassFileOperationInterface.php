<?php

namespace Donquixote\ClassDiscovery\ClassFileOperation;

interface ClassFileOperationInterface {

  /**
   * Executes an operation for a given class / file.
   *
   * @param string $filepath
   * @param string $class
   *
   * @throws \Exception
   */
  public function execute($filepath, $class);

}
