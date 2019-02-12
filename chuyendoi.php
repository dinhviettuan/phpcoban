<?php

$nwords = array(    0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ' );

function int_to_words($x)
{
     global $nwords;
     if(!is_numeric($x))
     {
         $w = '#';
     }else if(fmod($x, 1) != 0)
     {
         $w = '#';
     }else{
         if($x < 0)
         {
             $w = 'minus ';
             $x = -$x;
         }else{
             $w = '';
         }
         if($x < 21)
         {
             $w .= $nwords[$x];
         }else if($x < 100)
         {
             $w .= $nwords[10 * floor($x/10)];
             $r = fmod($x, 10);
             if($r > 0)
             {
                 $w .= '-'. $nwords[$r];
             }
         } else if($x < 1000)
         {
             $w .= $nwords[floor($x/100)] .' <b>Tram</b>';
             $r = fmod($x, 100);
             if($r > 0)
             {
                 $w .= ' and '. int_to_words($r);
             }
         } else if($x < 1000000)
         {
             $w .= int_to_words(floor($x/1000)) .' <b>Ngan</b>';
             $r = fmod($x, 1000);
             if($r > 0)
             {
                 $w .= ' ';
                 if($r < 100)
                 {
                     $w .= 'and ';
                 }
                 $w .= int_to_words($r);
             }
         } else {
             $w .= int_to_words(floor($x/1000000)) .' <b>Trieu</b>';
             $r = fmod($x, 1000000);
             if($r > 0)
             {
                 $w .= ' ';
                 if($r < 100)
                 {
                     $word .= 'and ';
                 }
                 $w .= int_to_words($r);
             }
         }
     }
     return $w;
}
if(isset($_POST['num']))
{
     echo '
     Số cần chuyển <b>'.$_POST['num'].'</b>:<br />'.int_to_words($_POST['num']).'<p>
     <a href="'.$_SERVER['PHP_SELF'].'">Thử lại</a>';
}else{
     echo '
     <form method="post" action="'.$_SERVER['PHP_SELF'].'">
         <input type="text" name="num">
         <input type="submit" value="Chuyển">
     </form>';
}
?>