<?php

namespace Arubacao\PhpCsFixer;


abstract class Base extends \PhpCsFixer\Config
{
    public function __construct($name = 'default')
    {
        parent::__construct($name);

        $finder = $this->getFinder()
            ->name('*.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
            ->exclude([
                '.git',
                '.idea',
                'bower_components',
                'node_modules',
                'vendor',
            ]);

        $this
            ->setRiskyAllowed(true)
            ->setFinder($finder);
    }

    /**
     * Add rules to predefined rules of this configuration.
     *
     * @param array $rules
     *
     * @return self
     */
    public function addRules(array $rules)
    {
        return $this->setRules(array_merge(
            $this->getRules(),
            $rules
        ));
    }
}
