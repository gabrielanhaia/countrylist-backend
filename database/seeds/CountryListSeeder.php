<?php

use Illuminate\Database\Seeder;

/**
 * Class CountryListSeeder
 * Seed responsável por ler o arquivo com os países e adicionar seus registros na base de dados.
 * Após a leitura ele move o arquivo para a pasta de arquivos processados por segurança.
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class CountryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $remotePath = 'https://gist.githubusercontent.com/ivanrosolen/f8e9e588adf0286e341407aca63b5230/raw/99e205ea104190c5e09935f06b19c30c4c0cf17e/country';

        $fileName = 'country.csv';

        $storagePath = storage_path() . DIRECTORY_SEPARATOR . 'seed' . DIRECTORY_SEPARATOR;

        $processedFilesPath = $storagePath . DIRECTORY_SEPARATOR . 'seed_processed_files' . DIRECTORY_SEPARATOR;

        if (file_exists($processedFilesPath . $fileName)) {
            return false;
        }

        copy($remotePath, $storagePath . $fileName);

        $fileHandle = fopen($storagePath . $fileName, 'r');

        $cont = 0;
        while ($line = fgets($fileHandle)) {
            if ($cont++ < 3) {
                continue;
            }

            $line = explode('   ', $line);

            if (empty($line[0]) || empty($line[1])) {
                continue;
            }

            \App\Country::firstOrCreate([
                'country_code' => trim($line[0]),
                'country_description' => trim($line[1])
            ]);
        }

        fclose($fileHandle);

        rename($storagePath . $fileName, $processedFilesPath . $fileName);
    }
}
