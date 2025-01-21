<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logMessage = $_POST['log'] ?? null;
    $sessionHash = $_POST['sessionHash'] ?? null;
    if (!$logMessage || !$sessionHash) exit("Error: NO DATA.");
    $userIP = $_SERVER['REMOTE_ADDR'] ?? 'Desconocida';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Desconocido';
    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'Desconocido';
    $forwardedFor = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    $realIP = !empty($forwardedFor) ? $forwardedFor : $userIP;
    $isProxy = !empty($forwardedFor) ? 'Sí' : 'No';
    $userDetails = "IP: $userIP; Proxy: $isProxy; IP real: $realIP; Agente: $userAgent; Idioma: $acceptLanguage";
    $logMessage .= "; $userDetails";
    $logFile = __DIR__ . '/logs/' . $sessionHash . '_' . $userIP . '.txt';
    if (!is_dir(__DIR__ . '/logs')) mkdir(__DIR__ . '/logs', 0777, true);
    file_put_contents($logFile, $logMessage . "\n", FILE_APPEND);
} else {
    echo "<P><B>Error: BAD METHOD.</B> Aquí se tiene que venir con un POST >_-</P>";
}
?>
