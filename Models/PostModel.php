<?php

class PostModel extends BaseModel
{
    const TABLE = 'post';
    
    public function getAll($select = ['*'], $orderBy = [], $limit=15){
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    public function findById($id){
        return $this->find(self::TABLE,$id);
    }

    public function getByCategoryId($categoryId)
    {
        $sql = "SELECT* FROM ${self::TABLE} WHERE category_id=${categoryId}";
        return $this->getByQuery($sql);
    }
    
    public function store($data)
    {
        $this->create(self::TABLE,$data);
    }

    public function updateData($id, $data)
    {
        return $this->update(self::TABLE,$id, $data);
    }

    public function destroy($id)
    {
        return $this->delete(self::TABLE ,$id);
    }
}