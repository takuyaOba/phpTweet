<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        // テーブルのクリア
        DB::table('books')->truncate();
    
        // 初期データ用意（列名をキーとする連想配列）
        $books = [
                  ['name' => 'PHP Book',
                   'price' => 2000,
                   'author' => 'PHPER',
                   'user_id' => 0],
                  ['name' => 'Laravel Book',
                   'price' => 3000,
                   'author' => null,
                   'user_id' => 0],
                  ['name' => 'Ruby Book',
                   'price' => 2500,
                   'author' => 'Rubyist',
                   'user_id' => 1],
                   ['name' => 'Rails Book',
                   'price' => 4000,
                   'author' => 'Railsist',
                   'user_id' => 1]
                 ];
    
        // 登録
        foreach($books as $book) {
          \App\Book::create($book);
        }
    }
    
}
