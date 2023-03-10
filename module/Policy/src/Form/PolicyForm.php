<?php
namespace Policy\Form;

use Laminas\Form\Form;

class PolicyForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('policys');
        
        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'first_name',
            'type' => 'text',
            'options' => [
                'label' => 'First Name',
            ],
        ]);
        $this->add([
            'name' => 'last_name',
            'type' => 'text',
            'options' => [
                'label' => 'Last Name',
            ],
        ]);
        $this->add([
            'name' => 'policy_number',
            'type' => 'text',
            'options' => [
                'label' => 'Policy number',
            ],
        ]);
        $this->add([
            'name' => 'start_date',
            'type' => 'text',
            'options' => [
                'label' => 'Start Date',
            ],
        ]);
        $this->add([
            'name' => 'end_date',
            'type' => 'text',
            'options' => [
                'label' => 'End Date',
            ],
        ]);
        $this->add([
            'name' => 'premium',
            'type' => 'text',
            'options' => [
                'label' => 'Premium',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Submit',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
