<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]    
    ],
    [
        "nama" =>  "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item){
        echo "<li> {$item['nama']} ";
        // Cek apakah ada sub-menu
        if (isset($item['subMenu'])) {
            // Panggil fungsi ini lagi untuk sub-menu
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>
