<?php
    file_exists("vendor/autoload.php")?require "vendor/autoload.php":"";
    require_once dirname(__FILE__) . '/SWServices/Services.php';
    require_once dirname(__FILE__) . '/SWServices/Authentication/AuthenticationService.php';
    require_once dirname(__FILE__) . '/SWServices/Authentication/AuthRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Stamp/StampRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Stamp/StampService.php';
    require_once dirname(__FILE__) . '/SWServices/Stamp/EmisionTimbrado.php';
    require_once dirname(__FILE__) . '/SWServices/Cancelation/CancelationService.php';
    require_once dirname(__FILE__) . '/SWServices/Cancelation/CancelationRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Cancelation/CancelationHandler.php';
    require_once dirname(__FILE__) . '/SWServices/AccountBalance/AccountBalanceRequest.php';
    require_once dirname(__FILE__) . '/SWServices/AccountBalance/AccountBalanceService.php';
    require_once dirname(__FILE__) . '/SWServices/Validation/ValidateRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Validation/ValidateXML.php';
    require_once dirname(__FILE__) . '/SWServices/JSonIssuer/JsonIssuerRequest.php';
    require_once dirname(__FILE__) . '/SWServices/JSonIssuer/JsonEmisionTimbrado.php';
    require_once dirname(__FILE__) . '/SWServices/Toolkit/SignService.php';
    require_once dirname(__FILE__) . '/SWServices/SatQuery/SatQueryRequest.php';
    require_once dirname(__FILE__) . '/SWServices/SatQuery/SatQueryService.php';
    require_once dirname(__FILE__) . '/SWServices/Csd/CsdRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Csd/CsdService.php';
    require_once dirname(__FILE__) . '/SWServices/PDF/PdfService.php';
    require_once dirname(__FILE__) . '/SWServices/PDF/PdfRequest.php';
    require_once dirname(__FILE__) . '/SWServices/PDF/PdfHelper.php';
    require_once dirname(__FILE__) . '/SWServices/Resend/ResendService.php';
    require_once dirname(__FILE__) . '/SWServices/Resend/ResendRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Helpers/RequestHelper.php';
    require_once dirname(__FILE__) . '/SWServices/Helpers/ResponseHelper.php';
    require_once dirname(__FILE__) . '/SWServices/Stamp/StampHelper.php';
    require_once dirname(__FILE__) . '/SWServices/Storage/StorageRequest.php';
    require_once dirname(__FILE__) . '/SWServices/Storage/StorageService.php';
    require_once dirname(__FILE__) . '/SWServices/Storage/StorageResponse.php';
    require_once dirname(__FILE__) . '/SWServices/AcceptReject/AcceptRejectRequest.php';
    require_once dirname(__FILE__) . '/SWServices/AcceptReject/AcceptRejectService.php';
    
?>