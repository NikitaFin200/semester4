<?php
$age=102;

if($age>=18 and $age<=59){
    print("Вам еще рабоать и рабоать");
}

elseif($age>1 and $age<=17){
    print("Вам еще рано работать");
}

elseif($age<1 or $age>101 ){
    print("Неизвестный возраст");
}

elseif($age>59){
    print('Вам пора на пенсию');
}
?>