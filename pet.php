<?php
//note that the class name does not need to match file name
class Pet
{
    private $_name;
    private $_color;
    public function __construct($_name="unknown", $_color="purple")
    {
        $this->_name = $_name;
        $this->_color = $_color;
    }

    function eat()
    {
        echo"<p>$this->_name is eating</p>";
    }

    function sleep()
    {
        echo"<p>The $this->_name is sleeping</p>";
    }
    function talk()
    {
        echo"<p>The $this->_name is talking</p>";
    }
}
class dog extends Pet
{
    public function __construct($_name="Libby", $_color="White and Brown")
    {
        $this->_name = $_name;
        $this->_color = $_color;
    }
    function eat()
    {
        echo"<p>$this->_name is chewing her Bone</p>";
    }

    function sleep()
    {
        echo"<p>$this->_name sleeping</p>";
    }
    function talk()
    {
        echo"<p>$this->_name says 'Bark bark'</p>";
    }
}