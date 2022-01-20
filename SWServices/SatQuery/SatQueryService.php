<?php
namespace SWServices\SatQuery;

use SWServices\Services as Services;
use SWServices\SatQuery\SatQueryRequest as satQueryRequest;

class SatQueryService extends Services{
  
    public static function ServicioConsultaSAT($url, $rfcEmisor, $rfcReceptor, $total, $uuid, $fe8) {
        return satQueryRequest::soapRequest($url, $rfcEmisor, $rfcReceptor, $total, $uuid, $fe8);
    }
}