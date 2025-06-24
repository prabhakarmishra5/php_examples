<?php

// Array of random user agents
$userAgents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
    "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/89.0",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1",
    "Mozilla/5.0 (Android 11; Mobile; rv:89.0) Gecko/89.0 Firefox/89.0"
];

// Select a random user agent
$randomUserAgent = $userAgents[array_rand($userAgents)];

// Initialize cURL session
$ch = curl_init();

// Set the URL to scrape
curl_setopt($ch, CURLOPT_URL, "https://www.w3schools.com/");

// Return the response instead of outputting it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the random user agent
curl_setopt($ch, CURLOPT_USERAGENT, $randomUserAgent);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch))
{
    echo 'cURL error: ' . curl_error($ch);
} else
{
    echo $response;
}

// Close the cURL session
curl_close($ch);

// Display the scraped content
echo $response;
?> 
