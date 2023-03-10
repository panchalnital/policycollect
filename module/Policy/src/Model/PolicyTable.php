<?php
namespace Policy\Model;

use Policy\Model\Policy;
use Laminas\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

class PolicyTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getPolicy($id)
    {
        $id = (int) $id;
        $formset = $this->tableGateway->select(['id' => $id]);
        $row = $formset->current();
        if (!$row) {
            throw new RuntimeException(
                sprintf("Couldn't find the record with id %d", $id)
            );
        }
        return $row;
    }
    public function savePolicy(Policy $policy)
    {
        //$my_date = date("Y-m-d H:i:s");
        $data = [
             'first_name'=> $policy->first_name,
             'last_name'=> $policy->last_name,
             'policy_number'=> $policy->policy_number,
             'start_date' => date('Y-m-d H:i:s', strtotime($policy->start_date)),
             'end_date'=> date('Y-m-d H:i:s', strtotime($policy->end_date)),
             'premium'=> $policy->premium,
        ];

        $id = (int) $policy->id;
        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }
        try {
            $this->getPolicy($id);
        } catch (RuntimeException $e) {
             throw new RuntimeException(
                 sprintf("Can't update the Record with id %d", $id)
             );
        }
        $this->tableGateway->update($data, ['id'=>$id]);
    }
    public function deletePolicy($id)
    {
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}



