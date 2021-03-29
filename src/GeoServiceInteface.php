<?php

namespace InterfaceGeo\dmitriy;

interface GeoServiceInteface
{
    public function continentCode();
    public function countryCode();
    public function parse($ip);

}
