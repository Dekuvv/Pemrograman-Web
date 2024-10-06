<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
            
            foreach ($Dosen as $key => $value){
                echo "<tr>";
                echo "<td> {$key}</td>";
                echo "<td> {$value}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>