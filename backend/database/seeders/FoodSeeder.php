<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'food_name' => 'carne asada tacos',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '12.00',
                'food_discount' => '0.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-1.png',
            ],
            [
                'food_name' => 'shrimp tacos',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '15.00',
                'food_discount' => '3.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-2.png',
            ],
            [
                'food_name' => 'barbacoa tacos',
                'food_star' => '4.5',
                'food_vote' => '500',
                'food_price' => '12.00',
                'food_discount' => '0.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-3.png',
            ],
            [
                'food_name' => 'tacos al pastor',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '13.00',
                'food_discount' => '2.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-4.png',
            ],
            [
                'food_name' => 'tinga tacos',
                'food_star' => '4',
                'food_vote' => '500',
                'food_price' => '11.00',
                'food_discount' => '0.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'normal',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-5.png',
            ],
            [
                'food_name' => 'campechanos tacos',
                'food_star' => '4',
                'food_vote' => '500',
                'food_price' => '11.00',
                'food_discount' => '1.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'new dishes',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-6.png',
            ],
            [
                'food_name' => 'carnitas tacos',
                'food_star' => '4.5',
                'food_vote' => '500',
                'food_price' => '14.00',
                'food_discount' => '2.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'seasonal dishes online only',
                'food_type' => 'meat',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-7.png',
            ],
            [
                'food_name' => 'vegan tacos',
                'food_star' => '4.5',
                'food_vote' => '100',
                'food_price' => '9.00',
                'food_discount' => '2.00',
                'food_desc' => '03 pieces per serving',
                'food_status' => 'new dishes',
                'food_type' => 'vegan',
                'food_category' => 'taco',
                'food_src' => 'taco/taco-8.png',
            ],
            [
                'food_name' => 'wet burrito',
                'food_star' => '4.5',
                'food_vote' => '600',
                'food_price' => '14.00',
                'food_discount' => '0.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'new dishes',
                'food_type' => 'meat',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-1.png',
            ],
            [
                'food_name' => 'poncho burrito',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '15.00',
                'food_discount' => '3.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-2.png',
            ],
            [
                'food_name' => 'bean & cheese burrito',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '14.00',
                'food_discount' => '0.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'best seller',
                'food_type' => 'vegan',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-3.png',
            ],
            [
                'food_name' => 'breakfast burrito',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '12.00',
                'food_discount' => '2.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'new dishes',
                'food_type' => 'meat',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-4.png',
            ],
            [
                'food_name' => 'california burrito',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '14.00',
                'food_discount' => '0.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-5.png',
            ],
            [
                'food_name' => 'chimichanga',
                'food_star' => '4',
                'food_vote' => '400',
                'food_price' => '12.00',
                'food_discount' => '2.00',
                'food_desc' => '01 roll per serving',
                'food_status' => 'seasonal dishes',
                'food_type' => 'meat',
                'food_category' => 'burrito',
                'food_src' => 'burrito/burrito-6.png',
            ],
            [
                'food_name' => 'nacho tots',
                'food_star' => '4',
                'food_vote' => '699',
                'food_price' => '12.00',
                'food_discount' => '2.00',
                'food_desc' => '01 tray per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'nachos',
                'food_src' => 'nachos/nachos-1.png',
            ],
            [
                'food_name' => 'root beer pork nachos',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '12.00',
                'food_discount' => '0.00',
                'food_desc' => '01 tray per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'nachos',
                'food_src' => 'nachos/nachos-2.png',
            ],
            [
                'food_name' => 'shrimp nachos',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '17.00',
                'food_discount' => '2.00',
                'food_desc' => '01 tray per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'nachos',
                'food_src' => 'nachos/nachos-3.png',
            ],
            [
                'food_name' => 'chicken nachos',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '11.00',
                'food_discount' => '0.00',
                'food_desc' => '01 tray per serving',
                'food_status' => 'best seller',
                'food_type' => 'meat',
                'food_category' => 'nachos',
                'food_src' => 'nachos/nachos-4.png',
            ],
            [
                'food_name' => 'only nachos',
                'food_star' => '4',
                'food_vote' => '999',
                'food_price' => '7.00',
                'food_discount' => '2.00',
                'food_desc' => '01 tray per serving',
                'food_status' => 'normal',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/nachos-5.png',
            ],
            [
                'food_name' => 'pico de gallo',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '5.00',
                'food_discount' => '2.00',
                'food_desc' => '01 bowl per serving',
                'food_status' => 'best seller',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/salsa-1.png',
            ],
            [
                'food_name' => 'salsa guille',
                'food_star' => '4',
                'food_vote' => '699',
                'food_price' => '5.00',
                'food_discount' => '2.00',
                'food_desc' => '01 bowl per serving',
                'food_status' => 'best seller',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/salsa-2.png',
            ],
            [
                'food_name' => 'tomatillo salsa',
                'food_star' => '4.5',
                'food_vote' => '499',
                'food_price' => '5.00',
                'food_discount' => '2.00',
                'food_desc' => '01 bowl per serving',
                'food_status' => 'seasonal dishes',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/salsa-3.png',
            ],
            [
                'food_name' => 'roasted tomato salsa',
                'food_star' => '4.5',
                'food_vote' => '999',
                'food_price' => '5.00',
                'food_discount' => '2.00',
                'food_desc' => '01 bowl per serving',
                'food_status' => 'best seller',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/salsa-4.png',
            ],
            [
                'food_name' => 'guacamole',
                'food_star' => '4.5',
                'food_vote' => '699',
                'food_price' => '5.00',
                'food_discount' => '2.00',
                'food_desc' => '01 bowl per serving',
                'food_status' => 'best seller',
                'food_type' => 'vegan',
                'food_category' => 'nachos',
                'food_src' => 'nachos/salsa-5.png',
            ],
        ];
        foreach ($foods as $food) {
            DB::table('foods')->insert($food);
        }
    }
}
