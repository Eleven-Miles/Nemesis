<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class TaxonomyField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class TaxonomyField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'taxonomy';

    /**
     * Specify the taxonomy to select terms from. Defaults to 'category'.
     * 
     * @var string
     */
    public $taxonomy = '';

    /**
     * Specify the appearance of the taxonomy field. Defaults to 'checkbox'.
     * Choices of 'checkbox' (Checkbox inputs), 'multi_select' (Select field - multiple), 'radio' (Radio inputs) or 'select' (Select field).
     *
     * @var string
     */
    public $field_type = 'checkbox';

    /**
     * Allow a null (blank) value to be selected. Defaults to 0.
     * 
     * @var bool
     */
    public $allow_null = 0;

    /**
     * Allow selected terms to be saved as relatinoships to the post .
     * 
     * @var bool
     */
    public $load_save_terms = 0;

    /**
     * Specify the type of value returned by get_field(). Defaults to 'id'.
     * Choices of 'object' (Term object) or 'id' (Term ID).
     * 
     * @var string
     */
    public $return_format = 'object';

    /**
     * Allow new terms to be added via a popup window.
     * 
     * @var bool
     */
    public $add_term = 1;

    /**
     * @param bool $allowNull
     * @return Field
     */
    public function setAllowNull(bool $allowNull): self
    {
        $this->allow_null = $allowNull;
        return $this;
    }

    /**
     * @param string $returnFormat
     * @return Field
     */
    public function setReturnFormat(string $returnFormat): self
    {
        $this->return_format = $returnFormat;
        return $this;
    }
}
