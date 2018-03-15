[![Build Status](https://api.travis-ci.org/Lendable/GocardlessEnterpriseBundle.svg)](https://travis-ci.org/Lendable/GocardlessEnterpriseBundle)

Gocardless Enterprise Bundle
============================

Integration of the Gocardless enterprise library into Symfony.

* Create a parameter called gocardless_enterprise with your gocardless configuration:
```
parameters:
    gocardless_enterprise:
        baseUrl: 'https://api.gocardless.com/'
        gocardlessVersion: '2015-07-06'
        webhook_secret: XXXXXXXXXXXXXXXXXXXXXX
        creditorId: XXXXXXXXXXXXXX
        token: XXXXXXXXXXXXXXXXXXXXXXXXXXX
```
* Add GocardlessEnterpriseBundle to your AppKernel.php
```
    new Gocardless\EnterpriseBundle\GocardlessEnterpriseBundle(),
```            

You will then have a service available to you called gocardless_enterprise.client with methods for interacting with all API endpoints.
This service includes a method for validating the signature of any webhooks received from GoCardless (assuming you configured the webhook_secret properly).

The following Models will be mapped to your Database automatically:
* Customer
* CustomerBankAccount
* Mandate
* Payment

Documentation and help can be found here:

https://developer.gocardless.com/pro/2015-07-06 (for versioned docs)

https://help.gocardless.com (for GoCardless support contact details)
