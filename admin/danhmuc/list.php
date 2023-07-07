
<div class="title">
    <style>
        table tr th{
            padding: 20px;
            background-color: #007514;
            color: white;
        }
        table tr td {
            padding: 10px 0;
            border: 1px solid gray;
            background-color: antiquewhite;
            font-weight: bold;
        }
        table tr td input[type=checkbox]{
            width: 20px;
            height: 20px;
        }
        table tr td input[type=button]{
            width: 70px;
            height: 30px;
            background-color: #26A69A;
            color: white;
            border: none;
        }

    </style>
    <div class="container-fluid title_gray h2 text-start bg-secondary text-white">
        Danh Sách Loại Hàng
    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th></th>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th></th>
            </tr>
            <?php
            foreach ($listdmds as $dm ){
                extract($dm);
                $suadm = "index.php?act=suadm&id=".$ma_dm;
                $xoadm = "index.php?act=xoadm&id=".$ma_dm;
                echo  '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$ma_dm.'</td>
                <td>'.$ten_loai.'</td>
                <td>
                 <a href="'.$suadm.'"> <input type="button" value="Sửa" /></a>
                     <a href="'.$xoadm.'"> <input type="button" value="Xóa" /></a>
                </td>
            </tr>';
            }
            ?>
        </table>
        <form action="">
            <input
                    class="btn btn-outline-success mt-3"
                    type="button"
                    value="Chọn Tất Cả"
            />
            <input
                    class="btn  btn-outline-success mt-3"
                    type="button"
                    value="Bỏ Chon Tất Cả"
            />
            <input
                    class="btn btn-outline-success mt-3"
                    type="button"
                    value="Xóa Các Mục Đã Chọn"
            />
            <a href="index.php?act=addl"
            ><input
                        class="btn btn-outline-success mt-3"
                        type="button"
                        value="Nhập thêm"
                /></a>
        </form>
    </div>
</div>
