<?php


class Category
{
    private $ID;
    private $category;
    private $description;

    /**
     * Category constructor.
     * @param $ID
     * @param $category
     * @param $description
     */
    public function initialize($ID, $category, $description)
    {
        $this->ID = $ID;
        $this->category = $category;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }




    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }
    public function sanitizeStrings(){
        $this->description=filter_var($this->description,FILTER_SANITIZE_STRING);
        $this->category=filter_var($this->category,FILTER_SANITIZE_STRING);
    }
}