<?php


return [
    'table_storage' => [
        'table_name' => 'doctrine_migration_versions',
        'version_column_name' => 'version',
        'version_column_length' => 1024,
        'executed_at_column_name' => 'executed_at',
        'execution_time_column_name' => 'execution_time',
    ],

    'migrations_paths' => [
        'Estudos\Doctrine\Migrations' => 'src/Migrations',
        'Estudos\Doctrine\Migrations' => './src/Migrations',
    ],

    'all_or_nothing' => true,
    'transactional' => true,
    'check_database_platform' => true,
    'organize_migrations' => 'none',
    'connection' => null,
    'em' => null,
];

//return [
//    "name" => "Fundamentos Doctrine",
//    "migrations_namespace" => "Estudos\Doctrine\Migrations",
//    "table_name" => "doctrine_migration_versions",
//    "column_name" => "version",
//    "column_length" => 14,
//    "executed_at_column_name" => "executed_at",
//    "migrations_directory" => "src/Migrations",
//    "all_or_nothing" => true,
//];