<html>
    <head>
        <title></title>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                text-align: left;
                background-color: aquamarine;
                border: 1px solid black;
            }
            th td{
                text-align: left;
            }
            caption{
                color:blue;
                margin-top: 20px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <table>
            <caption>DANH SACH KHACH HANG</caption>
            <tr>
                <th>stt</th>
                <th>ten</th>
                <th>ngay sinh</th>
                <th>dia chi</th>
                <th>anh</th>
            </tr>
        <?php
        $customerlist = array(
            "1" => array(
                        "ten" => "mac duc luong 1",
                        "ngaysinh" => "1988-02-22",
                        "diachi" => "ha noi",
                        "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS15Fnt6795i6OKjj4_MsW16pYAzMdUKQYK7J_Z2Rv7XzA2VrBK"),
            "2" => array(
                        "ten" => "mac duc luong 2",
                        "ngaysinh" => "1988-02-22",
                        "diachi" => "ha noi",
                        "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS15Fnt6795i6OKjj4_MsW16pYAzMdUKQYK7J_Z2Rv7XzA2VrBK"),
            "3" => array(
                        "ten" => "mac duc luong 3",
                        "ngaysinh" => "1988-02-22",
                        "diachi" => "ha noi",
                        "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS15Fnt6795i6OKjj4_MsW16pYAzMdUKQYK7J_Z2Rv7XzA2VrBK"),
            "4" => array(
                        "ten" => "mac duc luong 4",
                        "ngaysinh" => "1988-02-22",
                        "diachi" => "ha noi",
                        "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS15Fnt6795i6OKjj4_MsW16pYAzMdUKQYK7J_Z2Rv7XzA2VrBK"),
            "5" => array(
                        "ten" => "mac duc luong 5",
                        "ngaysinh" => "1988-02-22",
                        "diachi" => "ha noi",
                        "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS15Fnt6795i6OKjj4_MsW16pYAzMdUKQYK7J_Z2Rv7XzA2VrBK")
        );

        foreach($customerlist as $key => $values){
            echo "<tr>";
            echo "<td style='color: black'>".$key."</td>";
            echo "<td style='color: red'>".$values['ten']."</td>";
            echo "<td style='color: red'>".$values['ngaysinh']."</td>";
            echo "<td style='color: red'>".$values['diachi']."</td>";
            echo "<td><image src ='".$values['anh']."'width='30'height='25'/></td>";
            echo "</tr>";
        }
        ?>
        </table>

    </body>
</html>