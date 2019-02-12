<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 1,
                    'img_url'      => 'img/tripods/3.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 2,
                    'img_url'      => 'img/tripods/4.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 3,
                    'img_url'      => 'img/tripods/5.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 4,
                    'img_url'      => 'img/tripods/6.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 5,
                    'img_url'      => 'img/tripods/7.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 6,
                    'img_url'      => 'img/tripods/8.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 7,
                    'img_url'      => 'img/tripods/9.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 8,
                    'img_url'      => 'img/tripods/10.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 9,
                    'img_url'      => 'img/tripods/11.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 10,
                    'img_url'      => 'img/tripods/12.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 11,
                    'img_url'      => 'img/tripods/13.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 12,
                    'img_url'      => 'img/tripods/14.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }

        try{
            DB::table('gallery')
            ->insert(
                [
                    'id_gallery'   => 13,
                    'img_url'      => 'img/tripods/15.jpg',
                    'category_id'  => 1,
                    'alt'          => 'alt opis'
                ]
            );
        } catch(\Exception $e) {
            echo "Image  already exist!";
        }
    }
}
