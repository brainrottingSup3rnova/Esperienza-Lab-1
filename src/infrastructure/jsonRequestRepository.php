<?php 

namespace app\infrastructure;

use app\domain\request;
use app\domain\requestRepositoryInterface;
use RuntimeException;

class jsonRequestRepository implements  requestRepositoryInterface
{
    public function __construct (
        private string $filePath
    ) {}

    public function findall(): array 
    {
        if(!file_exists($this->filePath))
        {
            throw new RuntimeException("impossibile trovare bla bla");
        }

        $content = file_get_contents($this->filePath);
        $data = json_decode($content, true);

        if($data === null)
        {
            return [];
        }

        $requests = [];
        foreach ($data as $item)
        {
            $requests[] = new Request(
                id: $item['id'],
                titolo: $item['titolo'],
                descrizione: $item['descrizione'],
                autore: $item['autore'],
                data: $item['data']
            );
        }

        return $requests;
    }
}