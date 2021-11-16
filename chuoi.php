<!DOCTYPE html>
<html>
    <head>
    </head>
    <body style="background-color: #222222; color: #fff">
        <?php
        $chuoi=$_POST["chuoi1"];
        function ham_dao_nguoc_chuoi($str)
        {
            $n = strlen($str);
            if($n == 1)
            {
                return $str;
            }
            else
            {
                $n--;
                return ham_dao_nguoc_chuoi(substr($str,1, $n)) . substr($str, 0, 1);
            }
        }
        function ham_kiem_tra_chu_thuong($str)
        {
            for ($i = 0; $i < strlen($str); $i++)
            {
                if(ord($str[$i]) >= ord( 'A' ) && ord($str[$i]) <= ord('Z'))
                {
                    return false;
                } 
            }
            return true;
        }
        function ham_kiem_tra_chu_hoa($str)
        {
            for ($i = 0; $i < strlen($str); $i++)
            {
                if(ord($str[$i]) >= ord( 'a' ) && ord($str[$i]) <= ord('z'))
                {
                    return false;
                } 
            }
            return true;
        }
        function chuoi_con($str1, $str2)
        {
            if (strpos($str1,$str2) !== false)
            {
                echo '<br>Chuoi da cho co chua chuoi '.$str2;
            }
            else
            {
                echo '<br>Chuoi da cho khong chua chuoi '.$str2;
            }
        }
        print("<br> Doi chuoi thanh chu hoa: ");
        print(strtoupper($chuoi));
        //--
        print("<br> Doi chuoi thanh chu thuong: ");
        print(strtolower($chuoi));
        //--
        print("<br> Chu cai dau tien cua chuoi thanh chu hoa: ");
        print(ucfirst($chuoi));
        //--
        print("<br> Chu cai dau tien cua chuoi thanh chu thuong: ");
        print(strtolower($chuoi));
        echo '<br>Chuoi vua nhap la: '. $chuoi;
        echo '<br>Chuoi sau khi dao nguoc la: '. ham_dao_nguoc_chuoi($chuoi). '<br>';
        if(ham_kiem_tra_chu_thuong($chuoi)==true)
            echo '<br> Chuoi ban nhap la chu thuong';
        else
            echo '<br> Chuoi ban nhap co lan chu hoa';
        if(ham_kiem_tra_chu_hoa($chuoi)==true)
            echo '<br> Chuoi ban nhap la chu hoa';
        else
            echo '<br> Chuoi ban nhap co lan chu thuong';
        chuoi_con($chuoi, 'lap trinh PHP');
    ?>        
    </body>
</html>