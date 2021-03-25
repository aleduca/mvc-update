<?php
namespace app\models\activerecord;

use app\interfaces\ActiveRecordExecuteInterface;
use app\interfaces\ActiveRecordInterface;
use app\models\Connection;
use Exception;
use Throwable;

class Find implements ActiveRecordExecuteInterface
{
    private $fields;

    public function __construct(string $fields = '*')
    {
        $this->fields = $fields;
    }


    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);

            $connection = Connection::connect();

            $prepare = $connection->prepare($query);
            $prepare->execute($activeRecordInterface->getAttributes());
            return $prepare->fetch();
        } catch (Throwable $throw) {
            formatException($throw);
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        if (!array_key_exists($activeRecordInterface->getIdTable(), $activeRecordInterface->getAttributes())) {
            throw new Exception('O campo passado para idTable é diferente do passado no getAttributes');
        }

        return "select {$this->fields} from {$activeRecordInterface->getTable()} where {$activeRecordInterface->getIdTable()} = :{$activeRecordInterface->getIdTable()}";
    }
}
