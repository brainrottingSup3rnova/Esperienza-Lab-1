<?php 

namespace app\domain;

readonly class Request 
{
    public function __construct(
        public int $id,
        public string $titolo,
        public string $descrizione,
        public string $autore,
        public string $data
    ) {}
}