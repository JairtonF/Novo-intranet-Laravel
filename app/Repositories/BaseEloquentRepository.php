<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Contracts\QueryResourceRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseEloquentRepository {

    protected $model;     
    
    public function __construct(string $modelClass) {         
        if ($modelClass) $this->setModel($modelClass);

    }

    public function query (string $orderBy = 'default', string $orderByDirection = 'asc', array $withs = []): Builder {
        $orderBy = $orderBy === 'default' ? $this->getModel()->getKeyName() : $orderBy;
        
        return $this->model->with($withs)->orderBy($orderBy, $orderByDirection);
    }

    public function queryOne($value, string $column = 'default', array $withs = []): Model {
        $column = $column === 'default' ? $this->getModel()->getKeyName() : $column;

        return $this->model->where($column, $value)->with($withs)->first();
    }

    protected function countAll () {
        return $this->query->count();
    }

    private function setModel (string $modelClass) {
        $this->model = app($modelClass);
    }

    protected function getModel () {
        if ($this->model instanceof Model) return $this->model;

        throw new ModelNotFoundException('Faz-se necessário declarar o atributo $model com a instância de Illuminate\Database\Eloquent\Model');

    }

}

?>