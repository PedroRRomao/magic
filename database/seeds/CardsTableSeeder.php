<?php


use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema;

class CardsTableSeeder extends CsvSeeder
{
  public function __construct()
   {
       $this->file = '/database/csv/cards.csv';
       $this->mapping = ['id', 'src'];
       $this->header = FALSE;
       $this->delimiter = ',';
   }

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
     //   // Recommended when importing larger CSVs
     // DB::disableQueryLog();
     parent::run();
   }
}
