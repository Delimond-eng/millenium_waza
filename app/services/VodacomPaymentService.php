<?php

namespace App\Services;

use App\Sdk\APIContext;
use App\Sdk\APIMethodType;
use App\Sdk\APIRequest;
use Exception;
use GuzzleHttp\Client;
use phpseclib3\Crypt\PublicKeyLoader;

class VodacomPaymentService
{

    public function  createTestPayment(){

        $sessionID = $this->createSession();
        $token = $this->create_bearer_token2($sessionID);

        if (!$token || !$sessionID) {
            return ['error' => 'Failed to create token or session ID'];
        }

        $client = new Client([
            'base_uri' => 'https://openapi.m-pesa.com:443',
        ]);
        // Définir les en-têtes
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
            'Origin' => '*',
            'Host' => 'openapi.m-pesa.com'
        ];

        // Définir les données de la requête
        $body = [
            "input_Amount" => "10",
            "input_Country" => "DRC",
            "input_Currency" => "USD",
            "input_CustomerMSISDN" => "243813719944",
            "input_ServiceProviderCode" => "000000",
            "input_ThirdPartyConversationID" => $sessionID,
            "input_TransactionReference" => "T1234C",
            "input_PurchasedItemsDesc" => "Formation paiement"
        ];

        try {
            // Faire la requête
            $response = $client->post('/sandbox/ipg/v2/vodacomDRC/c2bPayment/singleStage/', [
                'headers' => $headers,
                'json' => $body
            ]);

            // Décoder la réponse JSON
            $data = json_decode($response->getBody(), true);
            // Retourner la réponse complète
            return $data;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Gérer les exceptions de requête
            if ($e->hasResponse()) {
                return json_decode($e->getResponse()->getBody()->getContents(), true);
            } else {
                return ['error' => $e->getMessage()];
            }
        } catch (\GuzzleHttp\Exception\ConnectException $e) {
            return json_decode($e->getMessage(), true);
        }
    }

     /**
      * Payment lancement
      * @param mixed $datas
      * @return mixed
      */
     public function  createPayment($datas){

        $sessionID = $this->createSession();
        $token = $this->create_bearer_token2($sessionID);

        if (!$token || !$sessionID) {
            return ['error' => 'Failed to create token or session ID'];
        }

        $client = new Client([
            'base_uri' => 'https://openapi.m-pesa.com:443',
        ]);
        // Définir les en-têtes
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
            'Origin' => '*',
            'Host' => 'openapi.m-pesa.com'
        ];

        // Définir les données de la requête
        $body = [
            "customer_id" => $datas["customer_id"],
            "input_Amount" => $datas["amount"],
            "input_Country" => "DRC",
            "input_Currency" => $datas["currency"],
            "input_CustomerMSISDN" => $datas["phone"],
            "input_ServiceProviderCode" => "000000",
            "input_ThirdPartyConversationID" => $sessionID,
            "input_TransactionReference" => "T1234C",
            "input_PurchasedItemsDesc" => "Formation paiements"
        ];

        try {
            // Faire la requête
            $response = $client->post('/sandbox/ipg/v2/vodacomDRC/c2bPayment/singleStage/', [
                'headers' => $headers,
                'json' => $body
            ]);

            // Décoder la réponse JSON
            $data = json_decode($response->getBody(), true);
            // Retourner la réponse complète
            return $data;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Gérer les exceptions de requête
            if ($e->hasResponse()) {
                return json_decode($e->getResponse()->getBody()->getContents(), true);
            } else {
                return ['error' => $e->getMessage()];
            }
        } catch (\GuzzleHttp\Exception\ConnectException $e) {
            return json_decode($e->getMessage(), true);
        }
    }

    /**
     * Summary of createSession
     * @return mixed
     */
    private function createSession(){
           $token = $this->create_bearer_token();
        $client = new Client([
            'base_uri' => 'https://openapi.m-pesa.com:443',
            'headers' => [
                'Origin' => '*',
                'Host' => 'openapi.m-pesa.com',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ]
        ]);
        // Faire la requête
        $response = $client->get('/sandbox/ipg/v2/vodacomDRC/getSession/');

        // Décoder la réponse JSON
        $data = json_decode($response->getBody(), true);

        // Retourner output_SessionID
        return $data['output_SessionID'];
    }


    /**
     * Converti la clé de l'APPLI en clé rsa base64
     * @return string
     */
    private function create_bearer_token() {
        // Charger et formater correctement la clé publique RSA
        $publicKey = config("vodacom.public_key");
        $rsa = PublicKeyLoader::load($publicKey);
        // Extraire la clé publique en format PEM si nécessaire
        $publicKeyPEM = $rsa->toString('PKCS8');

        // Copier et sauvegarder la clé API
        $apiKey = config('vodacom.api_key');
        $apiEncrypted = '';
        $encrypted = '';

        // Utiliser OpenSSL pour chiffrer la clé API avec la clé publique
        if (openssl_public_encrypt($apiKey, $encrypted, $publicKeyPEM)) {
            // Encoder la clé API avec le chiffre et le régresser RSA en tant que format de chaîne Base64
            $apiEncrypted = base64_encode($encrypted);
        }
        // Le résultat est votre clé API chiffrée
        return $apiEncrypted;
    }


    private function create_bearer_token2($sessionKey) {
        // Charger et formater correctement la clé publique RSA
        $publicKey = config("vodacom.public_key");
        $rsa = PublicKeyLoader::load($publicKey);
        // Extraire la clé publique en format PEM si nécessaire
        $publicKeyPEM = $rsa->toString('PKCS8');

        // Copier et sauvegarder la clé API
        $apiKey = $sessionKey;
        $apiEncrypted = '';
        $encrypted = '';

        // Utiliser OpenSSL pour chiffrer la clé API avec la clé publique
        if (openssl_public_encrypt($apiKey, $encrypted, $publicKeyPEM)) {
            // Encoder la clé API avec le chiffre et le régresser RSA en tant que format de chaîne Base64
            $apiEncrypted = base64_encode($encrypted);
        }
        // Le résultat est votre clé API chiffrée
        return $apiEncrypted;
    }

}
