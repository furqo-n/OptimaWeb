<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Checking 'clients' table in mysql_admin connection...\n";
try {
    $clientsExist = \Illuminate\Support\Facades\Schema::connection('mysql_admin')->hasTable('clients');
    echo "Table 'clients' exists: " . ($clientsExist ? 'YES' : 'NO') . "\n";

    if ($clientsExist) {
        $firstClient = \Illuminate\Support\Facades\DB::connection('mysql_admin')->table('clients')->first();
        echo "First client sample:\n";
        print_r($firstClient);
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\nChecking 'gambars' table for id=5...\n";
try {
    $text1 = \Illuminate\Support\Facades\DB::connection('mysql_admin')->table('gambars')->where('id', '5')->first();
    echo "Item id=5 sample:\n";
    print_r($text1);
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
