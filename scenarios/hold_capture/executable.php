<?php

require(__DIR__ . '/vendor/autoload.php');

Httpful\Bootstrap::init();
RESTful\Bootstrap::init();
Balanced\Bootstrap::init();

Balanced\Settings::$api_key = "ak-test-2KZfoLyijij3Y6OyhDAvFRF9tXzelBLpD";

$hold = Balanced\Hold::get("/v1/marketplaces/TEST-MP4K6K0PWGyPtXL4LZ42sQSb/holds/HL743q4NqJPc0cxbidCj1WGk");
$debit = $hold->capture();

?>