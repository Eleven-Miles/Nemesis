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
     * Get the value of taxonomy
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Set the value of taxonomy
     */
    public function setTaxonomy($taxonomy): self
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * Get the value of field_type
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Set the value of field_type
     */
    public function setFieldType($field_type): self
    {
        $this->field_type = $field_type;

        return $this;
    }

    /**
     * Get the value of allow_null
     */
    public function getAllowNull()
    {
        return $this->allow_null;
    }

    /**
     * Set the value of allow_null
     */
    public function setAllowNull($allow_null): self
    {
        $this->allow_null = $allow_null;

        return $this;
    }

    /**
     * Get the value of load_save_terms
     */
    public function getLoadSaveTerms()
    {
        return $this->load_save_terms;
    }

    /**
     * Set the value of load_save_terms
     */
    public function setLoadSaveTerms($load_save_terms): self
    {
        $this->load_save_terms = $load_save_terms;

        return $this;
    }

    /**
     * Get the value of return_format
     */
    public function getReturnFormat()
    {
        return $this->return_format;
    }

    /**
     * Set the value of return_format
     */
    public function setReturnFormat($return_format): self
    {
        $this->return_format = $return_format;

        return $this;
    }

    /**
     * Get the value of add_term
     */
    public function getAddTerm()
    {
        return $this->add_term;
    }

    /**
     * Set the value of add_term
     */
    public function setAddTerm($add_term): self
    {
        $this->add_term = $add_term;

        return $this;
    }
}
