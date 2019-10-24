<?php

class Order
{
    private $name;
    private $phoneNumber;
    private $address1;
    private $address2 = null;
    private $city;
    private $state;
    private $zip;
    private $email;
    private $shippingOption;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return (string)$this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return (string)$this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return (string)$this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return (string)$this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return (string)$this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param mixed $shippingOption
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
    }

    /**
     * toString magical method
     *
     * @return string
     */
    public function __toString()
    {
        $toString = "\n=========================================\n" .
            "Name         : " . $this->name . "\n" .
            "Phone Number : " . $this->phoneNumber . "\n" .
            "Address1     : " . $this->address1 . "\n" .
            "Address2     : " . $this->address2 . "\n" .
            "City         : " . $this->city . "\n" .
            "State        : " . $this->state . "\n" .
            "Zip          : " . $this->zip . "\n" .
            "Email        : " . $this->email . "\n"  .
            "Shipping Opt : " . $this->shippingOption . "\n" .
            "------------------ BODY ------------------\n" .
            $this->body .
            "\n------------------- END ------------------\n\n";

        return $toString;
    }

    public function logOrderFields()
    {
        Logger::logMsg("ORDER_FIELDS.txt", $this);
    }
}