<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Listing all tables in mysql_admin connection...\n";
try {
    $tables = \Illuminate\Support\Facades\DB::connection('mysql_admin')->select('SHOW TABLES');
    print_r($tables);
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
