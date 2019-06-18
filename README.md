[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Lendable/GocardlessEnterpriseBundle/badges/quality-score.png)](https://scrutinizer-ci.com/g/Lendable/GocardlessEnterpriseBundle/?branch=master)
[![Build Status](https://api.travis-ci.org/Lendable/GocardlessEnterpriseBundle.svg?branch=master)](https://www.travis-ci.org/Lendable/GocardlessEnterpriseBundle)
[![Coverage Status](https://coveralls.io/repos/github/Lendable/GocardlessEnterpriseBundle/badge.svg?branch=master)](https://coveralls.io/github/Lendable/GocardlessEnterpriseBundle?branch=master)
[![Latest Stable Version](https://poser.pugx.org/lendable/gocardless-enterprise-bundle/version)](https://packagist.org/packages/lendable/gocardless-enterprise-bundle)
[![Total Downloads](https://poser.pugx.org/lendable/gocardless-enterprise-bundle/downloads)](https://packagist.org/packages/lendable/gocardless-enterprise-bundle)

GoCardless Enterprise Bundle
============================

Integration of the GoCardless Enterprise API into Symfony.

* Create a new parameter called `gocardless_enterprise` in your configuration:
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
``` php
    new Gocardless\EnterpriseBundle\GocardlessEnterpriseBundle(),
```            

You will then have a service available to you called `gocardless_enterprise.client` with methods for interacting with GoCardless Enterprise API endpoints.
This service includes a method for validating the signature of any webhook received from GoCardless (assuming you configured the `webhook_secret` properly).

The following Models will be mapped to your database automatically:
* Customer
* CustomerBankAccount
* Mandate
* Payment

Documentation and help can be found here:

https://developer.gocardless.com/pro/2015-07-06 (for versioned docs)

https://help.gocardless.com (for GoCardless support contact details)
