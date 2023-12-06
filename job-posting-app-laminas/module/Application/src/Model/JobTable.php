<?php 

// module/Application/src/Model/JobTable.php

namespace Application\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;

class JobTable
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

    public function saveJob(Job $job)
    {
        $data = [
            'title' => $job->getTitle(),
            'description' => $job->getDescription(),
            'company' => $job->getCompany(),
            'location' => $job->getLocation(),
        ];

        $id = (int) $job->getId();

        if ($id === 0) {
            $this->tableGateway->insert($data);
        } else {
            // Update existing job
            if ($this->getJob($id)) {
                $this->tableGateway->update($data, ['id' => $id]);
            } else {
                throw new \RuntimeException('Job not found');
            }
        }
    }

    public function getJob($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        
        if (!$row) {
            throw new \RuntimeException('Could not find job with ID ' . $id);
        }

        return $row;
    }
}