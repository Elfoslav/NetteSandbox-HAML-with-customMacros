<?php

use Nette\Latte\MacroNode;
use Nette\Latte\PhpWriter;

class CustomMacros extends Nette\Latte\Macros\MacroSet
{

    public static function install(Nette\Latte\Compiler $compiler)
    {
        $set = new static($compiler);
        $set->addMacro('id', NULL, NULL, array($set, 'macroId'));
    }


    /**
     * n:id="..."
     */
    public function macroId(MacroNode $node, PhpWriter $writer)
    {
        return $writer->write('if ($_l->tmp = array_filter(%node.array)) echo \' id="\' . %escape(implode(" ", array_unique($_l->tmp))) . \'"\'');
    }

}
