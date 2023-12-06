<?php 

// module/Application/src/Form/JobForm.php

namespace Application\Form;

use Laminas\Form\Form;

class JobForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'title',
            'type' => 'Text',
            'options' => [
                'label' => 'Job Title',
            ],
        ]);

        $this->add([
            'name' => 'description',
            'type' => 'Textarea',
            'options' => [
                'label' => 'Job Description',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => 'Text',
            'options' => [
                'label' => 'Company',
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => 'Text',
            'options' => [
                'label' => 'Location',
            ],
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Submit',
                'id' => 'submitbutton',
            ],
        ]);
    }
}