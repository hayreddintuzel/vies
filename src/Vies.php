<?php 

/*
 * (c) Hayreddin Tüzel <hayredintuzel@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace htuzel\Vies;

use SoapClient;
use SoapFault;
use stdClass;

class Vies
{
    const API_URL = 'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl';

    /** @var SoapClient */
    private $vClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        try {
            $this->vClient = new SoapClient($this->getApiUrl());
        } catch (SoapFault $e) {
            sprintf($e);
        }
    }

    /**
     * Returns api url
     */
    public function getApiUrl(): string
    {
        return static::API_URL;
    }


    /**
     * gets vat data
     *
     * @param int|string $vatNumber The VAT number
     * @param string $countryCode The country code
     *
     * @return stdClass The VAT number's details.
     */
    public function checkVAT($vatNumber, string $countryCode): stdClass
    {
        try {
            $aDetails = [
                'vatNumber' => $sVatNumber
            ];
            return $this->oClient->matchCode($vatNumber);
        } catch (SoapFault $e) {
            sprintf($e);
        }
    }
}