<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //  
    public function menu(){
        $menu = [
          [
            'nama' => 'Beranda',
          ],
          [
            'nama' => 'Berita',
            'kategori' => [
              [
                'nama_kategori' => 'Olah Raga',
                'menu' => [
                  'Sepak Bola',
                  'Bulu Tangkis'
                ]
              ],
              [
                'nama_kategori' => 'Politik'
              ],
              [
                'nama_kategori' => 'Manca Negara'
              ]
            ]
          ],
          [
            'nama' => 'Tentang'
          ]
        ];
        // dd($menu);   
        return view('contoh.menu',['menu'=> $menu]);
      }
      
      public function dosen(){
        $dosen = [
        [
          'id'=>1,
          'nama_dosen' => 'Yusuf Bachtiar',
          'mata_kuliah'=>'Pemprograman Mobile',
          'mahasiswa'=>[
            ['nama'=>'Muhammad Soleh','nilai'=>78],
            ['nama'=>'Jujun Junaedi','nilai'=>85],
            ['nama'=>'Mamat Alkatiri','nilai'=>90],
            ['nama'=>'Ubay Holin','nilai'=>87],
            ['nama'=>'Fadilah','nilai'=>95]
          ],
        ],
        [
          'id'=>2,
          'nama_dosen' =>'Yaris Riyadi',
          'mata_kuliah'=>'Pemprograman Web',
          'mahasiswa'=>[
            ['nama'=>'Alfred McTomminay','nilai'=>67],
            ['nama'=>'Bruno Kasmir','nilai'=>90],
            ['nama'=>'Akid Hendra','nilai'=>50],
            ['nama'=>'Dany Irawan','nilai'=>70],
            ['nama'=>'Candra Mega Putra','nilai'=>60]
            
            ]
            
            ]
          ];
          return view('contoh.dosen',['dosen'=> $dosen]);
        }



        public function tv(){
          $tv = [
            [ 
              'nama'=>"NEW TV",
              'acara_tv'=>[
                ['acara'=>"Doraemon",'jam_tayang'=>"10.00 - 11.00",'jadwal' =>"Senin/14 Maret 2022"],
                ['acara'=>"Kiko",'jam_tayang'=>"12.00 - 13.00",'jadwal' =>"Senin/14 Maret 2022"],
                ['acara'=>"Tayo",'jam_tayang'=>"14.00 - 15.00",'jadwal' =>"Senin/14 Maret 2022"]
                ]
          ],
            [
              'nama'=>"TVRI",
              'acara_tv'=>[

                ['acara'=>"Jejak Islam",'jam_tayang'=>"10.00 - 11.00",'jadwal' =>"Senin/15 Maret 2022"],
                ['acara'=>"Serambi Islam",'jam_tayang'=>"12.00 - 13.00",'jadwal' =>"Senin/15 Maret 2022"],
                ['acara'=>"	Klik Indonesia Pagi",'jam_tayang'=>"14.00 - 15.00",'jadwal' =>"Senin/15 Maret 2022"]
                ]
              ],
            [
              'nama'=>"BEINSPORT",
              'acara_tv'=>[

                ['acara'=>"Adu Nasib",'jam_tayang'=>"11.00 - 12.00",'jadwal' =>"Senin/16 Maret 2022"],
                ['acara'=>"Adu Mekanik",'jam_tayang'=>"12.00 - 13.00",'jadwal' =>"Senin/16 Maret 2022"],
                ['acara'=>"Adu Jotos",'jam_tayang'=>"14.00 - 15.00",'jadwal' =>"Senin/16 Maret 2022"]
                ]
              ],
            [
              'nama'=>"Ochannel",
              'acara_tv'=>[

                ['acara'=>"Voli",'jam_tayang'=>"10.00 - 11.00",'jadwal' =>"Senin/17 Maret 2022"],
                ['acara'=>"Futsal",'jam_tayang'=>"12.00 - 13.00",'jadwal' =>"Senin/17 Maret 2022"] ,
                ['acara'=>"Bulu Tangkis",'jam_tayang'=>"14.00 - 15.00",'jadwal' =>"Senin/17 Maret 2022"]
                ]
              ],
            [
              'nama'=>"Indosiar",
              'acara_tv'=>[

                ['acara'=>"Maksiat",'jam_tayang'=>"10.00 - 11.00",'jadwal' =>"Senin/17 Maret 2022"],
                ['acara'=>"Azab",'jam_tayang'=>"12.00 - 13.00",'jadwal' =>"Senin/17 Maret 2022"],
                ['acara'=>"Tobat",'jam_tayang'=>"14.00 - 15.00",'jadwal' =>"Senin/17 Maret 2022"]
                ]
          ]
        //   [
        //     'nama'=>"TVRI",
        //     'jadwal'=>"Senin/18 Maret 2022",
        //     'acara_tv'=>"Doraemon",
        // ]
      //   ['nama'=>"BEINSPORT",
      //   'jadwal_tayang'=>"Senin/18 Maret 2022",
      //   'acara_tv'=>"Doraemon",
      // ],
      // ['nama'=>"Ochannel",
      // 'jadwal_tayang'=>"Senin/18 Maret 2022",
      //        'acara_tv'=>"Doraemon",
      //       ],
      //       ['nama'=>" Indosiar",
      //       'jadwal_tayang'=>"Senin/18 Maret 2022",
      //       'acara_tv'=>"Doraemon",
      //       ]
          ];
          // dd($tv);   
          return view('contoh.tv',['tv'=> $tv]);
        }
        
        
      }

