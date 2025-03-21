<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearController extends Controller
{
    public function getSongsByYear(Request $request)
    {
        $year = $request->query('year');
        $songs = [];

        // Add songs dynamically based on the year.
        if ($year == '2020') {
            $songs = [
                ['title' => 'Mere liye tum kafi ho', 'file' => asset('music-files/2020/urdu1.mp3'), 'image' => asset('images/img2.jpeg')],
                ['title' => 'Alag Asman', 'file' => asset('music-files/2020/urdu2.mp3'), 'image' => asset('images/img1.jpeg')],
                ['title' => 'Shayed', 'file' => asset('music-files/2020/urdu3.mp3'), 'image' => asset('images/img3.jpeg')],
                ['title' => 'Blinding lights', 'file' => asset('music-files/2020/english1.mp3'), 'image' => asset('images/img4.jpeg')],
                ['title' => 'Running on my mind', 'file' => asset('music-files/2020/english2.mp3'), 'image' => asset('images/img5.jpeg')],
                ['title' => 'Savage Love', 'file' => asset('music-files/2020/english3.mp3'), 'image' => asset('images/img6.jpeg')],

            ];
        } elseif ($year == '2021') {
            $songs = [
            ['title' => 'Aarzu', 'file' => asset('music-files/2021/urdu1.mp3'), 'image' => asset('images/image2.jpeg')],
            ['title' => 'Joona', 'file' => asset('music-files/2021/urdu2.mp3'), 'image' => asset('images/image3.jpeg')],
            ['title' => 'Param Sundari', 'file' => asset('music-files/2021/urdu3.mp3'), 'image' => asset('images/image1.jpeg')],
            ['title' => 'Snow Man', 'file' => asset('music-files/2021/english1.mp3'), 'image' => asset('images/image6.jpeg')],
            ['title' => 'Drivers License', 'file' => asset('music-files/2021/english2.mp3'), 'image' => asset('images/image4.jpeg')],
            ['title' => 'Butter', 'file' => asset('music-files/2021/english3.mp3'), 'image' => asset('images/image5.jpeg')],

            ];
        }


        elseif ($year == '2022') {
            $songs = [
                ['title' => 'Faltu Pyar', 'file' => asset('music-files/2022/urdu1.mp3'), 'image' => asset('images/2022-1.jpeg')],
                ['title' => 'Pasoori', 'file' => asset('music-files/2022/urdu2.mp3'), 'image' => asset('images/2022-3.jpeg')],
                ['title' => 'Rabba janda', 'file' => asset('music-files/2022/urdu3.mp3'), 'image' => asset('images/2022-2.jpg')],
                ['title' => 'Love me like you do', 'file' => asset('music-files/2022/english1.mp3'), 'image' => asset('images/2022-4.jpeg')],
                ['title' => 'Hold my hand', 'file' => asset('music-files/2022/english2.mp3'), 'image' => asset('images/2022-5.jpeg')],
                ['title' => 'As it was', 'file' => asset('music-files/2022/english3.mp3'), 'image' => asset('images/2022-6.jpeg')],

            ];
        } 
        elseif ($year == '2023') {
            $songs = [
                ['title' => 'Iraaday', 'file' => asset('music-files/2023/urdu1.mp3'), 'image' => asset('images/2022-2.jpeg')],
            ['title' => 'Heeriye', 'file' => asset('music-files/2023/urdu2.mp3'), 'image' => asset('images/2023-3.jpeg')],
            ['title' => 'Param Sundari', 'file' => asset('music-files/2023/urdu3.mp3'), 'image' => asset('images/image1.jpeg')],
            ['title' => 'Golden', 'file' => asset('music-files/2023/english1.mp3'), 'image' => asset('images/2023-4.jpeg')],
            ['title' => 'Jisoo', 'file' => asset('music-files/2023/english2.mp3'), 'image' => asset('images/2023-5.jpeg')],
            ['title' => 'Standing next to you', 'file' => asset('music-files/2023/english3.mp3'), 'image' => asset('images/2023-6.jpeg')],

            ];
 }
            elseif ($year == '2024') {
                $songs = [
                    ['title' => 'Ishq', 'file' => asset('music-files/2024/urdu1.mp3'), 'image' => asset('images/2024-1.jpeg')],
                    ['title' => 'Husn', 'file' => asset('music-files/2024/urdu2.mp3'), 'image' => asset('images/2024-3.jpeg')],
                    ['title' => 'Tauba Tauba', 'file' => asset('music-files/2024/urdu3.mp3'), 'image' => asset('images/2024-2.jpeg')],
                    ['title' => 'Never Let Go', 'file' => asset('music-files/2024/english1.mp3'), 'image' => asset('images/2024-4.jpeg')],
                    ['title' => 'Long Flight', 'file' => asset('music-files/2024/english2.mp3'), 'image' => asset('images/2024-5.jpeg')],
                    ['title' => 'Beautiful things', 'file' => asset('music-files/2024/english3.mp3'), 'image' => asset('images/2024-6.jpeg')],
    
                ];
        }
        // Add more years as needed.

        return response()->json($songs);
    } 
}
