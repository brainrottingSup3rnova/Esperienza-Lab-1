<?php 

namespace app\application;

use app\domain\request;
use app\domain\requestRepositoryInterface;

class getRequestsList
{
    public function __construct (
        private requestRepositoryInterface $repository
    ) {}

    public function execute(): array 
    {
        $requests = $this -> repository-> findAll();

        usort ($requests, function (request $a, request $b) {
            return strcmp($b->data, $a->data);
        });

        return $requests;
    }
}