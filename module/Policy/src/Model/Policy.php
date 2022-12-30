<?php
namespace Policy\Model;


use Laminas\Filter\StringTrim;
use Laminas\Filter\StripTags;
use Laminas\Filter\ToInt;
use Laminas\InputFilter\InputFilter;
use Laminas\InputFilter\InputFilterAwareInterface;
use Laminas\InputFilter\InputFilterInterface;
use Laminas\Validator\StringLength;

class Policy implements InputFilterAwareInterface
{
    public $id;
    public $first_name;
    public $last_name;
    public $policy_number;
    public $start_date;
    public $end_date;
    public $premium;
    private $inputFilter;

    public function exchangeArray(array $data){
        $this->id= !empty($data['id']) ? $data['id']: null;
        $this->first_name= !empty($data['first_name']) ? $data['first_name']: null;
        $this->last_name= !empty($data['last_name']) ? $data['last_name']: null;
        $this->policy_number= !empty($data['policy_number']) ? $data['policy_number']:null;
        $this->start_date= !empty($data['start_date']) ? $data['start_date']: null;
        $this->end_date= !empty($data['end_date']) ? $data['end_date']: null;
        $this->premium= !empty($data['premium']) ? $data['premium']: null;
    }

     // Add the following method:
     public function getArrayCopy()
     {
         return [
             'id'=> $this->id,
             'first_name'=> $this->first_name,
             'last_name'=> $this->last_name,
             'policy_number'=> $this->policy_number,
             'start_date' => $this->start_date,
             'end_date'=> $this->end_date,
             'premium'=> $this->premium,
         ];
     }
     public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new DomainException(sprintf(
             '%s does not allow injection of an alternate input filter',
             __CLASS__
         ));
     }

     public function getInputFilter()
     {
         if ($this->inputFilter) {
             return $this->inputFilter;
         }
 
         $inputFilter = new InputFilter();
 
         $inputFilter->add([
             'name' => 'id',
             'required' => true,
             'filters' => [
                 ['name' => ToInt::class],
             ],
         ]);
 
         $inputFilter->add([
             'name' => 'first_name',
             'required' => true,
             'filters' => [
                 ['name' => StripTags::class],
                 ['name' => StringTrim::class],
             ],
             'validators' => [
                 [
                     'name' => StringLength::class,
                     'options' => [
                         'encoding' => 'UTF-8',
                         'min' => 1,
                         'max' => 100,
                     ],
                 ],
             ],
         ]);
 
         $inputFilter->add([
             'name' => 'last_name',
             'required' => true,
             'filters' => [
                 ['name' => StripTags::class],
                 ['name' => StringTrim::class],
             ],
             'validators' => [
                 [
                     'name' => StringLength::class,
                     'options' => [
                         'encoding' => 'UTF-8',
                         'min' => 1,
                         'max' => 100,
                     ],
                 ],
             ],
         ]);

         $inputFilter->add([
            'name' => 'policy_number',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);

        $inputFilter->add([
            'name' => 'start_date',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);


        $inputFilter->add([
            'name' => 'end_date',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);

        $inputFilter->add([
            'name' => 'premium',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
 
         $this->inputFilter = $inputFilter;
         return $this->inputFilter;
     }
 


}


