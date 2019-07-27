# Vies Vat Checker Composer Package

it is a simple Composer Package for validates VAT by using Vies Database

## Usage

example code

```
<?php

use htuzel\Vies\Vies;

$viesValidator = new Vies();
$response = $viesValidator->checkVAT('GB','0472429986');

```