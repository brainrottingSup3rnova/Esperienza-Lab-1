<?php 

namespace app\domain;

interface requestRepositoryInterface 
{
    //@return request
    public function findAll(): array;
}
