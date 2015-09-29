<?php
class thisIsJustATestClass{
    /**
     * @var string
     */
    private $privateVar;

    /**
     * @var string
     */
    public $publicVar;

    /**
     * @return string
     */
    public function getPrivateVar()
    {
        return $this->privateVar;
    }

    /**
     * @param string $privateVar
     */
    public function setPrivateVar($privateVar)
    {
        $this->privateVar = $privateVar;
    }

    /**
     * @return string
     */
    public function getPublicVar()
    {
        return $this->publicVar;
    }

    /**
     * @param string $publicVar
     */
    public function setPublicVar($publicVar)
    {
        $this->publicVar = $publicVar;
    }

    protected function badFunction()
    {
        var_dump($this->publicVar);
    }
}
