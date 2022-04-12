<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

use NanoSoup\Nemesis\ACF\FieldGroups\FieldGroup;

/**
 * Class BlockFieldGroup 
 * @package NanoSoup\Nemesis\ACF
 */
class BlockFieldGroup extends FieldGroup
{
    /**
     * Set the value of key
     */
    public function setKey($key): self
    {
        $this->key = 'group_block_' . $key;

        return $this;
    }

    /**
     * Return an ACF Field Group
     * 
     * @return array
     */
    public function getFieldGroup(): array
    {
        if (empty($this->key)) {
            $this->key = 'group_block_' .  $this->generateName($this->title);
        }

        return parent::getFieldGroup();
    }
}
