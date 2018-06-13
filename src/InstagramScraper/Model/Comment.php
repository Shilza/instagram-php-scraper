<?php

namespace InstagramScraper\Model;


class Comment extends AbstractModel
{
    /**
     * @var
     */
    protected $id;

    /**
     * @var
     */
    protected $text;

    /**
     * @var
     */
    protected $createdAt;

    /**
     * @var Account
     */
    protected $owner;

    /**
     * @var bool
     */
    protected $isLoaded = false;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return Account
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param $value
     * @param $prop
     */
    protected function initPropertiesCustom($value, $prop)
    {
        switch ($prop) {
            case 'id':
                $this->id = $value;
                break;
            case 'created_at':
                $this->createdAt = $value;
                break;
            case 'text':
                $this->text = $value;
                break;
            case 'owner':
                $this->owner = Account::create($value);
                break;
        }
    }

    ////
    protected $picId;

    /**
     * @return string
     */
    public function getPicId(){
        return $this->picId;
    }

    /**
     * Comment constructor.
     * @param string $id
     * @param string $text
     * @param string $createdAt
     * @param string $owner
     * @param string $picId
     */
    function __construct($id = "", $text = "", $createdAt = "", $owner = [], $picId = ""){
        $this->id = $id;
        $this->text = $text;
        $this->createdAt = $createdAt;
        $this->owner = Account::create($owner);
        $this->picId = $picId;
    }
}