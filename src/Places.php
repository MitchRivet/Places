<?php

    class Places
    {
      private $city_name

      function __construct($city)
      {
          $this->city_name = $city;
      }

      function getCityName()
        {
            return $this->$city_name;
        }

      function setCityName($new_city_name)
      {
            $this->city_name = $new_city_name;
      }
    }

?>